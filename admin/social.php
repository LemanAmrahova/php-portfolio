<?php
include "includes/header.php";
?>

<a class="btn btn-primary" href="edit-social.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Social</a>

<h1>Social</h1>
<p>This table includes <?php echo counting("social", "id"); ?> social.</p>

<table id="sorted" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Link</th>

        <th class="not">Edit</th>
        <th class="not">Delete</th>
    </tr>
    </thead>

    <?php
    $social = getAll("social");
    if ($social) foreach ($social as $socials):
        ?>
        <tr>
            <td><?php echo $socials['id'] ?></td>
            <td><?php echo $socials['name'] ?></td>
            <td><?php echo $socials['link'] ?></td>


            <td><a href="edit-social.php?act=edit&id=<?php echo $socials['id'] ?>"><i
                            class="glyphicon glyphicon-edit"></i></a></td>
            <td><a href="save.php?act=delete&id=<?php echo $socials['id'] ?>&cat=social"
                   onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include "includes/footer.php"; ?>
				