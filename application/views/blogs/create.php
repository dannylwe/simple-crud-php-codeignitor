<div class="container col-md-offset-2">
    <h2>Create Form</h2>
    <form method="POST" action="<?php echo base_url('blogsCreate'); ?>">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>