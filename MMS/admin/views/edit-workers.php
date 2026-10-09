<div class="container-fluid">
    <div class="row">

        <!-- sidebar included -->
        <?php include("includes/side-nav-workers.php"); ?>

        <main class="col-md-10 ml-sm-auto px-4">
            <!-- main content goes here -->
            <div class="main-form-body container-fluid">
                <h1 class="text-center">Edit worker</h1>
                <form action="">
                    <div class="row form-group">
                        <div class="col">
                            <label class="form-label" for="username">Full name</label>
                            <input type="text" class="form-control" aria-label="Full name">
                        </div>
                        <div class="col">
                            <label class="form-label" for="username">Phone</label>
                            <input type="tel" class="form-control" aria-label="Phone">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label class="form-label" for="username">Email</label>
                            <input type="email" class="form-control" aria-label="Email">
                        </div>
                        <div class="col">
                            <!-- <input type="text" class="form-control" placeholder="Address" aria-label="Last name"> -->
                            <label class="form-label" for="username">Address</label>
                            <textarea class="form-control" name="" id="" cols="10" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label class="form-label" for="username">Work type</label>
                            <input type="text" class="form-control" aria-label="Occupation">
                        </div>
                        <div class="col">
                            <label class="form-label" for="username">Join date</label>
                            <input type="date" class="form-control" aria-label="Join date">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label class="form-label" for="username">Voter id</label>
                            <input type="number" class="form-control" aria-label="Room">
                        </div>
                        <div class="col">
                            <label class="form-label" for="username">salary</label>
                            <input type="number" class="form-control" aria-label="Voter id">
                        </div>
                    </div>
                    <br>
                    <input class="btn btn-success w-100" type="submit" value="Update">
                </form>
            </div>
        </main>
    </div>
</div>