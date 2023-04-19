@extends('layouts.app')

@section('content')
<div class="container">
    @include('messages')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <th scope="row">{{$contact->id}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>
                    <form action="/contacts/{{$contact->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="/contacts/{{$contact->id}}" class="btn btn-success">View</a>
                        <a href="/contacts/{{$contact->id}}/edit" class="btn btn-success">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection