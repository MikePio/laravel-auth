@extends('layouts.app')

@section('content')

<div class="container p-5 d-flex flex-column align-items-center" style="min-height: calc(100vh - 90px - 150px);">

  <h1 class="py-4">Projects</h1>

  <table class="table">
    <thead class="thead-dark">
      <tr class="">
        <th scope="col">#ID</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Produced for</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach ($d_c_comics as $comic) --}}

        <tr>
          {{-- <td>{{ $comic->id }}</td>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->price }}</td>
          <td>{{ $comic->type }}</td> --}}

          <td>
            {{-- <a href="{{ route('d_c_comics.show', $comic) }}" class="btn btn-success">VAI</a> --}}
            {{-- OPPURE --}}
            {{-- <a href="{{ route('d_c_comics.show', $comic->id) }}" class="btn btn-success">VAI</a> --}}
          </td>
        </tr>

      {{-- @endforeach --}}


    </tbody>
  </table>

</div>

@endsection
