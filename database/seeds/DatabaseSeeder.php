<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('accounts')->insert([
            'first_name'=>str_random(8),
           'last_name'=>str_random(8),
           'email'=>str_random(8).'@gmail.com',
           'types_id'=>App\Types::all()->random()->id
        ]);
    }
}
