@extends('admin.base')

@section('title' , 'list projects')

@section('content')

    <div class="text-center m-4">
        <h1>Projects</h1>
        <div class="text-end m-4">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add New Project</a>
        </div>
    </div>




    <div class="d-flex flex-column  flex-wrap ">


        @foreach ($projects as $project)

            <div class="card  mb-4">
                @if($project->cover)

                <img class="card-img-top " src="/storage/{{$project->cover->image_path }}" style="height: 400px; width: 100%; object-fit: cover" alt=""/>
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $project->name }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <p class="card-text"><small class="text-muted">Last updated at {{  $project->updated_at }}</small>
                    </p>
                    <div class="text-end">
                        <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->id) }}">Details</a>

                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection()
