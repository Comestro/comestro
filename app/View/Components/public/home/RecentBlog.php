<?php
namespace App\View\Components\public\Home;

use App\Models\Blog;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class RecentBlog extends Component
{
    public $blogs;

    public function __construct()
    {
       
        $this->blogs = Blog::latest()->take(3)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.public.home.recent-blog', [
            'blogs' => $this->blogs
        ]);
    }
}
