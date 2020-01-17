

$('#btnfollow').on("click", function(event){
    event.preventDefault();
    var followingId = event.target.parentNode.dataset["followingid"];
    
    console.log(followingId);
    $.ajax({
        method: 'POST',
        url: urlFollow,
        data: {isFriend:false, followingId:followingId, _token:token}
    })
    .done(function(){
        // Change the page
    });

});
