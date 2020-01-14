@extends('layouts.master')

@section('content')
<section class="row new-post">
    <div class="col-m-6 col-md-offset-3">
        <header>
            <h3>What do you have to say ?! </h3>
        </header>
        <form action="{{ route('post.create')}}" method="post">
            <div class="form-group">
                <textarea class="form-control" name="body" id="new-post" rows="6"
                    placeholder="Write something to post!"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send post</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
    </div>
</section>
<section class="row posts">
    <div class="col-md-6 col-md-offset-3">
        <header>
            <h3>Yours and others posts</h3>
        </header>
        <article class="post">
            <p>Example of 1th post</p>
            <div class="info">
                Posted by me on 9 jan 2020
            </div>
            <div class="interaction">
                <a href="#">Like</a> |
                <a href="#">Dislike</a> |
                <a href="#">Edit</a> |
                <a href="#">Delete</a>
            </div>
        </article>
        <article class="post">
            <p>Example of 1th post</p>
            <div class="info">
                Posted by me on 9 jan 2020
            </div>
            <div class="interaction">
                <a href="#">Like</a> |
                <a href="#">Dislike</a> |
                <a href="#">Edit</a> |
                <a href="#">Delete</a>
            </div>
        </article>
    </div>
</section>

@endsection