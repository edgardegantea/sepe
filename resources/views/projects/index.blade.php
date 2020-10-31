@extends('layouts.app')

@section('content')

    @forelse($projects as $project)
        <div>
            <h2>{{ $project->name }}</h2>
            <p>{{ $project->description }}</p>
        </div>
        <br>
    @empty
        <h3>No hay datos</h3>
    @endforelse

@endsection
