<h1>You sure ???</h1>

<h3><?php echo $customer->name ; ?></h3>

<form action="./index2.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index2.php">Cancel</a>
    </div>
</form>