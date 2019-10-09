<?php

use App\Author;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = factory(Author::class, 10)->create();

        DB::table('authors')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'github' => Str::random(10),
            'twitter' => Str::random(10),
            'location' => Str::random(10),
            'password' => bcrypt('password'),
        ]);
    }
}
