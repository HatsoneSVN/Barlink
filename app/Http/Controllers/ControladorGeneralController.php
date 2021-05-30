<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
//para comprobar usuario autenticado y acceder a los metodos auth
use Illuminate\Support\Facades\Auth;
use App\Class\local;
use App\Class\Opinion;
use Illuminate\Http\Request;
/*sin la siguiente linea no reconoce DB*/
use Illuminate\Support\Facades\DB;
use App\funciones;
use League\CommonMark\Inline\Renderer\EmphasisRenderer;

class ControladorGeneralController extends Controller
{
    public function local($id , $offset)
    {
        if(Auth::check())
        {
            $pg = 0;
            $limit = 5;
            $siguiente = true;
            $anterior=true;
            $opinionesTotal = 0;
            $muyRecomendado = 0;
            $recomendado = 0;
            $noRecomendado = 0;
            $local = new Local();
            $opiniones = array();
            //extraemos los datos del local seleccionado...
            //
            $select = DB::select("select * from locales where id = $id");
            $contenido_select = $select[0];
            $local->setId($contenido_select->id);
            $local->setNombre($contenido_select->name);
            $local->setDireccion($contenido_select->direccion);
            $local->setTlf($contenido_select->tlf);
            $local->setPrecio($contenido_select->precio);
            $local->setCalificacion($contenido_select->calificacion);
            $local->setImg($contenido_select->img);
        $contCat = array(
            "Pizzeria"=>$contenido_select->pizzeria ,
            "Caffe"=>$contenido_select->caffe ,
            "Español"=>$contenido_select->espanyol ,
            "Carne"=>$contenido_select->carne ,
            "Italiano"=>$contenido_select->italiano ,
            "Com_rap"=>$contenido_select->com_rapida ,
            "Mediterraneo"=>$contenido_select->mediterraneo ,
                "Bar"=>$contenido_select->bar ,
                "Pub"=>$contenido_select->pub ,
                "Restaurante"=>$contenido_select->restaurante);
            $categorias = $local->Categorias($contCat);
            $local->setCategorias($categorias);
            //extraemos las opiniones del local seleccionado...
            //
            $select = DB::select("select * from opiniones where id_loc = $id ORDER BY id_op DESC LIMIT $limit OFFSET $offset ");
            foreach ($select as $key => $value) {
                $opinion = new Opinion($select[$key]->id_op , $select[$key]->opinion , $select[$key]->titulo , $select[$key]->id_us , $select[$key]->id_loc ,$select[$key]->calificaciones , $select[$key]->precio);
                $selectUs = DB::select("select name from users where id = ".$select[$key]->id_us);
                $opinion->setNombreUs($selectUs[0]->name);
                $opiniones[$key] = ($opinion);
                $opinionesTotal = count($opiniones);
            }
            if($contenido_select->calificacion > 3)
            {
                $puntGeneral = "Muy recomendado";
            }
            elseif($contenido_select->calificacion == 3)
            {
                $puntGeneral = "Recomendado";
            }
            elseif($contenido_select->calificacion < 3)
            {
                $puntGeneral = "No recomendado";
            }
            //sentencia sql para contar las op del local
            //
            $select = DB::select("select * from opiniones where id_loc = $id");
            //recogemos y contamos el número de opiniones segun la calificación
            //
            foreach ($select as $key => $value) {
                if($select[$key]->calificaciones > 3)
                {
                    $muyRecomendado++;
                }
                elseif($select[$key]->calificaciones == 3)
                {
                    $recomendado++;
                }
                elseif($select[$key]->calificaciones < 3)
                {
                    $noRecomendado++;
                }
            }
            $totalOp = count($select);
            //paginado
            if($totalOp<=5)
            {
                $pg=" ";
            }
            else
            {
                $pg = round($offset / 5) + 1;
            }
            //Control de seleccion siguiente y anterior
            if(($totalOp-$offset)<=5)
            {
                $siguiente = false;
            }
            else
            {
                $siguiente = true;
            }
            if($offset <= 0 || $totalOp==0 || $totalOp < 5)
            {
                $anterior = false;
            }
            else
            {
                $anterior=true;
            }
            return view('locales' , ['local' => $local , 'opiniones'=>$opiniones , 'muyRecomendado'=>$muyRecomendado , 'recomendado'=>$recomendado , 'noRecomendado'=>$noRecomendado , 'opinionesTotal'=>$totalOp , 'puntGeneral'=>$puntGeneral , "offset"=>$offset , "siguiente"=>$siguiente , "anterior"=>$anterior , "pg"=>$pg]);
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function opinion($id)
    {
        if(Auth::check())
        {
            $local = new Local();
            $datos = DB::select("select name , direccion , tlf , calificacion , precio , id ,img from locales where id = $id");
            $datos_obj = $datos[0];
            $local->setId($datos_obj->id);
            $local->setNombre($datos_obj->name);
            $local->setDireccion($datos_obj->direccion);
            $local->setTlf($datos_obj->tlf);
            $local->setPrecio($datos_obj->precio);
            $local->setCalificacion($datos_obj->calificacion);
            $local->setImg($datos_obj->img);
            $op = DB::select("select * from opiniones where id_loc = $id");
            return view('opinion' , ['local' => $local ,'opiniones'=>$op ,'id_us'=>$id]);
        }
        else
        {
            return redirect()->route('login');
        }
       
    }
    public function guardarOp()
    {
        if(Auth::check())
        {
            $id_us = Auth::id();
            $puntuacion = $_POST['estrellas'];
            $titulo_op = $_POST['titulo_op'];
            $opinion = $_POST['opinion'];
            $opinion_precio = $_POST['op_precio'];
            $id_loc = $_POST['id_loc'];
            $insert_op = DB::insert("insert into barlink.opiniones ( opinion , titulo, id_us, id_loc , calificaciones , precio) values ( '$opinion' , '$titulo_op' ,'$id_us' ,'$id_loc' ,'$puntuacion' , '$opinion_precio')");
            $resutado = funciones::updCaliPre($puntuacion , $opinion_precio , $id_loc);
            return redirect()->route('local' ,['id' => $id_loc , 'offset'=>0]);
            return view('opinion' , ['local' => $local ,'opiniones'=>$op ,'id_us'=>$id]);
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function categoria($categoria)
    {
        if(Auth::check())
        {
            if($categoria == "ASEQUIBLE")
            {
                $select = DB::select("select * from locales where precio = 1 ORDER BY calificacion DESC");
            }
            elseif($categoria == "EXCLUSIVO")
            {
                $select = DB::select("select * from locales where precio = 3 ORDER BY calificacion DESC");
            }
            elseif ($categoria == "DESTACADOS") 
            {
                $select = DB::select("select * from locales where calificacion > 3 ORDER BY calificacion DESC");
            }
            else 
            {
                $select = DB::select("select * from locales where $categoria = 'si' ORDER BY calificacion DESC"); 
            }
                $locales = array();
                $contCat=array();
                foreach ($select as $key => $value) {
                    $local = new Local();
                    $local->setId($select[$key]->id);
                    $local->setNombre($select[$key]->name);
                    $local->setDireccion($select[$key]->direccion);
                    $local->setTlf($select[$key]->tlf);
                    $local->setPrecio($select[$key]->precio);
                    $local->setCalificacion($select[$key]->calificacion);
                    $local->setImg($select[$key]->img);
                    $categorias = $local->Categorias($contCat);
                    $contCat = array(
                        "japones"=>$select[$key]->japones,
                        "Pizzeria"=>$select[$key]->pizzeria ,
                        "Caffe"=>$select[$key]->caffe ,
                        "Español"=>$select[$key]->espanyol ,
                        "Carne"=>$select[$key]->carne ,
                        "Italiano"=>$select[$key]->italiano ,
                        "Com_rap"=>$select[$key]->com_rapida ,
                        "Mediterraneo"=>$select[$key]->mediterraneo ,
                        "Bar"=>$select[$key]->bar ,
                        "Pub"=>$select[$key]->pub);
                    $categorias = $local->Categorias($contCat);
                    $local->setCategorias($categorias);
                    $locales[$key] = $local;
                }
            //var_dump($locales);
            return view('cat' , ['locales' => $locales , 'categoria'=>$categoria]);
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function eliminarOp($id_op , $id_loc)
    {
        $eliminar = DB::delete("DELETE FROM opiniones WHERE id_op = $id_op");
        return redirect()->route('local' ,['id' => $id_loc , 'offset'=>0]);
    }
}
