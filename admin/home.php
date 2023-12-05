<?php
include "includes/header.php";
?>
<table class="table table-striped">
    <tr>
        <th class="not">Table</th>
        <th class="not">Entries</th>
    </tr>

    <tr>
        <td><a href="about.php">About</a></td>
        <td><?= counting("about", "id") ?></td>
    </tr>

    <tr>
        <td><a href="admins.php">Admins</a></td>
        <td><?= counting("admins", "id") ?></td>
    </tr>

    <tr>
        <td><a href="gallery.php">Gallery</a></td>
        <td><?= counting("gallery", "id") ?></td>
    </tr>

    <tr>
        <td><a href="resume.php">Resume</a></td>
        <td><?= counting("resume", "id") ?></td>
    </tr>

    <tr>
        <td><a href="skills.php">Skills</a></td>
        <td><?= counting("skills", "id") ?></td>
    </tr>

    <tr>
        <td><a href="social.php">Social</a></td>
        <td><?= counting("social", "id") ?></td>
    </tr>
</table>
<?php include "includes/footer.php"; ?>
			