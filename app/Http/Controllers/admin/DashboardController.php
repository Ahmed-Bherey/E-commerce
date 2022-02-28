<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index(){
        $users = DB::table('users')->count();
        $products = DB::table('products')->count();
        $category = DB::table('categories')->count();
        return view('admin.dashboard' , compact('users' , 'products' , 'category'));
    }

    // public function countData(){
    //     $users = DB::table('users')->count();
    //     return view('admin.dashboard' , compact('users'));
    // }
}
