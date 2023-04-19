@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card col-6 offset-3">
        <h5 class="card-header">{{$contact->name}}</h5>
        <div class="card-body">
            <h5 class="card-title">{{$contact->email}}</h5>
            <p class="card-text">{{$contact->phone}}</p>
        </div>
    </div>
</div>
@endsection