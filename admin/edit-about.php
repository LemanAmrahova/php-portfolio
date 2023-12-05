<?php
include "includes/header.php";
$data = [];

$act = $_GET['act'];
if ($act == "edit") {
    $id = $_GET['id'];
    $about = getById("about", $id);
}
?>

<form method="post" action="save.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">Add New About</legend>
        <input name="cat" type="hidden" value="about">
        <input name="id" type="hidden" value="<?= $id ?>">
        <input name="act" type="hidden" value="<?= $act ?>">

        <label>Name</label>
        <input class="form-control" type="text" name="name" value="<?= $about['name'] ?>"/><br>

        <label>Surname</label>
        <input class="form-control" type="text" name="surname" value="<?= $about['surname'] ?>"/><br>

        <label>Phone</label>
        <input class="form-control" type="text" name="phone" value="<?= $about['phone'] ?>"/><br>

        <label>Email</label>
        <input class="form-control" type="text" name="email" value="<?= $about['email'] ?>"/><br>

        <label>Address</label>
        <input class="form-control" type="text" name="address" value="<?= $about['address'] ?>"/><br>

        <label>Jobs</label>
        <input class="form-control" type="text" name="jobs" value="<?= $about['jobs'] ?>"/><br>

        <label>Title</label>
        <input class="form-control" type="text" name="title" value="<?= $about['title'] ?>"/><br>

        <label>Text</label>
        <textarea class="ckeditor form-control" name="text"><?= $about['text'] ?></textarea><br>
        <br>
        <input type="submit" value=" Save " class="btn btn-success">
</form>
<?php include "includes/footer.php"; ?>
				