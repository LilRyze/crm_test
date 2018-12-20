@extends('layouts\bootstrap_add')
<h2 class="col-sm-2 offset-1">Users and Tours</h2>
@foreach($users as $user)
    @foreach($tour as $t)
        @if($user->id === $t->user_id && $user->role==='guest')
            <div class="container" style="max-width:85%">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Country</th>
                        <th>Resort</th>
                        <th>Date Start</th>
                        <th>Date End</th>
                        <th>Hotel</th>
                        <th>Food</th>
                        <th>Price</th>
                        <th>Peoples</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$t->country}}</td>
                        <td>{{$t->resort}}</td>
                        <td>{{$t->date_start}}</td>
                        <td>{{$t->date_end}}</td>
                        <td>{{$t->hotel}}</td>
                        <td>{{$t->food}}</td>
                        <td>{{$t->price}}</td>
                        <td>{{$t->peoples}}</td>
                        <td>{{$t->status}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            @endif
                @endforeach
            @endforeach
<br>
<a class="button" href="/">Go back</a>

