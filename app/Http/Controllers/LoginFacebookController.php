<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginFacebookController extends Controller
{
	public function __construct(FacebookHelper $fb){
		$this->fb = $fb;
	}
    public function login(){

    }
    public function callback(){

    }
}
