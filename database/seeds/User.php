<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory('App\User', 50)->create()->each(function($u) {
        $u->posts()->save(factory('App\Post')->make());
    });
    }
}
