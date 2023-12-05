<?php
include "includes/header.php";
?>

<a class="btn btn-primary" href="edit-admins.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Admins</a>

<h1>Admins</h1>
<p>This table includes <?php echo counting("admins", "id"); ?> admins.</p>

<table id="sorted" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role</th>

        <th class="not">Edit</th>
        <th class="not">Delete</th>
    </tr>
    </thead>

    <?php
    $admins = getAll("admins");
    if ($admins) foreach ($admins as $admin):
        ?>
        <tr>
            <td><?php echo $admin['id'] ?></td>
            <td><?php echo $admin['name'] ?></td>
            <td><?php echo $admin['email'] ?></td>
            <td><?php echo $admin['password'] ?></td>
            <td><?php echo $admin['role'] ?></td>

            <td><a href="edit-admins.php?act=edit&id=<?php echo $admin['id'] ?>"><i
                            class="glyphicon glyphicon-edit"></i></a></td>
            <td><a href="save.php?act=delete&id=<?php echo $admin['id'] ?>&cat=admins"
                   onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include "includes/footer.php"; ?>
				