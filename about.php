<?php
global $con;

include 'database.php';
    $sql = "SELECT * FROM `about` WHERE id = 1;";
    $run = mysqli_query($con, $sql);
    $get = mysqli_fetch_assoc($run);
    $fullname = $get['name']." ".$get['surname'];
    $phone = $get['phone'];
    $email = $get['email'];
    $address = $get['address'];
    $title = $get['title'];
    $text = $get['text'];
    $img = $get['image'];
?>
<div id="fh5co-about" class="animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <ul class="info">
                    <li><span class="first-block">Full Name: </span><span class="second-block"><?=$fullname?></span></li>
                    <li><span class="first-block">Phone: </span><span class="second-block"><?=$phone?></span></li>
                    <li><span class="first-block">Email: </span><span class="second-block"><?=$email?></span></li>
                    <li><span class="first-block">Address: </span><span class="second-block"><?=$address?></span></li>
                </ul>
            </div>
            <div class="col-md-4">
                <img src="images/<?php echo $img; ?>" alt="Your Name" class="img-responsive">
            </div>
            <div class="col-md-4">
                <h2><?=$title?></h2>
                <p><?=$text?></p>
            </div>
        </div>
    </div>
</div>