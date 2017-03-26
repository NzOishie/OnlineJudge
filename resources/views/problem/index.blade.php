@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="list-group">
                @forelse($problems as $problem)
                <div class="list-group-item">
                    <a href="./problem/{{$problem->id}}">{{$problem->title}}</a>
                </div>
                @empty
                <div class="alert alert-info">
                    No Problem Available
                </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
