@extends('layouts.main')

@section('title', 'Feed List')

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

    <!-- The form to update the feed -->
    <form action="{{ route('feed.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Feed Title</label>
            <input 
                type="text" 
                class="form-control" 
                name="title"
                id="title"
                {{-- required
                minlength="3"
                maxlength="100" --}}
                >
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" 
                name="description" 
                id="description"
                cols="30"
                rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Feed</button>
    </form>
</div>

@endsection