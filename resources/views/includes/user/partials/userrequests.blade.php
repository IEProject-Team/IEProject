<div class="media">
  <div class="media-body">
  <br>
    <?php
    $user = App\User::find($user_request->getUserId());
    ?>
    <h5 class="Media-heading">ID : <a href="#">{{$user->id}}</a></h5>
    <h5 class="Media-heading">First Name : <a href="#">{{$user->first_name}}</a></h5>
    <h5 class="Media-heading">Email : <a href="#">{{$user->email}}</a></h5>
    <form class="form-inline" action="#">
      <button class="btn btn-primary btn-block" type="submit">Accept</button>
      <button class="btn btn-primary btn-block" type="submit">Reject</button>
    </form>
    <hr>
   </div>
</div>