@extends('layouts.app')
@section('title')
<title>{{ config('app.name', 'Laravel') }}</title>
@endsection
@section('content')
@include('parts.home')
@endsection
