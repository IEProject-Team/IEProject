

$('#btnfollow').on('click', function(event){
    event.preventDefault();
    
    $.ajax({
        method: 'POST',
        url: urlFollow,
        data: {isFriend:false, followingId:followingId, _token:token}
        console.log($search_result)
    }).done(function(){
        //change the page
    });

});