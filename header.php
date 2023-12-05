<?php
global $con;
include 'database.php';
$sql = "SELECT * FROM `about` WHERE id = 1;";
$run = mysqli_query($con, $sql);
$get = mysqli_fetch_assoc($run);
$fullname = $get['name'] . " " . $get['surname'];
$job = $get['jobs'];
?>
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
        style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <div class="profile-thumb" style="background: url(images/me.png);"></div>
                        <h1><span><?= $fullname ?></span></h1>
                        <h3><span><?= $job ?></span></h3>
                        <p>
                        <ul class="fh5co-social-icons">
                            <?php
                            include 'database.php';
                            $query = "SELECT * FROM `social`;";
                            $run2 = mysqli_query($con, $query);
                            while ($get2 = mysqli_fetch_assoc($run2)) {
                                $name = "icon-" . $get2['name'] . "2";
                                $location = $get2['link'];
                                echo "<li><a href=\"{$location}\"><i class=\"{$name}\"></i></a></li>";
                            } ?>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
