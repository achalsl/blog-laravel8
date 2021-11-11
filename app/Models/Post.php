<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    public $title;

    public $excerpt;

    public $body;

    public $date;

    public function __construct($title, $excerpt,  $date, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }
    
    public static function findAll() {
        $files = File::files(resource_path(("posts/")));
        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug) {
        
        if(!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        $post = cache()->remember("posts.{$slug}", now()->addMinutes(120), fn() => file_get_contents($path));
        return $post;

    }
}
