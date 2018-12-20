@extends('layouts\bootstrap_add')

@foreach($tour as $t)
    <div class="container" style="max-width: 85%">
        <table class="table table-striped">
            <thread>
                <h2 class="col-sm-2 offset-1">Your Tour in {{$t->country}}</h2>
                <tr>
                <th>Country: {{$t->country}}</th>
                <th>Resort: {{$t->resort}}</th>
                <th>Date Start: {{$t->date_start}}</th>
                <th>Date End: {{$t->date_end}}</th>
                <th>Hotel: {{$t->hotel}}</th>
                <th>Food: {{$t->food}}</th>
                <th>Price: {{$t->price}}</th>
                <th>Peoples: {{$t->peoples}}</th>
                <th>Status: {{$t->status}}</th>
                </tr>
            </thread>
        </table>            
    </div>
    @endforeach
<br>
<a class="button" href="/">Go back</a>
