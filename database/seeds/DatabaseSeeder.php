<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Wishlist;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory(App\Wishlist::class, 50)->create();

        DB::table('wishlists')->insert([
            'category' => 'Cama, Mesa e Banho',
            'description' => 'Jogo de Cama',
            'price' => '100.00',
        ]);
    }
}