@extends('layouts.app')

@section('content')
<header>
    <h1 class="col-md-offset-4" color="blue">Submit your solution here:</h1>

</header>
<br>
<div class="container">

    <form class="form-horizontal" action="../submit" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title" class="control-label col-md-2">Problem Title</label>
            <div class="col-md-10">
                <input type="text" name="title" class="form-control" id="title" value="" required>

            </div>
        </div>
        <div class="form-group">
            <label for="problem_id" class="control-label col-md-2">Problem Id</label>
            <div class="col-md-10">
                <input type="number" name="problem_id" class="form-control" id="problem_id" min="1" value="" required>

            </div>
        </div>
        <div class="form-group">
            <label for="language" class="control-label col-md-2">Language</label>
            <div class="col-md-10">
                <select class="form-control" name="language" id="language">
                    <option>C</option>
                    <option>C++</option>
                    <option>Java</option>
                    <option>Python</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="solution" class="control-label col-md-2">Solution File</label>
            <div class="col-md-10">
                <input id="solution" class="form-control" type="file"  name="solution" value="" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>

        </div>

</div>
@endsection
