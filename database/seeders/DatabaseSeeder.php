<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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
      // User::truncate();
      // Category::truncate();

        $user=User::factory(15)->create();
        Category::factory(4)->create();

        // [
        //   'name'=>'john;'
        // ]);
        // Post::factory(5)->create([
        //   'user_id'=>$user->id
        // ]);


    }
}
