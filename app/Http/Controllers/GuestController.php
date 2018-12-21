<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;

class GuestController extends Controller
{

    public function getTours()
    {
        try {
            $tour = App\Tour::where(['user_id' => Auth::user()->id])->get();
            return view('/layouts/tours', ['tour' => $tour]);
        }

        catch (\Exception $e) {
            echo 'You can\'t watch your tours now, sorry!';
        }
    }
}
