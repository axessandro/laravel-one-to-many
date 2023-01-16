@extends('layouts.admin')
@section('title', 'New project')
@section('content')
    <div class="container text-light">
        <h1 class="text-center">Create new</h1>
        <div class="container-md">

            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label for="img">Image:</label>
                    <input type="file" name="img" id="img"
                        class="form-control @error('img') is-invalid @enderror">
                    @error('img')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div>
                        <p class="mt-2 mb-0">Image preview:</p>
                        <div class="img-wrapper d-flex justify-content-center">
                            <img id="img-preview" src="" alt="" style="max-width: 200px;">
                        </div>

                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" name="description" cols="30" rows="3"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-success" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
