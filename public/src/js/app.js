

$('#btnfollow').on('click', function(event){
    event.preventDefault();
    var followingId = event.target.dataset["followingid"];
    var token = event.target.dataset["token"];
    var urlFollow = event.target.dataset["url"];
    console.log(token);
    $.ajax({
        method:'POST',
        url: urlFollow,
        data: {isFriend: false, followingId: followingId, _token: token}
    })
    .done(function(){
        // Change the page
    });

});
