<br>
<a href="/index.php?module=<?= $module ?>&action=create" class="btn btn-primary">Create new +</a>

<table class="table table-stripped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php
    $sql = "SELECT * FROM users";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)):
    ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td>
            <a href="/index.php?module=<?= $module ?>&action=update&id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>  <a href="/index.php?module=<?= $module ?>&action=delete&id=<?= $row['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>