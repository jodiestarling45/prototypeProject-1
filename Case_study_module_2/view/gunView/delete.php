<h1>You sure ???</h1>

<h3><?php echo $gun->name ; ?></h3>

<form action="./index_3.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $gun->id; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index_3.php">Cancel</a>
    </div>
</form>