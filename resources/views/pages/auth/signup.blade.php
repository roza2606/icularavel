@extends('layouts.main')

@section('title', 'Sign Up')

@section('content')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ui>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ui>

    </div>
    @endif

    <form action="{{ route('auth.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" id="name" name="name">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>

@endsection