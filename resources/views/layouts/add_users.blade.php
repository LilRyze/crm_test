@extends('layouts/bootstrap_add')
<h2 class="col-sm-2 offset-1">Add User</h2>

<form method="post" action="/add_users" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="name" class="col-sm-1 offset-1 col-form-label">Name</label>
        <div class="col-sm-6">
            <input name="name" type="text" class="form-control" id="name" placeholder="name">
        </div>
    </div>

    <div class="form-group row">
        <label for="role" class="col-sm-1 offset-1 col-form-label">Role</label>
        <div class="col-sm-6">
            <input name="role" type="text" class="form-control" id="role"
                   placeholder="role">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-1 offset-1 col-form-label">Email</label>
        <div class="col-sm-6">
            <input name="email" type="text" class="form-control" id="email"
                   placeholder="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-1 offset-1 col-form-label">Password</label>
        <div class="col-sm-6">
            <input name="password" type="password" class="form-control" id="password"
                   placeholder="password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-1 offset-1">
            <button type="submit" class="btn btn-primary">Add User</button>
        </div>
    </div>
</form>
<br>
<a class="button" href="/">Go back</a>
