
@foreach ($projects as $project)

    <div class="gallery-block">
        <div class="gallery-block-content">
            <div class="gallery-block-image">
                <a href="{{ route('projects.show', $project->id) }}">
                    <img src="/storage/{{$project->cover->image_path }}"
                         alt=""/>
                </a>

            </div>
            <div class="gallery-block-title">{{ $project->name }}</div>
            <div class="gallery-block-heading">{{ $project->branch->name }}</div>
            <div class="gallery-block-more">
                <a class="view-more" href="{{ route('projects.show', $project->id) }}">View
                    Project
                    <i
                        class="fa-solid fa-arrow-right fa-fw"></i></a>

            </div>
        </div>
    </div>

@endforeach
