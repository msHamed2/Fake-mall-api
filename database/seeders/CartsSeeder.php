<?php

namespace Database\Seeders;

use App\Models\Carts;
use Illuminate\Database\Seeder;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart = Carts::query()->create([
            "user_id" => 1,
        ]);
        $cart->cartProducts()->createMany([
            0 => [
                "product_id" => 2,
                "quantity" => 3
            ],
            1 => [
                "product_id" => 4,
                "quantity" => 4
            ],
            2 => [
                "product_id" => 19,
                "quantity" => 3
            ]
        ]);



        $cart = Carts::query()->create( [
            "user_id" => 2,
        ]);
        $cart->cartProducts()->createMany([
            0 => [
                "product_id" => 12,
                "quantity" => 3
            ],
            1 => [
                "product_id" => 11,
                "quantity" => 8
            ],
            2 => [
                "product_id" => 18,
                "quantity" => 3
            ]
        ]);




        $cart = Carts::query()->create( [
            "user_id" => 1,
        ]);
        $cart->cartProducts()->createMany([
            0 => [
                "product_id" => 7,
                "quantity" => 3
            ],
            1 => [
                "product_id" => 6,
                "quantity" => 4
            ],
            2 => [
                "product_id" => 5,
                "quantity" => 3
            ]
        ]);
        $cart = Carts::query()->create( [
            "user_id" => 1,
        ]);
        $cart->cartProducts()->createMany([
            0 => [
                "product_id" => 9,
                "quantity" => 3
            ],
            1 => [
                "product_id" => 10,
                "quantity" => 4
            ],
            2 => [
                "product_id" => 15,
                "quantity" => 2
            ]
        ]);
        $cart = Carts::query()->create( [
            "user_id" => 1,
        ]);
        $cart->cartProducts()->createMany([
            0 => [
                "product_id" => 13,
                "quantity" => 3
            ],
            1 => [
                "product_id" => 14,
                "quantity" => 4
            ],
            2 => [
                "product_id" => 2,
                "quantity" => 3
            ]
        ]);
        $cart = Carts::query()->create( [
            "user_id" => 1,
        ]);
        $cart->cartProducts()->createMany([
            0 => [
                "product_id" => 2,
                "quantity" => 3
            ],
            1 => [
                "product_id" => 14,
                "quantity" => 4
            ],
            2 => [
                "product_id" =>16,
                "quantity" => 3
            ]
        ]);
        $cart = Carts::query()->create( [
            "user_id" => 1,
        ]);
        $cart->cartProducts()->createMany([
            0 => [
                "product_id" => 10,
                "quantity" => 3
            ],
            1 => [
                "product_id" => 17,
                "quantity" => 4
            ],
            2 => [
                "product_id" => 5,
                "quantity" => 3
            ]
        ]);
    }
}
