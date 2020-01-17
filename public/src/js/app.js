

$('#btnfollow').on("click", function(event){
    event.preventDefault();
    var followingId = event.target.parentNode.childNodes[1].textContent;
    
    console.log(followingId);
    $.ajax({
        method: 'POST',
        url: '/follow',
        data: {isFriend:false, followingId:followingId, _token:token}
    })
    .done(function(){
        // Change the page
    });

});
