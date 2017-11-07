<?php

use Illuminate\Database\Seeder;

class ComplimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  echo'test voor';
        factory(App\Compliment::class, 10)->create();
      //  echo "Seed compleed";
    }
}
