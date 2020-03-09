<?php

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
        // $this->call(UsersTableSeeder::class);
         factory(App\Appointment::class,30)->create()->each(function($a){
            dd($a);
            $a->save()->make();
        });
    }
}
