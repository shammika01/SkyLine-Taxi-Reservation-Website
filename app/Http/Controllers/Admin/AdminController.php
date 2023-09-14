<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Database\Seeder;
use Database\Seeders\admin;
use Database\Seeders\DatabaseSeeder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{   
    
    public function index(){
        return view('admin.index');
    }

    
}
