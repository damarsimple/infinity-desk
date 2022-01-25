<?php

namespace App\Action\Cart;

use App\Models\Cart;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateCart
{
    use asAction;

    public function handle(Cart $cart, $attr)
    {
        return $cart->update($attr);
    }
}
