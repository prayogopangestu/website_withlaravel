<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "HOME"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT",
        "nama" => "Prayogo Pangestu",
        "email" => "PrayogoPangestu@gmail.com",
        "image" => "bisnisman1.png"
    ]);
});


route::get('/tampil', function () {
    return view("tampil", [
        "title" => "ABOUT",
        "nama" => "Prayogo Pangestu",
        "email" => "PrayogoPangestu@gmail.com",
        "image" => "bisnisman1.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => " Post Pertama",
            "slug" => "judul-slug-pertama",
            "autor" => "Estu",
            "body"  => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Quam magni nisi aliquid repellat! Delectus eveniet modi 
        explicabo? Enim excepturi ipsam cumque, architecto aliquam 
        harum sint eligendi veritatis quaerat error ut ratione. Labore d
        ebitis unde voluptatibus vel, amet consectetur distinctio sapiente 
        dolorem natus vero quas. Numquam laboriosam, doloribus iusto 
        obcaecati ad, nemo consectetur earum vitae itaque praesentium 
        laudantium error tempora vero quo nobis quasi hic. Porro 
        accusamus placeat maiores consequatur harum, alias provident? 
        Quasi, nostrum at asperiores necessitatibus quas repellendus 
        libero!"
        ],
        [
            "title" => " Post Kedua",
            "slug" => "judul-slug-kedua",
            "autor" => "Yoga",
            "body"  => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Quam magni nisi aliquid repellat! Delectus eveniet modi 
        explicabo? Enim excepturi ipsam cumque, architecto aliquam 
        harum sint eligendi veritatis quaerat error ut ratione. Labore d
        ebitis unde voluptatibus vel, amet consectetur distinctio sapiente 
        dolorem natus vero quas. Numquam laboriosam, doloribus iusto 
        obcaecati ad, nemo consectetur earum vitae itaque praesentium 
        laudantium error tempora vero quo nobis quasi hic. Porro 
        accusamus placeat maiores consequatur harum, alias provident? 
        Quasi, nostrum at asperiores necessitatibus quas repellendus 
        libero! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum atque numquam quo quos. Assumenda aperiam praesentium at accusamus, minus distinctio voluptatem. Error dolor velit architecto qui! Aliquam quasi consequuntur quibusdam!"
        ]
    ];


    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => " Post Pertama",
            "slug" => "judul-slug-pertama",
            "autor" => "Estu",
            "body"  => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Quam magni nisi aliquid repellat! Delectus eveniet modi 
        explicabo? Enim excepturi ipsam cumque, architecto aliquam 
        harum sint eligendi veritatis quaerat error ut ratione. Labore d
        ebitis unde voluptatibus vel, amet consectetur distinctio sapiente 
        dolorem natus vero quas. Numquam laboriosam, doloribus iusto 
        obcaecati ad, nemo consectetur earum vitae itaque praesentium 
        laudantium error tempora vero quo nobis quasi hic. Porro 
        accusamus placeat maiores consequatur harum, alias provident? 
        Quasi, nostrum at asperiores necessitatibus quas repellendus 
        libero!"
        ],
        [
            "title" => " Post Kedua",
            "slug" => "judul-slug-kedua",
            "autor" => "Yoga",
            "body"  => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Quam magni nisi aliquid repellat! Delectus eveniet modi 
        explicabo? Enim excepturi ipsam cumque, architecto aliquam 
        harum sint eligendi veritatis quaerat error ut ratione. Labore d
        ebitis unde voluptatibus vel, amet consectetur distinctio sapiente 
        dolorem natus vero quas. Numquam laboriosam, doloribus iusto 
        obcaecati ad, nemo consectetur earum vitae itaque praesentium 
        laudantium error tempora vero quo nobis quasi hic. Porro 
        accusamus placeat maiores consequatur harum, alias provident? 
        Quasi, nostrum at asperiores necessitatibus quas repellendus 
        libero! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum atque numquam quo quos. Assumenda aperiam praesentium at accusamus, minus distinctio voluptatem. Error dolor velit architecto qui! Aliquam quasi consequuntur quibusdam!"
        ]
    ];
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return View('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});
