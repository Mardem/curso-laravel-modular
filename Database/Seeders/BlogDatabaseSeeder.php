<?php

namespace Basic\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Basic\Blog\Entities\Post;
use Illuminate\Database\Eloquent\Model;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $post = new Post;
        $post->title = 'Home';
        $post->body = 'Homepage on your site';
        $post->save();

        $post = new Post;
        $post->title = 'About us';
        $post->body = 'About on your site';
        $post->save();
    }
}
