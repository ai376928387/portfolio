$(document).ready(function() { 
    // Instagram Feed    
    if($('.instafeed').length){
        jQuery.fn.spectragram.accessData = {
            accessToken: '1027763135.1677ed0.d2f03dd326b641b3b5d8e71d5405f4d6',
            clientID: 'e3f44710d80e4d4c896ffc6269a1d227'
        };  

        $('.instafeed').each(function() {
            var feedID = $(this).attr('data-user-name') + '_';
            $(this).children('ul').spectragram('getUserFeed', {
                query: feedID,
                max: 12
            });
        })
    }
}); 