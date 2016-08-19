@extends('layouts.main')
@section('title')
    {{trans('Dashboard')}}
@endsection
@section('content')

    <h1>Dashboard hello {{$user->first_name}}</h1>
@endsection