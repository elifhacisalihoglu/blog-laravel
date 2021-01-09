@extends('layout')

@section('title', 'Home')

@section('content')
    <ul>
        <li><a href="{{ route('home') }}">Home</a>  </li>
        <li><a href="{{ route('about') }}">About</a>  </li>
        <li><a href="{{ route('blog') }}">Blog</a>  </li>
        <li><a href="{{ route('contact') }}">Contact</a>  </li>
    </ul>

    <p>This is my body content.</p>
@endsection