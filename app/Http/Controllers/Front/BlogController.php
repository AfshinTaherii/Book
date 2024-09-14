<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function detailBlog($slug)
    {

        $blog = Blog::where('slug', $slug)->first();

        $title = $blog->titleFa;
        $blogImage = $blog->image;

        $data = (object) [
            'blog' => $blog,
            'titleFa' => $title,
            'longDescriptionFa' => $blog->longDescriptionFa,
            'longDescriptionEn' => $blog->longDescriptionEn,
            'image' => $blogImage,

        ];



        return view('Front.pages.blog.detail', compact('data'));
    }
}
