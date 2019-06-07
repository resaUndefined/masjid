<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
    	$userLogin = Auth::user();
    	if (is_null($userLogin->profile)) {
    		$user = $userLogin->email;
    	}else{
    		$user = $userLogin->profile->nama;
    	}
    	
    	return view('member.dashboard', [
    			'user' => $user,
    			'userLogged' => $userLogin
    	]);
    }
}
