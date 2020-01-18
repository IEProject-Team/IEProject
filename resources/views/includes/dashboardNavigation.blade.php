<nav class="navbar navbar-white bg-white justify-content-between">

    <form class="form-inline" action="{{ route('logout')}}">
        <button class="btn btn-dark" type="submit">Logout</button>
    </form>

    <form class="form-inline" action="{{ route('profile')}}" method="post">
        <button class="btn btn-success" type="submit">Profile</button>
    </form>
    
    <form class="form-inline" action="{{route('user.friends')}}">
        <button class="btn btn-primary" type="submit">Friends</button>
    </form>

    <form class="form-inline" action="{{route('user.requests')}}">
        <button class="btn btn-primary" type="submit">Requests</button>
    </form>

    <div class="form-group">
        <form class="form-inline" action="{{route('search.results')}}">
            <input class="form-control mr-sm-2" name="search_query" type="text" placeholder="Find People (email/id)">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
</nav>
<hr>