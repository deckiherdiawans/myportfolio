@extends('/instadeck/app')

@section('title', 'InstaDeck || Explore')

@section('content')
    <div class="container">
        <div class="input-group" id="dhs_search-bar-responsive">
            <input type="text" class="form-control rounded-left">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-fw fa-search"></i></span>
            </div>
        </div>
        <div class="row pt-4">
            @if(!empty($posts))
                @foreach($posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/instadeck/post/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-100">
                        </a>
                    </div>
                @endforeach
            @else
                @for($a = 0; $a < count($unsplashApi); $a++)
                    {{ dd($unsplashApi) }}
                    @foreach($unsplashApi as $unsplash)
                        <div class="col-4 pb-4">
                            <a href="{{ $unsplash[$a]['urls']['raw'] . '&w=800&h=800' }}">
                                <img src="{{ $unsplash[$a]['urls']['raw'] . '&w=800&h=800' }}" class="w-100">
                            </a>
                        </div>
                    @endforeach
                @endfor
            @endif
        </div>
    </div>
@endsection