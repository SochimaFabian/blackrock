<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Transcation;
use App\Models\User;
use App\Models\UserBalance;
use App\Models\AccountNumber;

class UsersController extends Controller
{
	public function dashboard($id){
		if(auth()->user()->id  == $id){
			$user = User::find($id);
			$transcations = $user->transcation;
			return view('users.dashboard', [
				'balance' => $user->userbalance->balance,
				'users' => User::all(),
				'account' => AccountNumber::first(),
				'datas' => Transcation::all(),
				'transcations' => $transcations
			]);
		}else{
			return redirect('/user/' . $authId . '/dashboard');
		}
	}
	public function plan(){
		return view('users.plan');
	}
	public function ConfirmDeposits(){
		return view('users.confirm-deposits', [
			'account' => AccountNumber::first()
		]);
	}

	public function withdraw(){
		return view('users.withdraw');
	}

	public function account(Request $request){
		$record = AccountNumber::count();
		if($record > 0){
			$data = AccountNumber::first();
			$data->update(['account' => $request->account]);
			return redirect()->back();	
		}else{
			$data = new AccountNumber();
			$data->account = $request->account;
			$data->save();
			return redirect()->back();	
		}
	}

}
