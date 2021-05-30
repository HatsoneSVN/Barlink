<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Class\local;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locales_destacados=array();
        $bares_destacados = array();
        $select = DB::select("select * from locales where restaurante = 'si' ORDER BY calificacion DESC LIMIT 8");
        foreach ($select as $key => $value) {
            $local = new Local();
                $local->setId($select[$key]->id);
                $local->setNombre($select[$key]->name);
                $local->setDireccion($select[$key]->direccion);
                $local->setTlf($select[$key]->tlf);
                $local->setPrecio($select[$key]->precio);
                $local->setCalificacion($select[$key]->calificacion);
                $local->setImg($select[$key]->img);
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
                $locales_destacados[$key] = $local;
        }
        $select = DB::select("select * from locales where bar = 'si' ORDER BY calificacion DESC LIMIT 8");
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
                $bares_destacados[$key] = $local;
        }
        return view('index' ,['locales_destacados'=>$locales_destacados , 'bares_destacados'=>$bares_destacados]);
    }
}
