<?php
class productos{
    private int $id=100;
    private string $nombre="camisa";
    private int $unidades=5;
    private float $precio=7.99;
    private const iva=0.21;
    



    public function __construct(int $id,string $nombre,int $unidades,float $precio){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
       

    }


     //setters
     public function setId(int $id):void{
        $this->id=$id;

    }
    public function setNombre(string $nombre):void{
        $this->nombre=$nombre;

    }
    public function setUnidades(int $unidades):void{
        $this->unidades=$unidades;

    }
    public function setPrecio(float $precio):void{
        $this->precio=$precio;

    }
   

    //getters

    public function getId():string{
        return $this->id;

    }
    public function getNombre():string{
        return $this->nombre;

    }
    public function getUnidades():int{
        return $this->unidades;

    }
    public function getPrecio():float{
        return $this->precio;

    }
   
    public function calcularTotal():float{
        $total=$this->unidades*$this->precio*(1+$this->iva);
        return $total;
    }

}