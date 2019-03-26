<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
    	return view('auth.page-content.index');
    }
    public function addProduct() {
    	return view('auth.page-content.addProduct');
    }
}
