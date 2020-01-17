@extends('.layouts.master')

@section('content')
    <h4><i>Your search results for "{{ Request::input('search_query')}}" (Email or ID): </i></h4>
    @if(!$search_results->count())
        <p>No results found, sorry:(</p>
    @elseif($search_results->count()==1 && $search_results[0]->getID() == Auth::user()->id)
        <p>No results found, sorry:(</p>
    @else
    <div class="row">
        <div class="col-md-12">
        <hr>
        @foreach($search_results as $search_result)
            @if($search_result->getID() != Auth::user()->id)
            @include('includes.user/partials/userblock')
            @endif
        @endforeach
        </div>
    </div>
    @endif
@endsection