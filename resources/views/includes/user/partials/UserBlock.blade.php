<div class="media">
  <div class="media-body">
  <br>
    <h5 class="Media-heading">ID : <a href="#">{{$search_result->getID()}}</a></h5>
    <h5 class="Media-heading">First Name : <a href="#">{{$search_result->getFirstName()}}</a></h5>
    <h5 class="Media-heading">Email : <a href="#">{{$search_result->getEmail()}}</a></h5>
    <form class="form-inline" action="#">
      <a href="{{route('following', $search_result->getID())}}" class="btn btn-success" >Follow</a>
    </form>
    <hr>
   </div>
</div>