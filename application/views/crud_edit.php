        <h1 class="mb-4">EDIT DATA</h1>
        <form method="POST" action="<?= site_url('crudcontroller/saveediteddata/' . $row->id) ?>">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $row->first_name ?>" placeholder="<?= $row->first_name ?>">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $row->last_name ?>" placeholder="<?= $row->last_name ?>">
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" class="form-control" id="bio" name="bio" value="<?= $row->bio ?>" placeholder="<?= $row->bio ?>">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?= $row->date_of_birth ?>" placeholder="<?= $row->date_of_birth ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </body>
</html>