<?php
    include "session.php"; 
    include "helpers/signup.php";
    
    $errors = [];

    if(isset($_POST['submit'])) {
        if(!$_POST['name']) {
            $errors[] = "Name is required.";
        }
        if(!$_POST['email']) {
            $errors[] = "Email is required.";
        }
        if(!$_POST['password']) {
            $errors[] = "Password is required.";
        }
        if($_POST['password'] != $_POST['confirm_password']){
            $errors[] = "You must confirm your password.";
        }

        if(empty($errors)) {
            if(!check_existing_email($_POST['email'])) {
                $user = save_registration($_POST['name'], $_POST['email'], $_POST['password']);

                if(!empty($user)) {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['name'] = $user['name'];

                    header("Location: feed");
                }
            }
        }

    }
?>
<?php include 'layouts/_header.php';?>
<main>
    <section id="signup" class="container">
        <div id="signup-form">
            <?php if(!empty($errors)) {?>
                <?php include "layouts/_errors.php" ?>
            <?php } ?>
            <h1>Register an account</h1>
            <form method="post">
                <div class="input-control">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="input-field input-md" value="" />
                </div>
                <div class="input-control">
                    <label for="name">Email: </label>
                    <input type="email" name="email" class="input-field input-md" value="" />
                </div>
                <div class="input-control">
                    <label for="name">Password: </label>
                    <input type="password" name="password" class="input-field input-md" value="" />
                </div>
                <div class="input-control">
                    <label for="name">Confirm Password: </label>
                    <input type="password" name="confirm_password" class="input-field input-md" value="" />
                </div>
                <div class="input-control">
                    <input type="submit" name="submit" class="btn btn-md" value="Register" />
                </div>
            </form>
        </div>
    </section>
</main>
<?php include 'layouts/_footer.php';?>