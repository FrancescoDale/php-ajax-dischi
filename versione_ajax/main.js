$(document).ready(function() {
    $.ajax({
        url : 'dischi.php',
        method : 'GET',
        error : function() {

        },
        success : function(variable) {
            console.log(variable);
        },
    });
});
