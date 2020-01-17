<div class="media">
  <div class="media-body">
  <br>
    <h5 class="Media-heading">ID : <a href="#">{{$search_result->getID()}}</a></h5>
    <h5 class="Media-heading">First Name : <a href="#">{{$search_result->getFirstName()}}</a></h5>
    <h5 class="Media-heading">Email : <a href="#">{{$search_result->getEmail()}}</a></h5>
    <form class="form-inline" action="{{route('following')}}" method="post">
            <button type="submit" class="btn btn-primary btn-block">
            <?php
              $check = App\Follower::where('following_id','LIKE',$search_result->getID())->
              where('user_id','LIKE',Illuminate\Support\Facades\Auth::user()->id)->first();
              if(is_null($check)){
                ?>
                Follow
                <?php }
                else {?>
                Following
                
              <?php }?>
            
            </button>
            <input type="hidden" value="{{$search_result->getID()}}" name="id">
            <input type="hidden" value="{{ Session::token() }}" name="_token">
      <!--<a href="{{route('following', $search_result->getID())}}" class="btn btn-success" >Follow</a>
-->
    </form>
    <hr>
   </div>
</div>