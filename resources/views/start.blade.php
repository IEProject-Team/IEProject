@extends('.layouts.master')

@section('content')
<div style="margin:15%;">
    <h1 style="text-align:center;"><i> Welcome to <br><b style="color:#a21b24;"> RAM </b><br>social network <br><b style="color:#a21b24;"> ^_^ </b><br></i></h1>
    <br>
    <br>
    <form  action="{{ route('home') }}">
        <button type="submit" class="btn btn-lg btn-block" style="color:white; background-color:#a21b24;"><i>Let's Go!</i></button>
    </form>
</div>
@endsection