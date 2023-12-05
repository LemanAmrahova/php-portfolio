<?php
include "includes/header.php";
?>

<a class="btn btn-primary" href="edit-gallery.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New
    Gallery</a>

<h1>Gallery</h1>
<p>This table includes <?php echo counting("gallery", "id"); ?> gallery.</p>

<table id="sorted" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Location</th>
        <th>Text</th>

        <th class="not">Edit</th>
        <th class="not">Delete</th>
    </tr>
    </thead>

    <?php
    $gallery = getAll("gallery");
    if ($gallery) foreach ($gallery as $gallerys):
        ?>
        <tr>
            <td><?php echo $gallerys['id'] ?></td>
            <td><?php echo $gallerys['location'] ?></td>
            <td><?php echo $gallerys['text'] ?></td>


            <td><a href="edit-gallery.php?act=edit&id=<?php echo $gallerys['id'] ?>"><i
                            class="glyphicon glyphicon-edit"></i></a></td>
            <td><a href="save.php?act=delete&id=<?php echo $gallerys['id'] ?>&cat=gallery"
                   onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include "includes/footer.php"; ?>
				