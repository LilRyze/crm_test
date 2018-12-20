<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;

class GuestController extends Controller
{
    public function currentUser()
    {
        return Auth::user();
    }
    public function getTours()
    {
        if(Auth::check()) {
        if($this->currentUser()->role === 'guest') {
            $tour = App\Tour::where(['user_id' => $this->currentUser()->id])->get();
            return view('/layouts/tours', ['tour' => $tour]);
        }
           else {
                return redirect('/');
            }
        }
        else {
            return redirect('/');
        }
    }
}
