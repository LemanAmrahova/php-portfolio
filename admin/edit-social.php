<?php
include "includes/header.php";
$data = [];

$act = $_GET['act'];
if ($act == "edit") {
    $id = $_GET['id'];
    $social = getById("social", $id);
}
?>

<form method="post" action="save.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">Add New Social</legend>
        <input name="cat" type="hidden" value="social">
        <input name="id" type="hidden" value="<?= $id ?>">
        <input name="act" type="hidden" value="<?= $act ?>">

        <label>Name</label>
        <input class="form-control" type="text" name="name" value="<?= $social['name'] ?>"/><br>

        <label>Link</label>
        <input class="form-control" type="text" name="link" value="<?= $social['link'] ?>"/><br>
        <br>
        <input type="submit" value=" Save " class="btn btn-success">
</form>
<?php include "includes/footer.php"; ?>
				