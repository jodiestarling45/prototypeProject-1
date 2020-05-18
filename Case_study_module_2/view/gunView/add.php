<?php

if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="body">
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Addition new gun</h1>
            </div>
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label>Series</label>
                        <input type="text" class="form-control" name="series" placeholder="Series Numbers" required>
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" class="form-control" name="brand" placeholder="Brand" required>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" name="content" placeholder="Data detail" required>
                    </div>
                    <div class="form-group">
                        <label>Origin</label>
                        <input type="text" class="form-control" name="origin" placeholder="Countries" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Price" required>
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
                    <button type="submit" name="upload" class="btn btn-primary">Create new</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>

</div>
<style>
    .body{
        background-color: #080808;
    }
    label{
        color: white;
    }
    h1{
        color: white;
        font-family: 'Numans', sans-serif;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>