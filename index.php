<?php
include __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP - OOP - 1</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP - OOP - 1</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <?php foreach($movies as $movie) { ?>
                            <img src="<?php echo $movie->image ?>" class="card-img-top" alt="movies_images">
                                <div class="card-body">
                                    <h4 class="card-text"><?php echo $movie->title ?></h4>
                                    <h5 class="card-text"><?php echo $movie->original_title ?></h5>
                                </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <span>"Homemade"</span>
        </div>
    </footer>
    
</body>
</html>