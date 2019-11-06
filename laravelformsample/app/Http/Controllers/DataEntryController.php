<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataEntryController extends Controller
{
    public function index() {
        return view("dataentry");
    }

    public function submit(Request $request) {
        $age = date('Y') - $request->input('year_of_birth');
        return view('result', [ 'fullname' => $request->input('first_name') . ' ' .
                                              $request->input('last_name'),
                                'age' => $age ] );
    }
}
