@extends('base')
@section('content')

    <section class="cover">
        <div class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('/storage/{{$project->cover->image_path }}')">
                    <h2 class="section-heading">{{ $project->name }}</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="post">
        <div class="post-title">

        </div>

        <div class="post-content">

            <p>{{ $project->description }}</p>


                 <h1 >Facts</h1>

             <div class="facts">

                @foreach ($project->facts as $fact)
                    <div class="fact">
                        <div class="fact-key"> {{ ucfirst($fact->key) }}</div>
                        <div class="fact-value">{{ $fact->value }}</div>
                     </div>

                @endforeach





                    @foreach ($project->images as $image)

                        <img src="/storage/{{$image->image_path }}" alt="" srcset="">
                    @endforeach

            </div>

        </div>

    </section>

@endsection()





