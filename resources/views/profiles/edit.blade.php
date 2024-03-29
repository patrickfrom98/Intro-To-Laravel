@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <h1>Edit Profile</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                    <input id="title"
                           name="title"
                           type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           placeholder="Post Title"
                           value="{{ old('title') ?? $user->profile->title }}"
                           required
                           autocomplete="title"
                           autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for=description class="col-md-4 col-form-label">Description</label>
                    <input id="description"
                           name="description"
                           type="text"
                           class="form-control @error('description') is-invalid @enderror"
                           placeholder="Description"
                           value="{{ old('description') ?? $user->profile->description }}"
                           required
                           autofocus>
                    @error('description')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for=url class="col-md-4 col-form-label">URL</label>
                    <input id="url"
                           name="url"
                           type="text"
                           class="form-control @error('url') is-invalid @enderror"
                           placeholder="URL"
                           value="{{ old('url') ?? $user->profile->url }}"
                           autofocus>
                    @error('url')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for=image class="col-md-4 col-form-label">Profile Image</label>
                    <input id="image"
                           name="image"
                           type="file"
                           class="form-control @error('image') is-invalid @enderror"
                           placeholder="Select Image"
                           value="{{ old('image') }}"
                           autofocus>
                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
