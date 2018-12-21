<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;

class AgentController extends Controller
{

    public function getToursAndUsers()
    {
        try {
            $tours = App\Tour::all();
            $users = App\User::all();
            return view('/layouts/watch_users', ['tour' => $tours, 'users' => $users]);
        }

        catch (\Exception $e) {
            echo $e;
        }
    }

    public function getCreateTour()
    {
        return view('/layouts/create_tour');
    }

    public function createTour(Request $request)
    {
        try {
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

        catch (\Exception $e) {
            echo $e;
        }
    }

    public function getEditTour()
    {
        return view('/layouts/edit_tour');
    }

    public function editTour(Request $request)
    {
        try {
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

        catch (\Exception $e) {
            echo $e;
        }
    }
}
