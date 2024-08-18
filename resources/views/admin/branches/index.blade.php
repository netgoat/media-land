@extends('admin.base')

@section('title' , 'list branches')

@section('content')

    <div class="text-center m-4" >
        <h1>Branches</h1>
        <div class="text-end m-4">
            <a href="{{ route('admin.branches.create') }}" class="btn btn-primary">Add New Branch</a>
        </div>
    </div>




    <div class="d-flex flex-column  flex-wrap " >


        @foreach ($branches as $branch)

            <div class="card  mb-4">
                <img class="card-img-top " src="/storage/{{$branch->cover->image_path }}" style="height: 400px; width: 100%; object-fit: cover" alt=""/>
                <div class="card-body">
                    <h5 class="card-title">{{ $branch->name }}</h5>
                    <p class="card-text">{{ $branch->description }}</p>
                    <p class="card-text"><small class="text-muted">Last updated at {{  $branch->updated_at }}</small></p>
                    <div class="text-end">
                        <a class="btn btn-primary" href="{{ route('admin.branches.show', $branch->id) }}">Details</a>

                    </div>
                </div>
            </div>


        @endforeach
    </div>
@endsection()





