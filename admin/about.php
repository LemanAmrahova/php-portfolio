<?php
include "includes/header.php";
?>

<a class="btn btn-primary" href="edit-about.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New
    About</a>

<h1>About</h1>
<p>This table includes <?php echo counting("about", "id"); ?> about.</p>

<table id="sorted" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Jobs</th>
        <th>Title</th>
        <th>Text</th>

        <th class="not">Edit</th>
        <th class="not">Delete</th>
    </tr>
    </thead>

    <?php
    $about = getAll("about");
    if ($about) foreach ($about as $abouts):
        ?>
        <tr>
            <td><?php echo $abouts['id'] ?></td>
            <td><?php echo $abouts['name'] ?></td>
            <td><?php echo $abouts['surname'] ?></td>
            <td><?php echo $abouts['phone'] ?></td>
            <td><?php echo $abouts['email'] ?></td>
            <td><?php echo $abouts['address'] ?></td>
            <td><?php echo $abouts['jobs'] ?></td>
            <td><?php echo $abouts['title'] ?></td>
            <td><?php echo $abouts['text'] ?></td>


            <td><a href="edit-about.php?act=edit&id=<?php echo $abouts['id'] ?>"><i
                            class="glyphicon glyphicon-edit"></i></a></td>
            <td><a href="save.php?act=delete&id=<?php echo $abouts['id'] ?>&cat=about"
                   onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include "includes/footer.php"; ?>
				