@extends('layouts\bootstrap_add')
<h2 class="col-sm-2 offset-1">Create Tour</h2>

<form method="post" action="/create_tour" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="country" class="col-sm-1 offset-1 col-form-label">Country</label>
        <div class="col-sm-3">
            <input name="country" type="text" class="form-control" id="country" placeholder="Country">
        </div>
    </div>
    <div class="form-group row">
        <label for="resort" class="col-sm-1 offset-1 col-form-label">Resort</label>
        <div class="col-sm-3">
            <input name="resort" type="text" class="form-control" id="resort"
                   placeholder="Resort">
        </div>
    </div>
    <div class="form-group row">
        <label for="hotel" class="col-sm-1 offset-1 col-form-label">Hotel</label>
        <div class="col-sm-3">
            <input name="hotel" type="text" class="form-control" id="hotel"
                   placeholder="Hotel">
        </div>
    </div>
    <div class="form-group row">
        <label for="datestart" class="col-sm-1 offset-1 col-form-label">Date Start</label>
        <div class="col-sm-3">
            <input name="datestart" type="text" class="form-control" id="datestart"
                   placeholder="YYYY-MM-DD HH-mm-ss">
        </div>
    </div>
    <div class="form-group row">
        <label for="dateend" class="col-sm-1 offset-1 col-form-label">Date End</label>
        <div class="col-sm-3">
            <input name="dateend" type="text" class="form-control" id="dateend"
                   placeholder="YYYY-MM-DD HH-mm-ss">
        </div>
    </div>
    <div class="form-group row">
        <label for="food" class="col-sm-1 offset-1 col-form-label">Food</label>
        <div class="col-sm-3">
            <input name="food" type="text" class="form-control" id="food"
                   placeholder="Type of Food">
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-sm-1 offset-1 col-form-label">Price</label>
        <div class="col-sm-3">
            <input name="price" type="text" class="form-control" id="price"
                   placeholder="Price in USD">
        </div>
    </div>
    <div class="form-group row">
        <label for="peoples" class="col-sm-1 offset-1 col-form-label">Peoples</label>
        <div class="col-sm-3">
            <input name="peoples" type="text" class="form-control" id="peoples"
                   placeholder="Peoples">
        </div>
    </div>
    <div class="form-group row">
        <label for="status" class="col-sm-1 offset-1 col-form-label">Status</label>
        <div class="col-sm-3">
            <input name="status" type="text" class="form-control" id="status"
                   placeholder="Status">
        </div>
    </div>
    <div class="form-group row">
        <label for="user_id" class="col-sm-1 offset-1 col-form-label">User ID</label>
        <div class="col-sm-3">
            <input name="user_id" type="text" class="form-control" id="user_id"
                   placeholder="User ID">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-1 col-sm-1">
            <button type="submit" class="btn btn-primary">Submit Tour</button>
        </div>
    </div>
</form>
<br>
<a class="button" href="/">Go back</a>
