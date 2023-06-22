<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DeactivateController extends Controller
{
    public function deactivate(Request $request, $id){
    	$user = User::find($id);
    	if($user->status == 'active'){
    		$user->status = 'non-active';
    		$user->save();
    	}else{
    		$user->status = 'active';
    		$user->save();
    	}
    	return back();
    }
}
