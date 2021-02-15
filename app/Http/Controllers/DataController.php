<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::find(1);
        if( is_null($data) ){
            $temp = array([
                "start" => "",
                "end" => "",
                "note" => ""
            ]);
            $data = (object) $temp[0];
            // dd(gettype($data));
            // return $data;
        }
        return view('welcome', compact('data'));
    }

    public function store(Request $request)
    {
        // return $request;
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
