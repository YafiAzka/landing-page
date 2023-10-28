<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Slider
{

    private static $slider = [
        "data" => [
            [
                "title" => "Article 1",
                "slug" => "article1",
                "imgUrl" => "https://images.unsplash.com/photo-1604998103924-89e012e5265a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
                "description" => "lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et"
            ],
            [
                "title" => "Article 2",
                "slug" => "article2",
                "imgUrl" => "https://images.unsplash.com/photo-1604537529428-15bcbeecfe4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80",
                "description" => "ayam aliquet sem vel mag et lorem ipsum dolor sit amet, consectetur adip "
            ],
        ],
    ];

    public static function all()
    {
        return collect(self::$slider);
    }

    public static function find($slug)
    {
        $news = static::all();
        return $news->firstWhere('slug', $slug);
    }
}
