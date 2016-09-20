<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM posts WHERE id = '$id'");
$post = mysqli_fetch_assoc($query);

if(isset($_POST['title'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_POST['users'];
    $category_id = $_POST['category'];

    mysqli_query($conn, "UPDATE posts SET title='$title', content='$content', user_id='$user_id', category_id = '$category_id' WHERE id='$id'");
    header("Location: /index.php?module=$module&action=read"); //redirekcija na read!
}
?>

<form action="" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="<?= $post['title'] ?>">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?= $post['content'] ?></textarea>
    </div>


    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" id="category" class="form-control">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM categories");
            while($row = mysqli_fetch_assoc($query)):   ?>
                <?php $selected = ($post['category_id'] == $row['id'])? "selected" : ""; ?>
                <option value="<?= $row['id'] ?>" <?= $selected ?>><?= $row['title'] ?> </option>
            <?php endwhile; ?>

        </select>
    </div>

    <div class="form-group">
        <label for="users">Author</label>
        <select name="users" id="users" class="form-control">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM users");
            while($row = mysqli_fetch_assoc($query)):   ?>
                <?php $selected = ($post['user_id'] == $row['id'])? "selected" : ""; ?>
                <option value="<?= $row['id'] ?>" <?= $selected ?>><?= $row['name'] ?> </option>
            <?php endwhile; ?>

        </select>
    </div>

    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
    </div>

</form>