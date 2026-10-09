<main>
    <!-- carousel  -->
    <section class="py-3">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                foreach ($sliderA as $key => $sliders) {
                ?>
                    <div class="carousel-item <?php if ($key == 0) {
                                                    echo "active";
                                                } ?>" data-bs-interval="3000">
                        <img src="<?php echo $sliders; ?>" class="d-block w-100" height="400px" alt="...">
                    </div>
                <?php
                }
                ?>

                <!-- <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/images/02.jpg" class="d-block w-100" height="400px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/03.jpg" class="d-block w-100" height="400px" alt="...">
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- card  -->
    <section>
        <div class="container">
            <div class="row">
                <?php
                foreach ($itemA as $key => $item) {
                ?>
                    <div class="col-md-3 py-3">
                        <div class="card">
                            <img src="<?php echo $item[0]; ?>" class="card-img-top" height="200px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item[1]; ?></h5>
                                <p class="card-text"><?php echo $item[2]; ?></p>
                                <p class="card-text"><b>Price: </b><?php echo $item[3]; ?></p>
                                <a href="?page=product-details&image=<?php echo $item[0]; ?>&title=<?php echo $item[1]; ?>&description=<?php echo $item[2]; ?>&price=<?php echo $item[3]; ?>" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

                <!-- <div class="col-md-3 py-3">
                    <div class="card">
                        <img src="assets/images/01.jpg" class="card-img-top" height="200px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img src="assets/images/01.jpg" class="card-img-top" height="200px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img src="assets/images/01.jpg" class="card-img-top" height="200px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img src="assets/images/01.jpg" class="card-img-top" height="200px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img src="assets/images/01.jpg" class="card-img-top" height="200px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img src="assets/images/01.jpg" class="card-img-top" height="200px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img src="assets/images/01.jpg" class="card-img-top" height="200px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
</main>