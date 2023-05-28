<?php

include('header.php');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    if ($pass != $cpass) {
        $error[] = 'Password Not Matched!';
    } else {
        $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            $error[] = 'User Already Exist!';
        } else {
            if ($pass != $cpass) {
                $error[] = 'Password Not Matched!';
            } else {
                $insert = "INSERT INTO user_form(email, password, user_type, name) VALUES('$email','$pass','$user_type','$name')";
                mysqli_query($conn, $insert);
                @header('location:login.php');
            }
        }
    }
};

?>

<section>

<div class="form-container2">
    <form action="" method="post">
        <h3>Signup Now</h3>
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            };
        };
        ?>
        <input type="text" name="name" required placeholder="Enter Your Name">
        <input type="email" name="email" required placeholder="Enter Your Email">
        <input type="password" name="password" required placeholder="Enter Your Password">
        <input type="password" name="cpassword" required placeholder="Confirm Your Password">
        <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="Signup" class="form-btn">
    </form>
</div>

</section>

<?php

include('footer.php');

?>