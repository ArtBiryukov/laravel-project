@extends('layouts.app')
@section('content')
    <div class="offset-4">
    <h2>Добро пожаловать, {{ Auth::user()->name }}</h2>
    <br>
    @if(Auth::user()->avatar)
        <img src="{{ Auth::user()->avatar }}" style="width:200px;">
    @endif
        <br>
    @if(Auth::user()->is_admin)
        <a href="{{ route('admin.index') }}">В админку</a>
    @endif
    </div>
@endsection