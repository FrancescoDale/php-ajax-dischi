<?php include 'dischi.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../dist/app.css">
        <title>php-ajax-dischi</title>
    </head>
    <body>
        <header>
            <h1 class="text-center text-capitalize mt-4 mb-4">lista dischi</h1>
        </header>
        <main>
            <div class="container">
                <div class="cardbox">
                    <?php foreach ($dischi as $disk) { ?>
                        <div class="card text-capitalize">
                            <img src="<?php echo $disk['poster'] ?>" alt="image">
                            <p>title : <?php echo $disk['title'] ?> </p>
                            <p>author : <?php echo $disk['author'] ?> </p>
                            <p>genre : <?php echo $disk['genre'] ?> </p>
                            <p>year : <?php echo $disk['year'] ?> </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>

    </body>
</html>
