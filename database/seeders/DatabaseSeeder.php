<?php


namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(12)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Blog::create([
            'name'=> 'Beef',
            'unit'=> 'kg',
            'unitPrice' => 380,
            'category'=> 'Fresh Meat',
         

        ]);
        Blog:: create([
            'name'=> 'Chicken',
            'unit'=> 'kg',
            'unitPrice' => 599,
            'category'=>'Fresh Meat'

        ]);
      
        Blog::create([
            'name'=> 'Pork',
            'unit'=> 'kg',
            'unitPrice' => 180,
            'category'=>'Fresh Meat',
        ]);
        Blog::create([
            'name'=> 'Cabagge',
            'unit'=> 'kg',
            'unitPrice' => 100,
            'category'=>'Fresh Vegetable'
        ]);
        Blog::create([
            'name'=> 'Banana',
            'unit'=> 'kg',
            'unitPrice' => 55.99,
            'category'=>'Fresh Fruit'
        ]);
        Blog::create([
            'name'=> 'Chicken Neck',
            'unit'=> 'kg',
            'unitPrice' => 299,
            'category'=>'Fresh Meat'
        ]);
        Blog::create([
            'name'=> 'Mango',
            'unit'=> 'kg',
            'unitPrice' => 150,
            'category'=>'Fresh Fruits'
        ]);
        Blog::create([
            'name'=> 'Fish',
            'unit'=> 'kg',
            'unitPrice' => 120,
            'category'=>'Fresh Meat'
        ]);
        Blog::create([
            'name'=> 'Carrots',
            'unit'=> 'kg',
            'unitPrice' => 89.99,
            'category'=>'Fresh Vegetable'
        ]);
        Blog::create([
            'name'=> 'Onions',
            'unit'=> 'kg',
            'unitPrice' => 100,
            'category'=>'Fresh Vegetable'
        ]);

    }
}
