<div id="fh5co-skills" class="animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Skills</h2>
            </div>
        </div>

        <div class="row">
            <?php
            global $con;
            include 'database.php';
            $sql = "SELECT * FROM `skills`;";
            $run = mysqli_query($con, $sql);
            while ($get = mysqli_fetch_assoc($run)) {
                $name = $get['name'];
                $value = $get['value'];
                $id = $get['id'];
                if ($id % 2) {
                    echo "
                        <div class=\"col-md-6\">
                            <div class=\"progress-wrap\">
                                <h3><span class=\"name-left\">{$name}</span><span class=\"value-right\">{$value}%</span></h3>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-{$id} progress-bar-striped active\" role=\"progressbar\"
                                    aria-valuenow=\"{$value}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{$value}%\">
                                    </div>
                                </div>
                            </div>
                        </div> ";
                } else {
                    echo "
                        <div class=\"col-md-6\">
                            <div class=\"progress-wrap\">
                                <h3><span class=\"name-left\">{$name}</span><span class=\"value-right\">{$value}%</span></h3>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-{$id} progress-bar-striped active\" role=\"progressbar\"
                                    aria-valuenow=\"{$value}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{$value}%\">
                                    </div>
                                </div>
                            </div>
                        </div> ";
                }
            } ?>
        </div>
    </div>
</div>