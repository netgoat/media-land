@extends('base')
@section('content')

    <section class="cover">
        <div class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('/storage/{{$branch->cover->image_path }}')">
                    <h2 class="section-heading">{{ $branch->name }}</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="post">
        <div class="post-title">

         </div>

        <div class="post-content">

            <p>{{ $branch->description }}</p>
        </div>

    </section>


@endsection()

