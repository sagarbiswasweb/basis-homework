<main>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php
                foreach ($itemArray as $item) {
                ?>
                    <div class="col-md-2 my-3">
                        <div class="card">
                            <img src="<?php echo $item["img"]; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Title: </b><?php echo $item["title"] ?></h5>
                                <p class="card-text"><b>Des: </b><?php echo $item["sd"] ?></p>
                                <p class="card-text"><b>Price: </b><?php echo $item["price"]["regular"] ?></p>
                                <p class="card-text"><b>Offer: </b><?php echo $item["price"]["offer"] ?></p>
                                <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </section>
</main>