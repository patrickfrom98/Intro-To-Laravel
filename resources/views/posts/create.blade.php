@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/post" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <h1>Add New Post</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">Caption</label>
                        <input id="caption"
                               name="caption"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror"
                               placeholder="Caption"
                               value="{{ old('caption') }}"
                               required
                               autocomplete="caption"
                               autofocus>

                        @error('caption')
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
                        <label for=image class="col-md-4 col-form-label">Image</label>
                        <input id="image"
                               name="image"
                               type="file"
                               class="form-control @error('image') is-invalid @enderror"
                               placeholder="Select Image"
                               value="{{ old('image') }}"
                               required
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
                        <input type="submit" class="btn btn-primary" value="Post">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
