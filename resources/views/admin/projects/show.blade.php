@extends('layouts.app')

@section('content')


<div class="container overflow-auto p-5 d-flex flex-column align-items-center" style="max-height: calc(100vh - 70.24px);">

  {{-- @dump($project); --}}
  <h1 class="py-4">{{ $project->name }}</h1>
  {{-- <img src="{{ $project->image }}" class="py-2"> --}}
  <h6 class="py-2"><strong class="text-decoration-underline">Id:</strong> {{ $project->id }}</h6>
  <p class="py-2"><strong class="text-decoration-underline">Description:</strong> {!! $project->description !!}</p>
  <h6 class="py-2"><strong class="text-decoration-underline">Category:</strong> {{ $project->category }}</h6>
  {{-- * senza orario formattato --}}
  {{-- <h6 class="py-2"><strong class="text-decoration-underline">Start date:</strong> {{ $project->start_date }}</h6> --}}
  {{-- <h6 class="py-2"><strong class="text-decoration-underline">End date:</strong> {{ $project->end_date }}</h6> --}}
  {{-- * con orario formattato (in ProjectController) --}}
  <h6 class="py-2"><strong class="text-decoration-underline">Start date:</strong> {{ $start_date_formatted }}</h6>
  <h6 class="py-2"><strong class="text-decoration-underline">End date:</strong> {{ $end_date_formatted}}</h6>
  <h6 class="py-2"><strong class="text-decoration-underline">url:</strong> {{ $project->url }}</h6>
  <h6 class="py-2"><strong class="text-decoration-underline">Produced for:</strong> {{ $project->produced_for }}</h6>
  <h6 class="py-2"><strong class="text-decoration-underline">Collaborators:</strong> {{ $project->collaborators }}</h6>

</div>

@endsection
