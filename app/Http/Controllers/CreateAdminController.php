<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserBalance;

class CreateAdminController extends Controller
{
    public function createadmin(){
    	$user = new User();
    	$user->firstname = 'ceeza';
    	$user->lastname = 'admin';
    	$user->country = 'nigeria';
    	$user->mobile = '0900000089';
    	$user->username = 'ceeza_admin';
    	$user->email = 'ceeza@gmail.com';
    	$user->password = bcrypt('ceeza_admin');
    	$user->typeofuser = 'admin';
    	$user->save();
        $bal = new UserBalance();
        $bal->balance = 10;
        $bal->user_id = $user->id;
        $bal->save();
    	return 'User created';
    }
}
