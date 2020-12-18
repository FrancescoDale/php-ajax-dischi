$(document).ready(function() {

    var source = $("#card-template").html();
    var template = Handlebars.compile(source);

    $.ajax({
        url : 'dischi.php',
        method : 'GET',
        error : function() {

        },
        success : function(variable) {
            for (var i = 0; i < variable.length; i++) {
                console.log(variable[i]);
            }
        },
    });
});
