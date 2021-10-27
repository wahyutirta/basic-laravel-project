<?php

namespace App\Models;


class Post
{
    
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sollicitudin hendrerit diam non fringilla.
    Ut sed dictum eros. Sed fringilla, neque sit amet ornare posuere, ligula dui consectetur massa,
    vel consequat ante diam a leo. Mauris accumsan enim felis,
    et imperdiet leo dignissim vitae. Suspendisse ullamcorper nisi nunc, eget ornare sapien suscipit eleifend.
    Praesent vel pellentesque quam. Vivamus elementum dui eget felis fermentum, eu vestibulum nulla egestas.
    Aenean quis dictum risus. Aliquam erat volutpat. Donec quis accumsan augue. Quisque tristique dapibus nisl,
    eget malesuada nibh molestie ut. Donec nec odio mi. In justo ipsum, tristique nec imperdiet eget, commodo et ex.
    Nullam elit lectus, pellentesque eget felis non, scelerisque rhoncus mauris. Duis consectetur nunc non cursus pretium.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Vestibulum vestibulum elit ex, ut feugiat justo finibus sed.
    Aliquam eget odio suscipit, pretium elit eget, pretium ligula.
    Nunc accumsan ipsum ac commodo mollis. Nulla facilisi.
    Suspendisse congue est et nibh vehicula, quis auctor sem tempor.
    Ut accumsan nulla et consectetur pulvinar. Nam elementum pulvinar mi quis molestie.
    Phasellus dictum nunc ut volutpat consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Quisque ultricies libero quis purus mollis, eget fermentum enim maximus. Fusce eleifend neque et porta tristique.
    Aliquam feugiat neque quis nulla viverra mattis. Suspendisse tincidunt arcu sit amet mi dignissim luctus."
        ]
    ];
    
    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
