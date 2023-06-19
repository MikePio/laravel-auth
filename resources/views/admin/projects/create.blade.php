@extends('layouts.app')

@section('content')


<div class="container overflow-auto p-5 d-flex flex-column align-items-center" style="max-height: calc(100vh - 70.24px);">

  <h1>New Project</h1>

  {{-- {{ $errors }} --}}
  {{-- se $errors->any() è true ci sono degli errori nella sessione  --}}
  @if ($errors->any())

  <div class="alert alert-danger" role="alert">
    <ul>
      {{-- $errors->all() inserisce gli errori in un array che viene ciclato solo se $errors->any() è true --}}
      @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

  @endif

  <form action="{{ route('adminprojects.store') }}" method="POST">
    {{-- //* token IMPORTANTE di verifica validità del form (viene utilizzato per dare una maggiore sicurezza ai dati) --}}
    @csrf

    <div class="mb-3" style="width: 73vw; max-width: 73vw;">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name Project" value="{{ old('name')}}">
      </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category" placeholder="Category" value="{{ old('category')}}">
    </div>
    <div class="mb-3">
        <label for="start_date" class="form-label">Start date</label>
        <input type="text" class="form-control" id="start_date" name="start_date" placeholder="2023-12-31" value="{{ old('start_date')}}">
    </div>
    <div class="mb-3">
        <label for="end_date" class="form-label">End date</label>
        <input type="text" class="form-control" id="end_date" name="end_date" placeholder="2023-12-31" value="{{ old('end_date')}}">
    </div>
    <div class="mb-3">
        <label for="url" class="form-label">url</label>
        <input type="text" class="form-control" id="url" name="url" placeholder="url" value="{{ old('url')}}">
    </div>
    <div class="mb-3">
        <label for="produced_for" class="form-label">Produced for</label>
        <input type="text" class="form-control" id="produced_for" name="produced_for" placeholder="personal use, name client" value="{{ old('produced_for')}}">
    </div>
    <div class="mb-3">
        <label for="collaborators" class="form-label">Collaborators</label>
        <input type="text" class="form-control" id="collaborators" name="collaborators" placeholder="Collaborators" value="{{ old('collaborators')}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" style="height: 200px;">{{ old('description')}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>

  </form>

</div>

@endsection
