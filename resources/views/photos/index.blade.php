@extends('layouts.app')

@section('title', __('photos.title'))

@section('content')
<div class="container">
    <!-- Language Switcher -->
    <div class="text-end mb-3">
        <a href="?lang=en" class="btn btn-sm btn-outline-primary {{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
        <a href="?lang=id" class="btn btn-sm btn-outline-primary {{ app()->getLocale() == 'id' ? 'active' : '' }}">ID</a>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>{{ __('photos.title') }}</h2>
        <a href="{{ route('photos.create') }}" class="btn btn-primary">
            {{ __('photos.add_new') }}
        </a>
    </div>

    <div class="row">
        @forelse($photos as $photo)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('gambar/'.$photo->image_path) }}"
                     class="card-img-top"
                     alt="{{ $photo->title }}"
                     style="width: 100%; height: auto; cursor: pointer;"
                     data-bs-toggle="modal"
                     data-bs-target="#photoModal{{ $photo->id }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $photo->title }}</h5>
                </div>
            </div>

            <div class="modal fade" id="photoModal{{ $photo->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $photo->title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('storage/'.$photo->image_path) }}"
                                 class="img-fluid"
                                 alt="{{ $photo->title }}"
                                 style="max-height: 80vh;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info">{{ __('photos.no_photos') }}</div>
        </div>
        @endforelse
    </div>
</div>
@endsection
