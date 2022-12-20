<?php 

    namespace App\Classes;

    class ProductItem{

        public $id;
        public $precioventa;
        public $preciocompra;
        public $nombre;
        public $descripcion;
        public $stock;
        public $cantidad;

        public function __construct($id,$preciocompra,$precioventa,$nombre,$descripcion,$stock,$cantidad){
            $this->id= $id;
            $this->precioventa= $precioventa;
            $this->preciocompra= $preciocompra;
            $this->nombre= $nombre;
            $this->descripcion= $descripcion;
            $this->stock= $stock;
            $this->cantidad= $cantidad;
        }
        

    }