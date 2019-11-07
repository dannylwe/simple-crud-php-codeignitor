<div class="container table-responsive">
    <div class="row">
        <div class="col-lg-12">
            <h2>Blogs CRUD</h2>
            <div class="float-right">
                <!-- blogs/create refers to the controller -->
                <a class="btn btn-primary" href="<?php echo base_url('blogs/create'); ?>">Create</a>
            </div>
        </div>
    </div>
</div>

<div class="container table-responsive">
    <table class="table table-table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d): ?>
            <tr>
                <td><?php echo $d->title; ?></td>
                <!-- database error supposed to be description -->
                <td><?php echo $d->descriotion; ?></td>
                <td>
                    <form method= "DELETE" action="<?php echo base_url('blogs/delete/' . $d->id); ?>">
                        <a href="<?php echo base_url('blogs/edit/' . $d->id); ?>"><i class="glyphicon glyphicon-pencil"></i>EDIT</a>
                        <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i>DELETE</button>
                        
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>