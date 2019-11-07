<div class="container col-md-offset-2">
    <h2>Edit Blog</h2>
    <!-- blogs update refers to the controller -->
    <form method="POST" action="<?php echo base_url('blogs/update/' . $blog->id); ?>">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="<?php echo $blog->title; ?>">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control"><?php echo $blog->descriotion; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>