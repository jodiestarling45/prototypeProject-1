<style>
    .container {
        height: 1000px;
        width: 1500px;
        margin: auto;
    }

    .right {
        height: 70%;
        width: 20%;
        float: left;
    }

    .left {
        height: 70%;
        width: 80%;
        float: left;
    }

    .footer {
        text-align: center;
        width: 100%;
        clear: both;
        position: relative;
        height: 200px;
        margin-top: -200px;
    }

    .navigation {
        margin-left: 1px;
        height: 700px;
        width: 130px;
        background-color:;
        font-family: monospace;
        font-size: 2em;
        color:;
    }

    .navlist a:hover {
        color: hotpink;
    }


    .navlist {
        border: solid;
        border-color: black;
        border-radius: .3em .3em .3em .3em;
        height: 200px;
        width: 200px;
        display: block;
        margin-bottom: 3px;
        padding-left: 0px;
        padding-right: 14px;
    }

    .navlist ul li {
        float: left;
    }

    .navlist li {
        list-style-type: none;
    }

    .navlist li a {
        color: black;
        display: block;
        border-bottom: solid black;
        text-align: center;
        text-decoration: none;
        height: 27px;
        width: 190px;
        float: left;
        padding: 12px;
    }

    .navlist a:hover {
        background-color: black;
    }


    /*Login Button*/
    #logup {
        float: right;
        height: 50px;
        width: 170px;
    }

    body {
        font: normal medium/1.4 sans-serif;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 0.75rem;
        text-align: left;
        border: 1px solid #eee;
    }

    tbody tr:nth-child(odd) {
        background: #ccc;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 40%;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 2px 16px;
    }

    .checked {
        color: orange;
    }

    .picture {

    }

    .products {
        display: flex;
        flex-wrap: wrap;
    }

    .product-card {
        padding: 2%;
        flex-grow: 1;
        flex-basis: 16%;

        display: flex; /* so child elements can use flexbox stuff too! */
    }

    .product-card {
        flex: 1 16%;
    }

    .product-card {
        flex: 1 16%;
    }

    CSS

    @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

    * {
        padding: 0;
        margin: 0;
    }

    html {
        background-color: #eaf0f2;
    }

    body {
        font: 16px/1.6 Arial, sans-serif;
    }

    header {
        text-align: center;
        padding-top: 100px;
        margin-bottom: 190px;
    }

    header h1 {
        font: normal 32px/1.5 'Open Sans', sans-serif;
        color: #3F71AE;
        padding-bottom: 16px;
    }

    header h2 {
        color: #F05283;
    }

    header span {
        color: #3F71EA;
    }


    /* The footer is fixed to the bottom of the page */

    footer {
        position: fixed;
        bottom: 0;
    }

    @media (max-height: 800px) {
        footer {
            position: static;
        }

        header {
            padding-top: 40px;
        }
    }


    .footer-distributed {
        background-color: #2c292f;
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 50px 50px 60px 50px;
        margin-top: 80px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
    }

    /* Footer left */

    .footer-distributed .footer-left {
        width: 30%;
    }

    .footer-distributed h3 {
        color: #ffffff;
        font: normal 36px 'Cookie', cursive;
        margin: 0;
    }

    /* The company logo */

    .footer-distributed .footer-left img {
        width: 30%;
    }

    .footer-distributed h3 span {
        color: #e0ac1c;
    }

    /* Footer links */

    .footer-distributed .footer-links {
        color: #ffffff;
        margin: 20px 0 12px;
    }

    .footer-distributed .footer-links a {
        display: inline-block;
        line-height: 1.8;
        text-decoration: none;
        color: inherit;
    }

    .footer-distributed .footer-company-name {
        color: #8f9296;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center {
        width: 35%;
    }


    .footer-distributed .footer-center i {
        background-color: #33383b;
        color: #ffffff;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
    }

    .footer-distributed .footer-center p {
        display: inline-block;
        color: #ffffff;
        vertical-align: middle;
        margin: 0;
    }

    .footer-distributed .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
    }

    .footer-distributed .footer-center p a {
        color: #e0ac1c;
        text-decoration: none;;
    }


    /* Footer Right */

    .footer-distributed .footer-right {
        width: 30%;
    }

    .footer-distributed .footer-company-about {
        line-height: 20px;
        color: #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }

    .footer-distributed .footer-company-about span {
        display: block;
        color: #ffffff;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-distributed .footer-icons {
        margin-top: 25px;
    }

    .footer-distributed .footer-icons a {
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color: #33383b;
        border-radius: 2px;

        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;

        margin-right: 3px;
        margin-bottom: 5px;
    }

    /* Here is the code for Responsive Footer */
    /* You can remove below code if you don't want Footer to be responsive */


    @media (max-width: 880px) {

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: block;
            width: 100%;
            margin-bottom: 40px;
            text-align: center;
        }

        .footer-distributed .footer-center i {
            margin-left: 0;
        }

    }

    @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

    * {
        padding: 0;
        margin: 0;
    }

    html {
        background-color: #eaf0f2;
    }

    body {
        font: 16px/1.6 Arial, sans-serif;
    }

    header {
        text-align: center;
        padding-top: 100px;
        margin-bottom: 190px;
    }

    header h1 {
        font: normal 32px/1.5 'Open Sans', sans-serif;
        color: #3F71AE;
        padding-bottom: 16px;
    }

    header h2 {
        color: #F05283;
    }

    header span {
        color: #3F71EA;
    }


    /* The footer is fixed to the bottom of the page */

    footer {
        float: left;
        clear: none;
        position: fixed;
        bottom: 0;
    }

    @media (max-height: 800px) {
        footer {
            position: static;
        }

        header {
            padding-top: 40px;
        }
    }


    .footer-distributed {
        background-color: #2c292f;
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 50px 50px 60px 50px;
        margin-top: 80px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
    }

    /* Footer left */

    .footer-distributed .footer-left {
        width: 30%;
    }

    .footer-distributed h3 {
        color: #ffffff;
        font: normal 36px 'Cookie', cursive;
        margin: 0;
    }

    /* The company logo */

    .footer-distributed .footer-left img {
        width: 30%;
    }

    .footer-distributed h3 span {
        color: #e0ac1c;
    }

    /* Footer links */

    .footer-distributed .footer-links {
        color: #ffffff;
        margin: 20px 0 12px;
    }

    .footer-distributed .footer-links a {
        display: inline-block;
        line-height: 1.8;
        text-decoration: none;
        color: inherit;
    }

    .footer-distributed .footer-company-name {
        color: #8f9296;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center {
        width: 35%;
    }


    .footer-distributed .footer-center i {
        background-color: #33383b;
        color: #ffffff;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
    }

    .footer-distributed .footer-center p {
        display: inline-block;
        color: #ffffff;
        vertical-align: middle;
        margin: 0;
    }

    .footer-distributed .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
    }

    .footer-distributed .footer-center p a {
        color: #e0ac1c;
        text-decoration: none;;
    }


    /* Footer Right */

    .footer-distributed .footer-right {
        width: 30%;
    }

    .footer-distributed .footer-company-about {
        line-height: 20px;
        color: #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }

    .footer-distributed .footer-company-about span {
        display: block;
        color: #ffffff;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-distributed .footer-icons {
        margin-top: 25px;
    }

    .footer-distributed .footer-icons a {
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color: #33383b;
        border-radius: 2px;

        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;

        margin-right: 3px;
        margin-bottom: 5px;
    }

    /* Here is the code for Responsive Footer */
    /* You can remove below code if you don't want Footer to be responsive */


    @media (max-width: 880px) {

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: block;
            width: 100%;
            margin-bottom: 40px;
            text-align: center;
        }

        .footer-distributed .footer-center i {
            margin-left: 0;
        }

    }

    .product-image img {
        width: 100px;
    }

    .products {
        display: flex;
        flex-wrap: wrap;
    }

    .product-card {
        padding: 2%;
        flex-grow: 1;
        flex-basis: 16%;

        display: flex; /* so child elements can use flexbox stuff too! */
    }
</style>
<div class="header">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index_3.php">home</a></li>
                <li><a href="index_3.php?page=add">add new</a></li>
                <li><a href="index2.php">customer</a></li>
            </ul>
        </div>
    </nav>
</div>
<h2>Update infomation</h2>
<form method="post" action="./index2.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $customer->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Birthday</label>
        <textarea name="birthday" class="form-control"><?php echo $customer->birthday; ?></textarea>
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control"><?php echo $customer->address; ?></textarea>
    </div>
    <div class="form-group">
        <label>Email</label>
        <textarea name="email" class="form-control"><?php echo $customer->email; ?></textarea>
    </div>
    <div class="form-group">
        <label>Numbers Phone</label>
        <textarea name="phone" class="form-control"><?php echo $customer->phone; ?></textarea>
    </div>
    <div class="form-group">
        <label>Gender</label>
        <textarea name="gender" class="form-control"><?php echo $customer->gender; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index2.php" class="btn btn-default">Cancel</a>
    </div>
</form>