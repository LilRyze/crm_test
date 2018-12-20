<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;

class AgentController extends Controller
{
    public function currentUser()
    {
        return Auth::user();
    }

    public function getToursAndUsers()
    {
        if(Auth::check()) {
            if($this->currentUser()->role === 'agent') {
                $tours = App\Tour::all();
                $users = App\User::all();
                return view('/layouts/watch_users', ['tour' => $tours, 'users' => $users]);
            }
            else {
                return redirect('/');
            }
        }
        else {
            return redirect('/');
        }
    }

    public function getCreateTour()
    {
        return view('/layouts/create_tour');
    }

    public function createTour(Request $request)
    {
        App\Tour::create([
            'country' => $request->country,
            'resort' => $request->resort,
            'hotel' => $request->hotel,
            'date_start' => $request->datestart,
            'date_end' => $request->dateend,
            'food' => $request->food,
            'price' => $request->price,
            'peoples' => $request->peoples,
            'status' => $request->status,
            'user_id' => $request->user_id
 ]);
        return 'Created';
    }

    public function getEditTour()
    {
        return view('/layouts/edit_tour');
    }

    public function editTour(Request $request)
    {
        App\Tour::where('user_id', $request->user_id)->
        where('country', $request->country_to_change)->
        update([
            'country' => $request->country,
            'resort' => $request->resort,
            'hotel' => $request->hotel,
            'date_start' => $request->datestart,
            'date_end' => $request->dateend,
            'food' => $request->food,
            'price' => $request->price,
            'peoples' => $request->peoples,
            'status' => $request->status,
            'user_id' => $request->user_id
        ]);
        return 'Created';
    }
}
