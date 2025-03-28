@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            Welcome, <strong>{{ Auth::user()->name }}</strong>!
        </div>
    </div>
</div>
@endsection
