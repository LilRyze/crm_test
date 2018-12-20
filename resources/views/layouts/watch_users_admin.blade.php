@extends('layouts\bootstrap_add')
<h2 class="col-sm-2 offset-1">Users</h2>

@foreach($users as $user)
    <div class="container" style="max-width: 85%">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Role</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->role}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endforeach
<br>
<a class="button" href="/">Go back</a>

