<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBalance;

class WithdrawController extends Controller
{
    public function withdraw(Request $request){
    	$balance = auth()->user()->userbalance->balance;
    	$data = UserBalance::where('balance', $balance)->first();
        if($balance >= $request->amount){
            $data->balance = $balance - $request->amount;
            $data->save();
            return back()->with('message', 'Withdrawl Processing');
        }
        else{
            return back()->with('error', 'Insufficient funds');
        }
    }
}
