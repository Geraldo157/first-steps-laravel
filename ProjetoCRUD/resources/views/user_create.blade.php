@extends('master')

@section('content')

<h2>Create</h2>

@if(session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{route('users.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name: ">
    <input type="text" name="email" placeholder="Email: ">
    <input type="text" name="password" placeholder="Password: ">
    <button type="submit">Create</button>
</form>

@endsection