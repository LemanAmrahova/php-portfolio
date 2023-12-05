<div id="fh5co-resume" class="fh5co-bg-color">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>My Resume</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <ul class="timeline">
                    <li class="timeline-heading text-center animate-box">
                        <div><h3>Education & Work Experience</h3></div>
                    </li>
                    <?php
                    global $con;
                    include 'database.php';
                    $sql = "SELECT * FROM `resume`;";
                    $run = mysqli_query($con, $sql);
                    while ($get = mysqli_fetch_assoc($run)) {
                        $title = $get['title'];
                        $text = $get['text'];
                        $company = $get['company'];
                        $years = $get['years'];
                        $id = $get['id'];
                        if ($id % 2) {
                            echo "
                                    <li class=\"animate-box timeline-unverted\">
                                        <div class=\"timeline-badge\"><i class=\"icon-suitcase\"></i></div>
                                        <div class=\"timeline-panel\">
                                            <div class=\"timeline-heading\">
                                                <h3 class=\"timeline-title\">{$title}</h3>
                                                <span class=\"company\">{$company} - {$years}</span>
                                            </div>
                                            <div class=\"timeline-body\">
                                                <p>{$text}</p>
                                            </div>
                                        </div>
                                    </li>";
                        } else {
                            echo "
                                <li class=\"timeline-inverted animate-box\">
                                    <div class=\"timeline-badge\"><i class=\"icon-suitcase\"></i></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h3 class=\"timeline-title\">{$title}</h3>
                                            <span class=\"company\">{$company} - {$years}</span>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>{$text}</p>
                                        </div>
                                    </div>
                                </li>";
                        }
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div>