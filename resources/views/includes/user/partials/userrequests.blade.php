<div class="media">
  <div class="media-body">
  <br>
    <h5 class="Media-heading">ID : <a href="#">{{$user_request->getID()}}</a></h5>
    <h5 class="Media-heading">First Name : <a href="#">{{$user_request->getFirstName()}}</a></h5>
    <h5 class="Media-heading">Email : <a href="#">{{$user_request->getEmail()}}</a></h5>
    <form class="form-inline" action="#">
      <button class="btn btn-primary btn-block" type="submit">Accept</button>
      <button class="btn btn-primary btn-block" type="submit">Reject</button>
    </form>
    <hr>
   </div>
</div>