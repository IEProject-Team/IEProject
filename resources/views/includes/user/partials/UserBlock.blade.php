<div class="media">
  <div class="media-body">
  <br>
    <h5 class="Media-heading">Id : <a href="#">{{$search_result->getID()}}</a></h5>
    <h5 class="Media-heading">First Name : <a href="#">{{$search_result->getFirstName()}}</a></h5>
    <h5 class="Media-heading">Email : <a href="#">{{$search_result->getEmail()}}</a></h5>
    <form class="form-inline" action="">
      <button class="btn btn-primary btn-block" id="btnfollow" type="submit" >Follow</button>
    </form>
    <hr>
   </div>
</div>