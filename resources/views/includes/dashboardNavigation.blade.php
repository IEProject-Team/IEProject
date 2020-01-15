
<nav class="navbar navbar-white bg-white justify-content-between">

  <form class="form-inline" action="{{route('search.results')}}">
    <button class="btn btn-primary" type="submit">Friends</button>
  </form>

  <form class="form-inline" action="{{route('search.results')}}">
    <button class="btn btn-primary" type="submit">Requests</button>
  </form>

  <div class="form-group">
  <form class="form-inline" action="{{route('search.results')}}">
    <input class="form-control mr-sm-2" type="text" placeholder="Find People...">
    <button class="btn btn-primary" type="submit">Search</button>
  </form>
  </div>
</nav>
<hr>