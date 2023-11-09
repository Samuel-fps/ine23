<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

    class CartTest extends TestCase
{
    
    public function testConstructor(): void
    {
        //Consideramos que esta forma de hacer las pruebas (a lo bestia), es la más sencilla y rápida en vez 
        //de hacerlo con los productos reales, ya que no tenemos que crearlos, solo tenemos que crear un objeto 
        //en el caso de que así deseemos hacerlo, sabemos que se hace con los métodos first(), skip(), take(), etc. 
        //Crear un carro vacío, mirar que el número de productos es cero y que el precio total es cero
        $cart = new \App\Models\Cart();
        $this->assertEquals(0, $cart->iTotalItems, 'El número de productos no es cero (Carro vacío)');
        $this->assertEquals(0, $cart->dTotalPrice, 'El precio total no es cero (Carro vacío)');
        //Crear un carro con un producto, mirar que el número de productos es uno y que el precio total es el precio del producto
        $product = new \App\Models\Product();
        $product->id = 1;
        $product->name = 'Producto 1';
        $product->imgUrl = 'img/producto1.jpg';
        $product->price = 10;
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $this->assertEquals(1, $cart->iTotalItems, 'El número de productos no es uno (Carro con un producto)');
        $this->assertEquals(10, $cart->dTotalPrice, 'El precio total no es el precio del producto (Carro con un producto)');
        //Crear un carro con un producto, añadir otro producto igual, mirar que el número de productos es dos y que el precio total es el doble del precio del producto
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->add($product);
        $this->assertEquals(2, $cart->iTotalItems, 'El número de productos no es dos (Carro con dos productos iguales)');
        $this->assertEquals(20, $cart->dTotalPrice, 'El precio total no es el doble del precio del producto (Carro con dos productos iguales)');
        //Crear un carro con un producto, añadir otro producto igual, eliminar un producto, mirar que el número de productos es uno y que el precio total es el precio del producto
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->add($product);
        $cart->remove($product);
        $this->assertEquals(1, $cart->iTotalItems, 'El número de productos no es uno (Carro con dos productos iguales y eliminar uno)');
        $this->assertEquals(10, $cart->dTotalPrice, 'El precio total no es el precio del producto (Carro con dos productos iguales y eliminar uno)');
        //Crear un carro con un producto, añadir otro producto igual, eliminar todos los productos, mirar que el número de productos es cero y que el precio total es cero
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->add($product);
        $cart->removeAll($product);
        $this->assertEquals(0, $cart->iTotalItems, 'El número de productos no es cero (Carro con dos productos iguales y eliminar todos)');
        $this->assertEquals(0, $cart->dTotalPrice, 'El precio total no es cero (Carro con dos productos iguales y eliminar todos)');
        //Crear un carro con un producto, añadir otro producto diferente, mirar que el número de productos es dos y que el precio total es la suma de los precios de los dos productos
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $product2 = new \App\Models\Product();
        $product2->id = 2;
        $product2->name = 'Producto 2';
        $product2->imgUrl = 'img/producto2.jpg';
        $product2->price = 20;
        $cart->add($product2);
        $this->assertEquals(2, $cart->iTotalItems, 'El número de productos no es dos (Carro con dos productos diferentes)');
        $this->assertEquals(30, $cart->dTotalPrice, 'El precio total no es la suma de los precios de los dos productos (Carro con dos productos diferentes)');
        //Crear un carro con un producto, añadir otro producto diferente, eliminar un producto, mirar que el número de productos es uno y que el precio total es el precio del producto
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->add($product2);
        $cart->remove($product2);
        $this->assertEquals(1, $cart->iTotalItems, 'El número de productos no es uno (Carro con dos productos diferentes y eliminar uno)');
        $this->assertEquals(10, $cart->dTotalPrice, 'El precio total no es el precio del producto (Carro con dos productos diferentes y eliminar uno)');
        //Crear un carro con un producto, añadir otro producto diferente, eliminar todos los productos, mirar que el número de productos es cero y que el precio total es cero
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->add($product2);
        $cart->removeAll($product2);
        $this->assertEquals(1, $cart->iTotalItems, 'El número de productos no es 1 (Carro con dos productos diferentes y eliminar todos)');
        $this->assertEquals(10, $cart->dTotalPrice, 'El precio total no es 10 (Carro con dos productos diferentes y eliminar todos)');
        //Crear un carro con un producto, añadir otro producto igual, añadir otro producto diferente, mirar que el número de productos es tres y que el precio total es la suma de los precios de los dos productos
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->add($product);
        $cart->add($product2);
        $this->assertEquals(3, $cart->iTotalItems, 'El número de productos no es tres (Carro con dos productos iguales y uno diferente)');
        $this->assertEquals(40, $cart->dTotalPrice, 'El precio total no es la suma de los precios de los dos productos (Carro con dos productos iguales y uno diferente)');
        //Crear un carro con un producto, añadir otro producto igual, añadir otro producto diferente, eliminar un producto igual, mirar que el número de productos es dos y que el precio total es la suma de los precios de los dos productos
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->add($product);
        $cart->add($product2);
        $cart->remove($product);
        $this->assertEquals(2, $cart->iTotalItems, 'El número de productos no es dos (Carro con dos productos iguales y uno diferente y eliminar uno)');
        $this->assertEquals(30, $cart->dTotalPrice, 'El precio total no es la suma de los precios de los dos productos (Carro con dos productos iguales y uno diferente y eliminar uno)');
        //Crear un carro con un producto, añadir otro producto igual, añadir otro producto diferente, eliminar todos los productos iguales, mirar que el número de productos es uno y que el precio total es el precio del producto
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->add($product);
        $cart->add($product2);
        $cart->removeAll($product);
        $this->assertEquals(1, $cart->iTotalItems, 'El número de productos no es uno (Carro con dos productos iguales y uno diferente y eliminar todos los iguales)');
        $this->assertEquals(20, $cart->dTotalPrice, 'El precio total no es el precio del producto (Carro con dos productos iguales y uno diferente y eliminar todos los iguales)');
        //Crear un carro con un producto, eliminarlo y ver que sigue en el carro aunque con cantidad cero
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->remove($product);
        $this->assertEquals(0, $cart->iTotalItems, 'El número de productos no es cero (Carro con un producto y eliminarlo)');
        $this->assertEquals(0, $cart->dTotalPrice, 'El precio total no es cero (Carro con un producto y eliminarlo)');
        //Crear un carro con un producto, eliminarlo y ver que sigue en el carro aunque con cantidad cero
        $cart = new \App\Models\Cart();
        $cart->add($product);
        $cart->remove($product);
        $this->assertEquals(0, $cart->iTotalItems, 'El número de productos no es cero (Carro con un producto y eliminarlo)');
        $this->assertEquals(0, $cart->dTotalPrice, 'El precio total no es cero (Carro con un producto y eliminarlo)');
    }
}
