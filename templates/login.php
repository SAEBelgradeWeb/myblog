<?php
if(isset($_POST['submitted'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    $result = mysqli_fetch_assoc($query);
    if ($result) {
        $_SESSION['user'] = $result;
        header('Location: /');
    } else {
        echo "Not valid credentials";
    }

}

?>

<form action="" method="POST">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <button type="submit" name="submitted">Login</button>


</form>