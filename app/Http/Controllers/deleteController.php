<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    //
    public function index(){
        $announcement = Announcement::all();
        return view('delete',compact('announcement'));
    }

    public function destroy($announcement){
        $announcement->delete();

        // return redirect('/read');
    }
}
