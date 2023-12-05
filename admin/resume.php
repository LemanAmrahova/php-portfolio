<?php
include "includes/header.php";
?>

<a class="btn btn-primary" href="edit-resume.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Resume</a>

<h1>Resume</h1>
<p>This table includes <?php echo counting("resume", "id"); ?> resume.</p>

<table id="sorted" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Company</th>
        <th>Years</th>
        <th>Text</th>

        <th class="not">Edit</th>
        <th class="not">Delete</th>
    </tr>
    </thead>

    <?php
    $resume = getAll("resume");
    if ($resume) foreach ($resume as $resumes):
        ?>
        <tr>
            <td><?php echo $resumes['id'] ?></td>
            <td><?php echo $resumes['title'] ?></td>
            <td><?php echo $resumes['company'] ?></td>
            <td><?php echo $resumes['years'] ?></td>
            <td><?php echo $resumes['text'] ?></td>


            <td><a href="edit-resume.php?act=edit&id=<?php echo $resumes['id'] ?>"><i
                            class="glyphicon glyphicon-edit"></i></a></td>
            <td><a href="save.php?act=delete&id=<?php echo $resumes['id'] ?>&cat=resume"
                   onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include "includes/footer.php"; ?>
				