<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function report()
    {
        return view('reports');
    }

    public function sendReport(Request $request) {


        DB::table('reports')->insert([
            'order_id' => $request->order_id,
            'details' => $request->details,
            'user_id' => auth()->id(),
        ]);



        return redirect()->route('ads.index')->withMessage('Report submitted for Admin review!');

    }
}
