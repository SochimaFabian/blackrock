<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserBalance;
use App\Models\Transcation;

class PaymentController extends Controller
{
    public function completepay(Request $request, $amount, $user_id, $transcation_id){
    	$transcation = Transcation::find($transcation_id);
    	$user = User::find($user_id);
    	$balance = $user->userbalance;
    	$balance->balance = $balance->balance + $request->amount;
    	$transcation->status = 'Completed';
    	$transcation->save();
    	$balance->save();
    	return back(); 
	}

}
