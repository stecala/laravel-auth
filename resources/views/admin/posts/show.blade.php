@extends('layouts.app')

@section('content')
    <div class="mt-5 card-container">
        <div class="row">
            <div class="col-12">
                <h4 class="author">{{ $post->author }}</h4>
            </div>
            <div class="col-12 post">
                {{ $post->description }}
            </div>
            <div class="col-12 date-cont">
                <span>
                    {{ $post->post_date }}
                </span>
            </div>
        </div>

    </div>
@endsection