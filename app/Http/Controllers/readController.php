<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class readController extends Controller
{
    public function index(){

        $announcements = Announcement::all();

        return view('read', compact('announcements'));

    }
    
    public function destroy(Announcement $announcement){
        $announcement->delete();

        return redirect('/read');
    }
}
