<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index($title)
    {
        $find= DB::table('posts')->where('slug','=',$title)->first();
        $users= DB::table('users')->where('id','=',$find->author_id)->first();
        $randomPost = DB::table('posts')->where('slug','!=', $find->slug)->inRandomOrder()->get();
        return view('posts.detail',['posts'=>$find, 'users'=> $users, 'randomPost' => $randomPost]);            
    }

}