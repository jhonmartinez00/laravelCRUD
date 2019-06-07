<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Http\Request;

class updateController extends Controller
{
    public function index(){
        $announcement = Announcement::all();
        return view('update',compact('announcement'));
    }
    public function show($announcement){
        $announcement = Announcement::find($announcement);
        return view('update', compact('announcement'));

    }
    public function update(Announcement $announcement){
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
        ]);
        $announcement->update($data);
        return redirect('/view')->with('updateMessage','An announcement has been updated');
    }
}
