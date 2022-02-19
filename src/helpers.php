<?php

use 500LAA\cart\Core\Cart;

if (! function_exists('cart')) {
    /**
     * Returns an instance of the Cart class.
     */
    function cart()
    {
        return app(Cart::class);
    }
}
