

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title> 
</head> --}}
@extends('layouts.main')
@section('title','Home')
@section('content')
    {{--  1. if naem equal to abu , i wanti to display --}}

    {{--  co locate  variable $_name --}}
    @php($_name = $name ?? "team")
    
    @if ($_name == "abu")
        <p>You are banned </p>
    @elseif ($_name == 'roza')
        <p>You are gegirl </p>
    @else
        <h1>Hello , {{ $_name }}<h1>
    @endif

    <button type="button" class="btn btn-primary">Butang</button>

@endsection