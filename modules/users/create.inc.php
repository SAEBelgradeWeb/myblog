<?php
if(isset($_POST['name'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

    mysqli_query($conn, "INSERT INTO users SET name='$name', email='$email', password='$password'");
    header("Location: /index.php?module=$module&action=read"); //redirekcija na read!
}
?>

<form action="" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>


    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
    </div>

</form>