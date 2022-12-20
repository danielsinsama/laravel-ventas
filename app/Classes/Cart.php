<?php

    namespace App\Classes;

    use App\Models\Product;
    use App\Classes\ProductItem;

    class Cart {
        public $items;
        public $total;
        public $msjError;

        public function __construct(){
                $this->items = [];
                $this->total= 0;
                $this->msjError='';
        }


        public function findByIdCart($id){
            $items = $this->items;
            foreach ($items as $item) {
                if($item->id == $id){
                    return $item;
                }
            }
            return NULL;
        }


        public function addToCart($id){  
            $product_buscado = Product::find($id);
            if($product_buscado != NULL){  ###### Para saber si existe en la base de datos
                $productCart = $this->findByIdCart($id); #### buscando en el carrito
                if(!$productCart){ ## si no existe
                    #### se agrega como nuevo producto
                    $this->items[] = new ProductItem($product_buscado->id,$product_buscado->preciocompra,$product_buscado->precioventa,
                    $product_buscado->nombre,$product_buscado->descripcion,$product_buscado->stock,1);
                }
                else{ 
                    #### si el producto existe
                    ### modificamos su cantidad
                    if($productCart->stock >= $productCart->cantidad+1){
                        $productCart->cantidad = $productCart->cantidad+1;
                    }
                }
                $aux_total = 0;
                foreach ($this->items as $item) {
                    $aux_total= $aux_total+ $item->precioventa * $item->cantidad;
                }
                $this->total =  $aux_total;
            }
            else{
                $this->msjError='Producto no encontrado';
            }       
        }

        public function removeToCart($id){

            $index=-1;
            for ($i=0; $i <  count($this->items) ; $i++) { 
                $item = $this->items[$i];
                if($item->id == $id){
                    $index= $i;
                }
            }
            if($index != -1){ ## si se llego a encontrar un item en el carrito
                ###index -----> posicion
                array_splice($this->items, $index, 1);
                ######### se hace la eliminacion , por lo tanto, actualizamos el total
                $aux_total = 0;
                foreach ($this->items as $item) {
                    $aux_total= $aux_total+ $item->precioventa * $item->cantidad;
                }
                $this->total =  $aux_total;
            }
            
        }

    }
