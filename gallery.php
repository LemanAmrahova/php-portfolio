<div id="fh5co-gallery" class="fh5co-bg-dark">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Gallery</h2>
            </div>
        </div>
        <div class="row">

            <?php
            global $con;
            include 'database.php';
            $sql = "SELECT * FROM `gallery`;";
            $run = mysqli_query($con, $sql);
            while ($get = mysqli_fetch_assoc($run)) {
                $img = $get['image'];
                $text = $get['text'];
                echo "
                    <div class=\"col-md-3 text-center col-padding animate-box\">
                        <a href=\"#\" class=\"work\" style=\"background-image: url(images/{$img});\">
                            <div class=\"desc\">
                                <h3>{$text}</h3>
                            </div>
                        </a>
                    </div>";
            }; ?>

        </div>
    </div>
</div>