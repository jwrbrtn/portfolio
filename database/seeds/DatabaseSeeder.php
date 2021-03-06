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

        factory(App\Post::class, 100)->create();
        factory(App\Project::class, 100)->create();
        factory(App\Message::class, 100)->create();
    }
}
