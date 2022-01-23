<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dovana.lt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>
<body>
<?php require "blocks/header.php"?>

<?php require "blocks/jumbotron.php"?>

    <div class="category container">

        <div>
            <a href="catalog.php?b=w"><img class="mx-auto d-block" src="img/woman.png"></img></a>
            <h2><a href="catalog.php?b=w">Moterims</a></h2>
        </div>

        <div>
            <a href="catalog.php?b=m" ><img class="mx-auto d-block" src="img/man.png"></img></a>
            <h2><a href="catalog.php?b=m">Vyrams</a></h2>
        </div>

        <div>
            <a href="catalog.php?c=1"><img class="mx-auto d-block"src="img/kids.png"></img></a>
            <h2><a href="catalog.php?c=1">Vaikams</a></h2>
        </div>

    </div>

    <?php require "blocks/footer.php"?>
    <script>src="js/main.js"</script>
</body>
</html>