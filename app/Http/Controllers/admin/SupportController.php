<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use App\Models\Tickets;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public  function  index()
    {
        $supports = Support::all();
        return view('dashboard.support.index',compact('supports'));
    }
    public function store(Request $request)
    {
        $supports = new Support();
        $supports->title = $request->title;
        $supports->category = $request->category;
        $supports->details = $request->details;
        $supports->save();

        return redirect()->back()->with('success','Support Added Successfully...');
    }
}
