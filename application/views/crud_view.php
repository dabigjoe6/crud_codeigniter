
        <h1 class="mb-4">CRUD</h1>
        <button type="button" class="btn btn-primary mb-2 btn-sm" data-toggle="modal" data-target="#exampleModal">
            Add
        </button>

            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action='crudcontroller/adddata'>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <input type="text" class="form-control" id="bio" name="bio" placeholder="Enter bio">
                            </div>
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Enter date of birth">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($table as $row) { ?>
                    <tr>
                        <th scope="row"><?= $row->id ?></th>
                        <td><?= $row->first_name ?></td>
                        <td><?= $row->last_name ?></td>
                        <td><?= $row->bio ?></td>
                        <td><?= $row->date_of_birth ?></td>
                        <td scope="col"><a href="<?= site_url('crudcontroller/editdata/' . $row->id) ?>">Edit</a>/<a href="#">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
