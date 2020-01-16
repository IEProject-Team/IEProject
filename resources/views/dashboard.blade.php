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
                Posted by {{ $post->user->first_name}} ( ID : {{ $post->user->id}}) on {{ $post->created_at}}
            </div>
            <div class="interaction">
                <a href="#">Like</a> |
                <a href="#">Dislike</a>
                @if(Auth::user() == $post->user)
                |
                <a href="#" id="edt">Edit</a> |
                <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
                @endif
            </div>
        </article>
        @endforeach
    </div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Post</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection