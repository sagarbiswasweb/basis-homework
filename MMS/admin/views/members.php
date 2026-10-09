<div class="container-fluid mt-4">
    <div class="row">

        <!-- side nav for members included  -->
        <?php include("includes/side-nav-members.php"); ?>

        <main class="col-md-10 ml-sm-auto px-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Room</th>
                        <th scope="col">Voter Id</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>sagar biswas</td>
                        <td>01306472108</td>
                        <td>saggarr.work@gmail.com</td>
                        <td>kushtia</td>
                        <td>student</td>
                        <td>1/2/2023</td>
                        <td>001</td>
                        <td>002122454121</td>
                        <td>
                            <a href="?page=edit-members" class="btn btn-success" role="button" aria-disabled="true">Edit</a>
                            <a href="#" class="btn btn-danger" role="button" aria-disabled="true">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>saikat shikder</td>
                        <td>0131258756</td>
                        <td>saikat@gmail.com</td>
                        <td>kushtia</td>
                        <td>student</td>
                        <td>5/2/2023</td>
                        <td>003</td>
                        <td>002125444121</td>
                        <td>
                            <a href="?page=edit-members" class="btn btn-success" role="button" aria-disabled="true">Edit</a>
                            <a href="#" class="btn btn-danger" role="button" aria-disabled="true">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>shajib majumder</td>
                        <td>01306445566</td>
                        <td>shajib@gmail.com</td>
                        <td>kushtia</td>
                        <td>job holder</td>
                        <td>1/2/2023</td>
                        <td>006</td>
                        <td>00444444121</td>
                        <td>
                            <a href="?page=edit-members" class="btn btn-success" role="button" aria-disabled="true">Edit</a>
                            <a href="#" class="btn btn-danger" role="button" aria-disabled="true">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</div>