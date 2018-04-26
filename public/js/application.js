$(function() {
    $('#ajax-button').on('click', function(){
            $.ajax(url + "/courses/ajaxGetStats")
                .done(function(result) {
                    $('#ajax-result-box').html(result);
                })
                .fail(function() { console.log('failed ajax'); });
        });
});
