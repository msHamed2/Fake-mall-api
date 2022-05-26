<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = User::query()->create([
            "name" => "mahmoud hamed",
            "email" => "mahmoudsu22@gmail.com",
            "password" => "123123123",
        ]);
        $user->address()->create([
            "city" => "Dubai",
            "street" => "1th",
            "zipcode" => "123",
            "long" => "123.23",
            "lat" => "123.23"
        ]);

        $user = User::query()->create([
            "name" => "Jhon Doe",
            "email" => "soso@gmail.com",
            "password" => "123123123",
        ]);
        $user->address()->create([
            "city" => "Dubai",
            "street" => "1th",
            "zipcode" => "123",
            "long" => "123.23",
            "lat" => "123.23"
        ]);

        $this->call(ProductsSeeder::class);
        $this->call(CartsSeeder::class);
    }
}
