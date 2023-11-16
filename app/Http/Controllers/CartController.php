<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        // Obtén la instancia del carrito desde la sesión
        $cart = session('cart', new Cart());

        // Pasa la instancia del carrito a la vista cart.show
        return view('cart.show', compact('cart'));
    }

    public function add(Product $product)
    {
        // Lógica para agregar $product al carrito (usando el método correspondiente)
        $cart = $this->getCartInstance();
        $cart->add($product);

        // Actualiza la variable de sesión
        session(['cart' => $cart]);

        // Redirige o devuelve la respuesta que desees
        return redirect()->route('cart.show');
    }

    public function remove(Product $product)
    {
        // Lógica para eliminar $product del carrito (usando el método correspondiente)
        $cart = $this->getCartInstance();
        $cart->remove($product);

        // Actualiza la variable de sesión
        session(['cart' => $cart]);

        // Redirige o devuelve la respuesta que desees
        return redirect()->route('cart.show');
    }

    public function removeAll(Product $product)
    {
        // Lógica para eliminar todas las instancias de $product del carrito (usando el método correspondiente)
        $cart = $this->getCartInstance();
        $cart->removeAll($product);

        // Actualiza la variable de sesión
        session(['cart' => $cart]);

        // Redirige o devuelve la respuesta que desees
        return redirect()->route('cart.show');
    }

    public function operate($sOperation, Product $product, Request $request = null)
    {
        $cart = $this->getCartInstance();

        switch ($sOperation) {
            case 'add':
                $cart->add($product);
                break;

            case 'remove':
                $cart->remove($product);
                break;

            case 'removeAll':
                $cart->removeAll($product);
                break;
            default:
                // Operación no válida
                return redirect()->route('home')->with('error', 'Operación no reconocida en el carrito');
        }

        // Actualiza la variable de sesión
        session(['cart' => $cart]);

        // Redirige o devuelve la respuesta que desees
        return redirect()->route('cart.show');
    }

    // Método auxiliar para obtener la instancia del carrito desde la sesión
    private function getCartInstance()
    {
        // Obtén el carrito de la sesión o crea uno nuevo si no existe
        return session('cart', new Cart());
    }
}

