@extends('layouts.admin')

@section('content')
<h1>Modifica {{ $project->titolo }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.projects.update', $project) }}" method="POST">
  @csrf
  @method('PUT')
<div class="mb-3">
  <label for="title" class="form-label">Titolo</label>
  <input type="text" class="form-control" id="title" placeholder="titolo" name="title" value="{{ old('title', $project->title) }}">
</div>
<div class="mb-3">
  <label for="image" class="form-label">Image</label>
  <input type="text" class="form-control" id="image" placeholder="image" name="image" value="{{ old('image', $project->image) }}">
</div>
<div class="mb-3">
  <label for="year" class="form-label">year</label>
  <input type="year" class="form-control" id="year" placeholder="year" name="year" value="{{ old('year', $project->year) }}">
</div>
<div class="mb-3">
  <label for="description" class="form-label">description</label>
  <textarea class="form-control" id="description" rows="3" id="description" name="description" placeholder="description">{{ old('description', $project->description) }}</textarea>
</div>
<button class="btn btn-success">Aggiorna il proj</button>
</form>
@endsection
