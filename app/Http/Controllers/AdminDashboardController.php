<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class AdminDashboardController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('created_at','DESC')->get();
        $data =['posts'=>$posts];
        return view('admin.dashboard.index',$data);
    }
}
