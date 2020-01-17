<script>
      var token = '{{ Session::token()}}';
      var urlFollow = '{{ route('follow')}}';
</script>
<div class="media">
  <div class="media-body">
  <br>
    <h5 class="Media-heading">Id : <a id="userid" href="#">{{$search_result->getID()}}</a></h5>
    <h5 class="Media-heading">First Name : <a href="#">{{$search_result->getFirstName()}}</a></h5>
    <h5 class="Media-heading">Email : <a href="#">{{$search_result->getEmail()}}</a></h5>
    <form class="form-inline" action="" data-followingid="{{ $search_result->getID() }}">
     <button class="btn btn-primary btn-block" id="btnfollow" type="submit" >Follow/Unfollow</button>

    </form>
    <hr>
   </div>
 
</div>

