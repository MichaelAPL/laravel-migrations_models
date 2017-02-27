<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Review;
use App\Product;
use App\Salesman;
use App\Direction;

class AppTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $numOfTags = 5;
      factory(\App\Tag::class, $numOfTags)->create(); //generating 5 tags into the DB

      $numOfSalesmen = 2;
      factory(\App\Salesman::class, $numOfSalesmen)->create();//generating 2 salesmen into the DB

      $salesmenIds = App\Salesman::all('id');

      $numberOfProducts = 3;

      for ($i=0; $i < $numOfSalesmen; $i++) {
        $salesmanId = $salesmenIds->get('id', $i+1);

        //creating 1 direction and associating it to a salesman
        factory(\App\Direction::class)->create([
          'salesman_id' => $salesmanId
        ]);

        //creating 3 products and associating each one to a salesman
        factory(\App\Product::class, $numberOfProducts)->create([
          'salesman_id' => $salesmanId
        ])->each(function ($p) {
            //Associating each product to an existing tag (randomly)
            $p->tags()->save(App\Tag::all()->random());
            $p->tags()->save(App\Tag::all()->random());
        });
      }

      $productsIds = App\Product::all('id');

      for ($i=0; $i < $productsIds->count(); $i++) {
        //Associating 10 reviews to each product in the DB
        factory(\App\Review::class, 10)->create([
          'product_id' => $productsIds->get('id', $i+1)
        ]);
      }
    }
}
