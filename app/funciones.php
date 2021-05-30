<?php 
namespace App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
class funciones
{
    public static function updCaliPre($calificacion , $precio , $id_loc)
    {
        $datos = DB::select("select calificacion , precio from locales where id = $id_loc");
        $calActGeneral = $datos[0]->calificacion;
        $prActGenral = $datos[0]->precio;
        $datos = DB::select("select calificaciones , precio from opiniones where id_loc = $id_loc");
        $totalCal=0;
        $totalPr=0;
        $cal = 1;
        $pre = 1;
        foreach ($datos as $key => $value) 
        {
            if( $datos[$key]->calificaciones != null)
            {
                $totalCal = $totalCal + $datos[$key]->calificaciones;
                $cal++;
            }
            if($datos[$key]->precio != null)
            {
                $totalPr = $totalPr + $datos[$key]->precio;
                $pre++;
            }   
        }
        
        $resPr = ($totalPr + $precio)/$pre;
        $sumaCaActual = $totalCal + $calificacion;
        $resCal = $sumaCaActual/$cal;
        $upd = DB::update("update locales set calificacion='$resCal' , precio='$resPr' where id='$id_loc'");
    }

}
?>