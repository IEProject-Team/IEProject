$('.post')
    .find('.interaction')
    .find('a')
    .eq(2)
    .on('clink', function() {
        console.log("it works!");
    });
