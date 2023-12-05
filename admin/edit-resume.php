<?php
include "includes/header.php";
$data = [];

$act = $_GET['act'];
if ($act == "edit") {
    $id = $_GET['id'];
    $resume = getById("resume", $id);
}
?>

<form method="post" action="save.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">Add New Resume</legend>
        <input name="cat" type="hidden" value="resume">
        <input name="id" type="hidden" value="<?= $id ?>">
        <input name="act" type="hidden" value="<?= $act ?>">

        <label>Title</label>
        <input class="form-control" type="text" name="title" value="<?= $resume['title'] ?>"/><br>

        <label>Company</label>
        <input class="form-control" type="text" name="company" value="<?= $resume['company'] ?>"/><br>

        <label>Years</label>
        <input class="form-control" type="text" name="years" value="<?= $resume['years'] ?>"/><br>

        <label>Text</label>
        <textarea class="ckeditor form-control" name="text"><?= $resume['text'] ?></textarea><br>
        <br>
        <input type="submit" value=" Save " class="btn btn-success">
</form>
<?php include "includes/footer.php"; ?>
				