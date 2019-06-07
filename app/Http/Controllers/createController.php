<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
class createController extends Controller
{
    public function index(){
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
        ]);
        Announcement::create($data);
        return redirect('/view')->with('message','An announcement has been added');
    }
}
