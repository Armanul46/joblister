<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Edit Job Listing</h2>
    <form method="post" action="edit.php?id=<?php echo $job->id ?>">
        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company ?>">
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach( $categories as $cat ) : ?>
                <option value="<?php echo $cat->id; ?>"><?php echo $cat->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo $job->description ?></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location ?>">
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary ?>">
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user ?>">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email ?>">
        </div>
        <br>
        <input type="submit" class="" value="submit" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>