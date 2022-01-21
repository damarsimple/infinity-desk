<?php

namespace App\Action\Cart;

use App\Models\Cart;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteCart
{
    use asAction;

    public function handle(Cart $cart)
    {
        return $cart->delete();
    }
}
