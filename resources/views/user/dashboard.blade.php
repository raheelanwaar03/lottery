@extends('layouts.app')

@section('content')
    <h1>Hi {{ auth()->user()->name }}! Welcome to User Dashboard</h1>
@endsection
