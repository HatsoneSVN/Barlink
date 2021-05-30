<?php namespace App\Class;

class Local
{
    private $id;
    private $nombre;
    private $direccion;
    private $tlf;
    private $precio;
    private $calificacion;
    private $categorias;
    private $img;
    public function __construct(){}
//id
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
//nombre
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
//direccion
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
//tlf
    public function getTlf()
    {
        return $this->tlf;
    }
    public function setTlf($tlf)
    {
        $this->tlf = $tlf;
    }
//precio

    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
//calificacion

    public function getCalificacion()
    {
        return $this->calificacion;
    }
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;
    }
//imagen
    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }
//categorias
    public function getCategorias()
    {
        return $this->categorias;
    }
    public function setCategorias($categorias)
    {
        $this->categorias = $categorias;
    }
//metodo que recoge las categorias del objeto y devuelve un array con las mismas...

public function Categorias($clases)
{
    $dat_clases=array();

    foreach ($clases as $key => $value) {
        
        if($value == "si")
        {
            array_push($dat_clases , $key);
        }
    }

    return $dat_clases;
}


}

?>