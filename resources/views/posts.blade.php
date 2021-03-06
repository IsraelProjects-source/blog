@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
            
            <div class="card mb-4">
                <div class="card-header">

                </div>
                <div class="card-body">
                   <h5 class="card-title">{{ $post->title }}</h5>
                   <p class="card-text">
                       {{ $post->get_excerpt }}
                       <a href="{{ route('post', $post) }}" class="btn btn-primary">Read more</a>
                   </p>
                   <p class="text-muted mb-0">
                       <em>
                           {{-- &ndash permite crear una linea --}}
                           &ndash; {{ $post->user->name }}
                       </em>
                       {{ $post->created_at->format('d m y') }}
                   </p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
