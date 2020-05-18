<h2>Update information</h2>
<form method="post" action="./index_3.php?page=edit" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $gun->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $gun->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Series</label>
        <textarea name="series" class="form-control"><?php echo $gun->series; ?></textarea>
    </div>
    <div class="form-group">
        <label>Brand</label>
        <textarea name="brand" class="form-control"><?php echo $gun->brand; ?></textarea>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"><?php echo $gun->content; ?></textarea>
    </div>
    <div class="form-group">
        <label>Origin</label>
        <textarea name="origin" class="form-control"><?php echo $gun->origin; ?></textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <textarea name="price" class="form-control"><?php echo $gun->price; ?></textarea>
    </div>
    <div class="form-group">
        <label>Status</label>
        <select name="status" id="">
            <option value="avaible">available</option>
            <option value="not available">not available</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">image</label>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label>Type_id</label>
        <select name="type_id" id="">
            <option value="1">handgun</option>
            <option value="2">shotgun</option>
            <option value="3">rifle</option>
            <option value="4">Assault rifle</option>
            <option value="5">Sub_machine</option>
            <option value="6">Machine</option>
            <option value="7">Snipe</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="upload" value="Update" class="btn btn-primary"/>
        <a href="index_3.php" class="btn btn-default">Cancel</a>
    </div>
</form>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>