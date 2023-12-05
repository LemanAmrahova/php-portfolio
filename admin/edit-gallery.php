<?php
include "includes/header.php";
$data = [];

$act = $_GET['act'];
if ($act == "edit") {
    $id = $_GET['id'];
    $gallery = getById("gallery", $id);
}
?>

<form method="post" action="save.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">Add New Gallery</legend>
        <input name="cat" type="hidden" value="gallery">
        <input name="id" type="hidden" value="<?= $id ?>">
        <input name="act" type="hidden" value="<?= $act ?>">

        <label>Location</label>
        <input class="form-control" type="text" name="location" value="<?= $gallery['location'] ?>"/><br>

        <label>Text</label>
        <input class="form-control" type="text" name="text" value="<?= $gallery['text'] ?>"/><br>
        <br>
        <input type="submit" value=" Save " class="btn btn-success">
</form>
<?php include "includes/footer.php"; ?>
				