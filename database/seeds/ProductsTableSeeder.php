<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          for ($i=1; $i < 10; $i++) {
            Product::create([
                'name' => 'Daily '.$i,
                'slug' => 'Daily-'.$i,
                'details' => 'In Stock',
                'type'=>'Daily',
                'price' => rand(149999, 249999),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);
        }

        for ($i=0; $i < 10; $i++) {
            Product::create([
                'name' => 'Casual '.$i,
                'slug' => 'Casual-'.$i,
                'details' => 'In Stock',
                'type'=>'Casual',
                'price' => rand(149999, 249999),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);
        }

        for ($i=0; $i < 10; $i++) {
            Product::create([
                'name' => 'Party '.$i,
                'slug' => 'Party-'.$i,
                'details' => 'In Stock',
                'type'=>'Party',
                'price' => rand(149999, 249999),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);
        }

    }
}
