<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriberTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Subscriber::class, 50)->create();
    }
}
