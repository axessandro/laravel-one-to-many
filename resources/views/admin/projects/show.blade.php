@extends('layouts.admin')
@section('title', $project->name)
@section('content')
    <div class="container text-light d-flex flex-column mt-4">
        <div>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-danger mb-4"><i
                    class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="card m-auto" style="width: 30rem;">

            @if ($project->img)
                <img src="{{ asset('storage/' . $project->img) }}" alt="" class="card-img-top mx-auto"
                    style="max-width: 50%;">
            @else
                <img src="{{ Vite::asset('resources/img/not-found.png') }}" alt="" class="card-img-top mx-auto"
                    style="max-width: 50%;">
            @endif

            <ul class="list-group list-group-flush">

                {{-- id --}}
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">id:</span>
                    <span>{{ $project->id }}</span>
                </li>
                {{-- id --}}

                {{-- name --}}
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">name:</span>
                    <span>{{ $project->name }}</span>
                </li>
                {{-- name --}}

                {{-- type --}}
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">Type:</span>
                    <span>{{ $project->type_id ? $project->type_id->name : 'Not assigned' }}</span>
                </li>
                {{-- type --}}

                {{-- description --}}
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">description:</span>
                    <span>{{ $project->description }}</span>
                </li>
                {{-- description --}}

                {{-- slug --}}
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">slug:</span>
                    <span>{{ $project->slug }}</span>
                </li>
                {{-- slug --}}

            </ul>
        </div>
    </div>
@endsection
