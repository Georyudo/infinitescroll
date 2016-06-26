/**
 * Created by Alexander on 26.06.2016.
 */

$( document ).ready(function() {

    $('.button').click(function(){
        $('.content .news-teaser').infinitescroll('retrieve');
         console.log('Retrieve this shit.')
        return false;
    });

    // infinitescroll() is called on the element that surrounds
    // the items you will be loading more of
    $('.content .news-teaser').infinitescroll({
        debug		 : true,
        navSelector  : "div.navigation",
        nextSelector : "div.navigation a.next",
        itemSelector : "div.img-txt-teaser",
        dataType	 : 'html'
    });
});
