<div class="media">
  <div class="media-body">
  <br>
    <?php
      $user = App\User::find($user_friend->getUserId());
    ?>
    <h5 class="Media-heading">ID : <a href="#">{{$user->id}}</a></h5>
    <h5 class="Media-heading">First Name : <a href="#">{{$user->first_name}}</a></h5>
    <h5 class="Media-heading">Email : <a href="#">{{$user->email}}</a></h5>
    <hr>
   </div>
</div>