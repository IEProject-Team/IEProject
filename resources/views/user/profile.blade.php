@extends('.layouts.master')

@section('title')

" {{auth()->user()->first_name}} "" profile
@endsection

@section('content')
@include('includes.message-block')
@if (session('error'))
<div class="alert alert-danger" id="welcome_alert">
    {{ session('error') }}
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <br>
        <h2 style="text-align:center">User " {{auth()->user()->first_name}} " profile info</h2>

        <form action="{{ route('signup') }}" method="post">
            <div class="form-group">
                <label for="email"> Your email </label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <button type="submit" class="btn btn-success btn-block">Submit new info </button>
            <input type="hidden" name="_token" value="{{Session :: token()}}">
            <br>
        </form>


        <form action="{{ route('signup') }}" method="post">
           
            <div class="form-group">
                <label for="first_name"> Your first name </label>
                <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
                
            <button type="submit" class="btn btn-success btn-block">Submit new info </button>
            <input type="hidden" name="_token" value="{{Session :: token()}}">
            <br>
        </form>

        <form action="{{ route('signup') }}" method="post">
        
            <div class="form-group">
                <label for="password"> Your password </label>
                <input class="form-control" type="password" name="password" id="password">
            </div>

            <button type="submit" class="btn btn-success btn-block">Submit new info </button>
            <input type="hidden" name="_token" value="{{Session :: token()}}">
            <br>
        </form>
    </div>

    <div class="col-md-12">
        <form action="{{ route('getbackdashboard') }}" method="get">
            <div class="form-group">
            </div>

            <button type="submit" class="btn btn-dark btn-block">Back </button>
            <input type="hidden" name="_token" value="{{Session :: token()}}">
        
        </form>
    </div>


</div>

@endsection