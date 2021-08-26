<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\ProductOption;

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

        // Products

        // Pizza
        $product = new Product();
        $product->name = 'Pizza';
        $product->saveOrFail();

        // Rolls
        $product = new Product();
        $product->name = 'Rolls';
        $product->saveOrFail();

        // Product options
        // pizza with cheese
        $prodOption = new ProductOption();
        $prodOption->fill([
            'option_name' => "with cheese", 'product_id' => 1, 'price' => "5.25"
        ])->saveOrFail();

        // pizza with sausage
        $prodOption = new ProductOption();
        $prodOption->fill([
            'option_name' => "with sausage", 'product_id' => 1, 'price' => "6.75"
        ])->saveOrFail();

        // pizza with mushrooms
        $prodOption = new ProductOption();
        $prodOption->fill([
            'option_name' => "with mushrooms", 'product_id' => 1, 'price' => "6.00"
        ])->saveOrFail();

        // rolls simple
        $prodOption = new ProductOption();
        $prodOption->fill([
            'option_name' => "simple", 'product_id' => 2, 'price' => "3.12"
        ])->saveOrFail();

        // Cheques
        \App\Models\Cheque::factory(25)->create();

        // Cheque order items
        \App\Models\ChequeOrderItem::factory(50)->create();
    }
}
