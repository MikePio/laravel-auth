@extends('layouts.app')

@section('content')

<div class="container p-5 d-flex flex-column align-items-center" style="min-height: calc(100vh - 90px - 150px);">

  <h1 class="py-4">Projects</h1>

  <table class="table table-hover">
    <thead class="thead-dark">
      <tr class="">
        <th scope="col">#ID</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Start date</th>
        <th scope="col">Produced for</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)

        <tr>
          <td>{{ $project->id }}</td>
          <td>{{ $project->name }}</td>
          <td>{{ $project->category }}</td>
          @php
            $date = date_create($project->start_date);
            @endphp
          <td>{{ date_format($date, 'd/m/Y') }}</td>
          <td>{{ $project->produced_for }}</td>

          <td>
            {{-- <a href="{{ route('projects.show', $project) }}" class="btn btn-success">VAI</a> --}}
            {{-- OPPURE --}}
            {{-- <a href="{{ route('projects.show', $project->id) }}" class="btn btn-success">VAI</a> --}}
            <a href="#" class="btn btn-success">VAI</a>
          </td>
        </tr>

      @endforeach


    </tbody>
  </table>

</div>

@endsection
