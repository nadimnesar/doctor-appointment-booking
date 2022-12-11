<?php

@include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['usermail']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        $query  = "SELECT name FROM user_form WHERE email = '$email' && password = '$pass'";
        $result2 = mysqli_query($conn, $query);
        $row = $result->fetch_assoc();

        $_SESSION['login_done'] = $row['name'];
        $_SESSION['login_done_id'] = $row['id'];
        header('location: index.php');
    } else {
        $error[] = 'Incorrect Password or Email.';
    }
};

?>

<?php

include('header.php');

?>

<section>

<div class="form-container">
    <form action="" method="post">
        <h3 class="title">Login Now</h3>
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            }
        }
        ?>
        <input type="email" name="usermail" placeholder="Enter your email" class="box" required>
        <input type="password" name="password" placeholder="Enter your password" class="box" required>
        <input type="submit" value="Login" class="form-btn" name="submit">
    </form>
</div>

</section>


<?php

include('footer.php');

?>