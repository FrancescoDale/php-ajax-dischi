$(document).ready(function() {

    var source = $("#card-template").html();
    var template = Handlebars.compile(source);

    $.ajax({
        url : 'dischi.php',
        method : 'GET',
        error : function() {
            console.log('error');
        },
        success : function(variable) {
            for (var i = 0; i < variable.length; i++) {
                var objCreator = {
                    'poster' : variable[i].poster,
                    'title' : variable[i].title,
                    'author' : variable[i].author,
                    'genre' : variable[i].genre,
                    'year' : variable[i].year,
                };
                var html = template(objCreator);
                $('.cardbox').append(html);
            };
        },
    });
});
