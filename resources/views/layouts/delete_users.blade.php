@extends('layouts\bootstrap_add')
<h2 class="col-sm-2 offset-1">Delete User</h2>

<form method="post" action="/delete_users" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="id" class="col-sm-1 offset-1 col-form-label">ID to delete user</label>
        <div class="col-sm-3">
            <input name="id" type="text" class="form-control" id="id" placeholder="id">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-1 offset-1">
            <button type="submit" class="btn btn-primary">Delete User</button>
        </div>
    </div>
</form>
<br>
<a class="button" href="/">Go back</a>
