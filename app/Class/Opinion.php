<?php
namespace App\Class;
class Opinion
{
    public $id_op;
    public $opinion;
    public $titulo;
    public $id_us;
    public $id_loc;
    public $calificaciones;
    public $precio;
    public $nombreUs;
    public function __construct($id_op , $opinion , $titulo , $id_us , $id_loc ,$calificaciones , $precio)
    {
        $this->id_op=$id_op;
        $this->opinion=$opinion;
        $this->titulo=$titulo;
        $this->id_us=$id_us;
        $this->id_loc=$id_loc;
        $this->calificaciones=$calificaciones;
        $this->precio=$precio;
    }
//id_op
    public function getId_op()
    {
        return $this->id_op;
    }
    public function setId_op($id_op)
    {
        $this->id_op = $id_op;
    }
//opinion
    public function getOpinion()
    {
        return $this->opinion;
    }
    public function setOpinion($opinion)
    {
        $this->opinion = $iopinion;
    }
//titulo
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titilo;
}
//id_us
public function getId_us()
    {
        return $this->id_us;
    }
    public function setId_us($id_us)
    {
        $this->id_us = $id_us;
    }
//id_loc
public function getId_loc()
    {
        return $this->id_loc;
    }
    public function setId_loc($id_loc)
    {
        $this->id_loc = $id_loc;
    }
//calificaciones
public function getCalificaciones()
    {
        return $this->Calificaciones;
    }
    public function setCalificaciones($Calificaciones)
    {
        $this->Calificaciones = $Calificaciones;
    }
//Precio
public function getPrecio()
    {
        return $this->Precio;
    }
    public function setPrecio($Precio)
    {
        $this->Precio = $Precio;
    }
//Nombre usuario
public function getNombreUs()
    {
        return $this->nombreUs;
    }
    public function setNombreUs($nombreUs)
    {
        $this->nombreUs = $nombreUs;
    }
}
?>