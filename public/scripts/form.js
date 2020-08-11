$(document).ready(function () {
    $('form').submit(function (event) {
        var json;
        event.preventDefault();
        $.ajax({
            type: $(this).attributes('method'),
            url: $(this).attributes('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                //let jQuery;
                json = jQuery.parseJSON(result);
                if(json.url){
                    window.location.href = json.url;
                } else {
                    alert(json.status + '-' + json.message);
                }
            },
        });
    });
});