$(document).ready(function() {
    $.ajax({
        url : 'dischi.php',
        method : 'GET',
        error : function() {

        },
        success : function() {
            console.log('ok');
        },
    });
});
