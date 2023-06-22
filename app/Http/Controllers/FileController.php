<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transcation;

class FileController extends Controller
{
    public function upload(Request $request){
        $data = $request->validate([
            'file' => 'required|file|max:10240|mimes:jpeg,jpeg,png,pdf', // Maximum file size of 10MB (10240KB)
        	'amount' => 'required|max:100',
        ]);
        $file = $request->file('file');
        $newName = time() . '_' . auth()->user()->username . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $newName);

        $model = new Transcation();
        $model->filename = $newName;
        $model->status = 'Unaccepted';
        $model->details = 'Account Funding';
        $model->balance = 10;
        $model->amount = $request->amount;
        $model->method = $request->method;
        $model->user_id = auth()->user()->id;
        $model->save();
        return redirect()->back()->with('success', 'File uploaded successfully! In less than 24hours your payment will be accepted');
    }
}
