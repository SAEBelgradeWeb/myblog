<?php

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM categories WHERE id = '$id'");
$post = mysqli_fetch_assoc($query);


if(isset($_POST['title'])) {
    $title = $_POST['title'];


    mysqli_query($conn, "UPDATE categories SET title='$title' WHERE id='$id'");
    header("Location: /index.php?module=$module&action=read"); //redirekcija na read!
}
?>

<form action="" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="<?= $post['title']?>">
    </div>

    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
    </div>

</form>