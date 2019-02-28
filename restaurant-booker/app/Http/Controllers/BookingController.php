<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    function booking()
    {
        return view('/booking');
    }

    function submit(Request $request)
    {
        $lastName = $request->input('lastname');
        $firstName = $request->input('firstname');
        $numberOfPersons = $request->input('numberOfPersons');
        $date = $request->input('date');
        $time = $request->input('time');
        $remarks = $request->input('message');

        return view('/booking', ["lastName" => $lastName, "firstName" => $firstName,
            "numberOfPersons" => $numberOfPersons, "date" => $date, "time" => $time,
            "remarks" => $remarks]);
    }
}
