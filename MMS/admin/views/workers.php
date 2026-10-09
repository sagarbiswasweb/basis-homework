<div class="container-fluid mt-4">
    <div class="row">
        <!-- side nav for worker included  -->
        <?php include("includes/side-nav-workers.php"); ?>

        <main class="col-md-10 ml-sm-auto px-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">work type</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Voter Id</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Khala</td>
                        <td>01306555222</td>
                        <td>NILL</td>
                        <td>Dhaka</td>
                        <td>Cook</td>
                        <td>1/2/2023</td>
                        <td>002122454121</td>
                        <td>2000 tk</td>
                        <td>
                            <a href="?page=edit-workers" class="btn btn-success" role="button" aria-disabled="true">Edit</a>
                            <a href="#" class="btn btn-danger" role="button" aria-disabled="true">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jharu wala mama</td>
                        <td>01306111333</td>
                        <td>NILL</td>
                        <td>Dhaka</td>
                        <td>Cleaner</td>
                        <td>1/2/2023</td>
                        <td>002122444555</td>
                        <td>300 tk</td>
                        <td>
                            <a href="?page=edit-workers" class="btn btn-success" role="button" aria-disabled="true">Edit</a>
                            <a href="#" class="btn btn-danger" role="button" aria-disabled="true">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</div>