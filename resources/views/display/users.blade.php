
@extends('layouts.app')

@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="margin-left:40%; margin-top:1%;">
    @auth
    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
    @endauth
</div>
@endif

@section('content')
<style>
    div.scroll {
    /* margin:4px, 4px; */
    margin-top: 2%;
    margin-left: 15%;
    margin-right: 10%;

    padding:4px;
    /* background-color: green; */
    width: 80%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    text-align:justify;
    }
</style>
<div class="scroll">
    <caption>People Available Here :</caption>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Income</th>
                <th>Manglik</th>
                <th>Occupation</th>
                <th>Family Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $users as $value )
                <tr>
                    <td>{{ $value->fname }}</td>
                    <td>{{ $value->lname }}</td>
                    <td>{{ $value->income }}</td>
                    <td>{{ $value->manglik }}</td>
                    <td>{{ $value->occupation }}</td>
                    <td>{{ $value->family }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>





