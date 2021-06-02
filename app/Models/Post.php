<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Cache;

//ONLY gets the info of the posts
class Post{
    private $title;
    private $body;
    private $date;
    private $slug;

    public function __construct($title, $body, $date, $slug){
        $this->title = $title;
        $this->body = $body;
        $this->date = $date;
        $this->slug = $slug;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getBody(){
        return $this->body;
    }

    public function getDate(){
        return $this->date;
    }

    public function getSlug(){
        return $this->slug;
    }

    static public function getPostData($slug){
        $postData = Cache::remember(
            "{$slug}",
            30,
            fn() => file_exists(resource_path("views/posts/{$slug}.php")) ? YamlFrontMatter::parse(file_get_contents(resource_path("views/posts/{$slug}.php"))) : abort(404)
        );
        $post = new Post(
            $postData->title,
            $postData->body(),
            $postData->date,
            $postData->slug
        );

        return $post;
    }

    static public function getAllPosts(){
        return collect(File::files(resource_path('/views/posts')))
        ->map(fn($file) => YamlFrontMatter::parseFile($file))
        ->map(fn($doc) => new Post(
            $doc->title,
            $doc->body(),
            $doc->date,
            $doc->slug
        ))->sortByDesc(function($post){
            return strtotime($post->date);
        });
    }
}