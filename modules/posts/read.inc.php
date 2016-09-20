<br>
<a href="/index.php?module=<?= $module ?>&action=create" class="btn btn-primary">Create new +</a>

<table class="table table-stripped">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Date</th>
        <th>Actions</th>
    </tr>

    <?php
    $sql = "SELECT posts.*, users.name as 'author', categories.title as 'category' FROM posts 
            LEFT JOIN users ON posts.user_id = users.id 
            LEFT JOIN categories ON posts.category_id = categories.id 
            ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)):
    ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['title']; ?></td>
        <td><?= $row['author']; ?></td>
        <td><?= $row['category']; ?></td>
        <td><?= date("d. F Y H:i", strtotime($row['date'])); ?></td>
        <td>
            <a href="#" class="btn btn-primary">Edit</a>  <a href="/index.php?module=<?= $module ?>&action=delete&id=<?= $row['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>