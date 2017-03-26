@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>{{$problem->title}}</h2>
        <br>
        <div class="well">
            {{$problem->body}}
        </div>
        <div class="alert alert-info">
            Level : {{$problem->level}}
        </div>
        <div class="alert alert-danger">
            Time Limit: {{$problem->time_limit}}
        </div>

    <div class="">
        <div class="col-md-6">
            <a href="{{url('problem') . '/' . $problem->id . '/edit'}}" class="btn btn-primary btn-lg">Edit</a>
        </div>
        <div class="col-md-6">
            <form  action="{{url('problem') . '/' . $problrm->id}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="" value="Delete" class="btn btn-danger btn-lg" style="float:right">
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
