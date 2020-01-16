@extends('layouts.master')

@section('content')
<h4 style="text-align: center; width:100%; background-color:#a21b24; color:white; padding:2%;"> <i><b>Your information <br></b> ID : {{auth()->user()->id}} , First Name : {{auth()->user()->first_name}} , Email : {{auth()->user()->email}} </i></h4>
<hr>
@include('includes.dashboardNavigation')
@include('includes.message-block')
<section class="row new-post">
    <div class="col-md-12 col-md-offset-3">
        <header>
            <h5>What do you have to say ?!</h5>
        </header>
        <form action="{{ route('post.create')}}" method="post">
            <div class="form-group">
                <textarea class="form-control" name="body" id="new-post" rows="6"
                    placeholder="Write something to post!"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send post</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
    </div>
</section>
<section class="row posts">
    <div class="col-md-12 col-md-offset-3">
        <header>
            <h5>Yours and others posts</h5>
        </header>
        @foreach($posts as $post)
        <article class="post">
            <p>{{ $post->body }}</p>
            <div class="info">
                Posted by {{ $post->user->first_name}} ( ID: {{ $post->user->id}} ) on {{ $post->created_at}}
            </div>
            <div class="interaction">
                <a href="#">Like</a> |
                <a href="#">Dislike</a>
                @if(Auth::user() == $post->user)
                |
                <a href="#">Edit</a> |
                <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
                @endif
            </div>
        </article>
        @endforeach
    </div>
</section>

@endsection