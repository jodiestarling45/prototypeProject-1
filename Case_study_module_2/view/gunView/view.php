<style>
    body {

    }
    .row.content {height: 1500px}

    /* Set gray background color and 100% height */
    .sidenav {
        background-color: #f1f1f1;
        height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height: auto;}
    .container{
        background-color: #0072ff;
        margin: auto;
        text-align: center;
    }
    }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
    <p>

    </p>
    <h1 style="color: red"><?php echo $gun->name; ?></h1> <img src="images/<?php echo $gun->image?>" alt="">
    <hr>
    <p style="color: #5900a6">  <i class="fas fa-bars"></i> Series Numbers: <?php echo $gun->series; ?></p>
    <hr>
    <p style="color: green">  <i class="fas fa-bars"></i> Brand: <?php echo $gun->brand; ?></p>
    <hr>
    <p style="color:blueviolet">  <i class="fas fa-bars"></i> Details: <?php echo $gun->content; ?></p>
    <hr>
    <p style="color:orangered">  <i class="fas fa-bars"></i> Country Origin: <?php echo $gun->origin; ?></p>
    <hr>
    <p style="color:orangered">  <i class="fas fa-bars"></i> Price: <?php echo $gun->price; ?></p>
    <hr>
    <td>  <i class="fas fa-bars"></i> Status: <?php echo $gun->status ?></td>
    <hr>
    <p style="color:orangered"> Type: <?php echo $gun->type_id; ?></p>
    <a href="index_3.php" class="btn btn-default"><button type="button" class="btn btn-dark">back</button></a>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
