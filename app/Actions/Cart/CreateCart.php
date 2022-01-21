<?php

namespace App\Action\Cart;

use App\Models\Cart;
use App\Models\Product;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateCart
{
    use asAction;

    public function handle(Product $product, int $quantity, string $customization): Cart
    {
        $cart = new Cart();

        $cart->product_id  = $product->id;
        $cart->price  = $product->price;
        $cart->price_type  = $product->price_type;
        $cart->quantity    = $quantity;
        $cart->customization = $customization;
        auth()->user()->carts()->save($cart);
        return $cart;
    }
}
