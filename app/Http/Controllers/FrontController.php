<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    //
    public function home()
    {
        $brands = DB::table('brands')->get();
        $homeabouts = DB::table('home_abouts')->first();
        $portfolios = DB::table('multipics')->get();
        return view('welcome',compact('brands','homeabouts','portfolios'));
    }
    public function aboutus()
    {
        $home_abouts = DB::table('home_abouts')->first();
        return view('pages.aboutus',compact('home_abouts'));
    }
    public function homeTeam()
    {
        $teams = DB::table('teams')->get();
        return view('pages.team',compact('teams'));
    }
    public function homeTesti()
    {
        $testis = DB::table('testis')->get();
        return view('pages.testi',compact('testis'));
    }
    public function homeServices()
    {
        $services = DB::table('home_services')->get();
        $features = DB::table('features')->get();
        return view('pages.services',compact('services','features'));
    }
    public function blogs()
    {
        $blogs = DB::table('blogs')->paginate(3);
        return view('pages.blogs',compact('blogs'));
    }
    public function blogsSelected($id)
    {
        $blogs = Blog::find($id);
          
        return view('pages.blogsselected',compact('blogs'));
    }
}
