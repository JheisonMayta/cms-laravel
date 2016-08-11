<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      CMSlaravel\User::truncate();
      CMSlaravel\Post::truncate();
      factory(CMSlaravel\User::class, 10)->create()->each(function ($user) {
        $post = factory(CMSlaravel\Post::class)->make();
        $user->posts()->save($post);
      });
    }
}
