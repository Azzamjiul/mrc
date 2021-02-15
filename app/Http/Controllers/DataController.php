<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::find(1);
        return view('welcome', compact('data'));
    }

    public function store(Request $request)
    {
        $data = Data::find(1);

        if(is_null($data)){
            Data::create([
                'start' => $request->start,
                'end' => $request->end,
                'note' => $request->note
            ]);
        }else{
            Data::where('id', 1)->update([
                'start' => $request->start,
                'end' => $request->end,
                'note' => $request->note
            ]);
        }

        return redirect()->route('index');
    }
}
