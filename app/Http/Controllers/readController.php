<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class readController extends Controller
{
    public function index(){
        $announcements = Announcement::sort()->paginate(5);
        if(\Request::ajax()){
            return Announcement::get();
        }
        return view('view', compact('announcements'));

    }
    
    public function destroy(Announcement $announcement){
        $announcement->delete();

        return redirect('/view')->with('deleteMessage','An announcement has been deleted');
    }

}
