@extends('layouts.app')

@section('content')


<div class="container" id="container">
    <form class="form-horizontal" action="../problem" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="form-group">
            <label for="title" class="control-label col-md-2">Title</label>
            <div class="col-md-10">
                <input id="title" class="form-control" type="text" name="title" value="" required>
            </div>
        </div>
        <div class="form-group">
            <label for="body" class="control-label col-md-2">Body</label>
            <div class="col-md-10">
                <textarea name="body" rows="8" id="body" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="timelimit" class="control-label col-md-2">Time Limit</label>
            <div class="col-md-10">
                <input id="timelimit" class="form-control" type="number" min="1" name="timelimit" value="" required>
            </div>
        </div>
        <div class="form-group">
            <label for="level" class="control-label col-md-2">Level</label>
            <div class="col-md-10">
                <select class="form-control" name="level" id="level">
                    <option>Easy</option>
                    <option>Medium</option>
                    <option>Hard</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="input" class="control-label col-md-2">Input File</label>
            <div class="col-md-10">
                <input id="input" class="form-control" type="file"  name="input" value="" required>
            </div>
        </div>
        <div class="form-group">
            <label for="output" class="control-label col-md-2">Output File</label>
            <div class="col-md-10">
                <input id="output" class="form-control" type="file"  name="output" value="" required >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>

        </div>
    </form>
</div>
@endsection
