@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 mb-4">Welcome to Photo Gallery</h1>
            <p class="lead">Manage your photos easily with our simple gallery application.</p>
            <a href="{{ route('photos.index') }}" class="btn btn-primary btn-lg">View Gallery</a>
        </div>
    </div>
</div>
@endsection
