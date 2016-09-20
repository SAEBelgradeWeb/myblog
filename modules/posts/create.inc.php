<?php
if(isset($_POST['title'])) {
$title = $_POST['title'];
$content = $_POST['content'];
$user_id = $_POST['users'];
$category_id = $_POST['category'];

mysqli_query($conn, "INSERT INTO posts SET title='$title', content='$content', user_id='$user_id', category_id = '$category_id'");
    //$modules = $_GET['module']
    header("Location: /index.php?module=$module&action=read");
}
?>

<form action="" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
    </div>


    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" id="category" class="form-control">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM categories");
            while($row = mysqli_fetch_assoc($query)):   ?>
                <option value="<?= $row['id'] ?>"><?= $row['title'] ?> </option>
            <?php endwhile; ?>

        </select>
    </div>

    <div class="form-group">
        <label for="users">Author</label>
        <select name="users" id="users" class="form-control">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM users");
            while($row = mysqli_fetch_assoc($query)):   ?>
                <option value="<?= $row['id'] ?>"><?= $row['name'] ?> </option>
            <?php endwhile; ?>

        </select>
    </div>

    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
    </div>

</form>