

$('#btnfollow').on('click', function(event){
    event.preventDefault();
    var followingId = event.target.parentNode.childNodes[1].textContent;
    $.ajax({
        method : 'POST',
        url: url,
        data: {isFriend:false, followingId:followingId, _token:token}
    })
    .done(function(){
        // Change the page
    });

});