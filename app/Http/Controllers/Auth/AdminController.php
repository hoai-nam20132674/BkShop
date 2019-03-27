<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;

class AdminController extends Controller
{
    public function index(){
    	return view('auth.page-content.index');
    }
    public function addUser() {
    	return view('auth.page-content.addUser');
    }
    public function addProduct() {
    	return view('auth.page-content.addProduct');
    }
    public function addCategorie() {
    	return view('auth.page-content.addCategorie');
    }
    public function listProducts() {
    	return view('auth.page-content.listProducts');
    }
    public function listCategories() {
    	return view('auth.page-content.listCategories');
    }
    public function listUsers() {
    	return view('auth.page-content.listUsers');
    }




    public function getListUsersResponse(){
    	$users = User::select()->get();
    	return response()->json($users);
    	// return $users;
    }
}
