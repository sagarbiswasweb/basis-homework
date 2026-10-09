<section class="py-5">
    <div class="container">
        <div class="card mb-3">
            <img src="<?php echo $_GET["image"]; ?>" class="card-img-top w-100" height="300px"  alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_GET["title"]; ?></h5>
                <p class="card-text"><?php echo $_GET["description"]; ?></p>
                <p class="card-text"><b>Price: </b><?php echo $_GET["price"]; ?></p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</section>