@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container py-5">
        <h2 class="text-danger">Dashboard</h2>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-info">Log Out</button>
    </form>
    </div>
@endsection






