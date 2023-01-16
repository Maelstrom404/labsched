@extends('layouts.main')

@section('title', 'Log In')

@section('content')
    <form action="/login" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Login">
        @error('email') 
            <p class="error">{{ $message }}</p> 
        @enderror
    </form>
@endsection