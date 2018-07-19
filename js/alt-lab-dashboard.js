jQuery( document ).ready(function() {
    jQuery(".workshop-to-event-button").click(function(){  
    console.log('functioning');
    var post_id = jQuery(this).data('id');
    var data = {
      action: 'make_workshop_to_event',
      id: post_id,
    };
    jQuery.post(ajaxurl, data, function(response) {
            console.log(response);
            window.location.href = response;
            //http://192.168.33.10/wordpress/altlab/wp-admin/post.php?post=246&action=edit
        })
    });
});    
