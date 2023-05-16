<div class="container">
    <div class="row gy-5">
        <?php foreach($movies as $movie) { ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?php echo $movie->image ?>" class="card-img-top" alt="movies_images">
                        <div class="card-body text-center">
                            <h2 class="card-text"><?php echo $movie->title ?></h2>
                            <h5 class="card-text"><?php echo $movie->original_title ?></h5>
                            <div class="card-text pt-2"><?php echo $movie->date ?></div>
                            <div class="card-text pt-3"><?php echo $movie->getFlag() ?></div>
                            <div class="card-text pt-3">Vote: <?php echo $movie->vote ?></div>
                        </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>