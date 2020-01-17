<div class="media">
  <div class="media-body">
  <br>
    <?php
    $user = App\User::find($user_request->getUserId());
    ?>
    <h5 class="Media-heading">ID : <a href="#">{{$user->id}}</a></h5>
    <h5 class="Media-heading">First Name : <a href="#">{{$user->first_name}}</a></h5>
    <h5 class="Media-heading">Email : <a href="#">{{$user->email}}</a></h5>
    <form class="form-inline" action="{{route('acceptFriend')}}" method="post">
      <button class="btn btn-success btn-block" type="submit">Accept</button>
      <input type="hidden" value="{{$search_result->getID()}}" name="id">
      <input type="hidden" value="{{ Session::token() }}" name="_token">
    </form>
    <form class="form-inline" action="{{route('rejectFriend')}}" method="post">
      <button class="btn btn-danger btn-block" type="submit">Reject</button>
      <input type="hidden" value="{{$search_result->getID()}}" name="id">
      <input type="hidden" value="{{ Session::token() }}" name="_token">
    </form>
    <hr>
   </div>
</div>