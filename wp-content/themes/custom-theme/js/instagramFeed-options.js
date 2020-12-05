(function($){
    $(window).on('load', function(){
        $.instagramFeed({
            'username': 'instagram',
            'container': "#instagram-feed",
            'display_profile': false,
            'display_biography': false,
            'display_gallery': true,
            'callback': null,
            'styling': true,
            'items': 8,
            'items_per_row': 4,
            'margin': 1 
        });
    });
})(jQuery);