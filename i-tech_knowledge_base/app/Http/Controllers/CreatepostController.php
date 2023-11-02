<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class CreatepostController extends Controller
{
    public function create()
    {
        $user=Auth::user();
        return view('admin.createpost', ['user'=>$user]);
    }

    public function publish(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'cover-image'=>'required',
            'category' =>'required',
            'content'=>'required',
            'content-sol'=>'required',
            'media'=>'required'
        ]);

        $query = DB::$table('posts')->insert([
            'title'=>$request->input('title'),
            'cover-image'=>$request->input('cover-image'),
            'category'=>$request->input('category'),
            'content'=>$request->input('content'),
            'content-sol'=>$request->input('content-sol'),
            // 'media'=>$request->input('media')
        ]);

        if($query)
        {
            return back()->with('success', 'Published successfully');
        }
        else{
            return back()->with('fail','Publish was unsuccessful');
        }
    }
}
