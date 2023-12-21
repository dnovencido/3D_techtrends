<?php 
    include 'session.php'; 
    include 'helpers/require_login.php';
    include 'helpers/category.php';
    include 'helpers/status.php';
    include 'helpers/blog.php';

    $categories = get_categories();
    $status = get_status();

    if(isset($_POST['submit'])) {
        $errors = validate_form_blog($_POST['title'], $_POST['body'], $_POST['category_id'], $_POST['thumbnail'], $_FILES['thumbnail']['tmp_name']);
        if(empty($errors)) {
            $save_blog = save_blog($_POST['title'], $_POST['body'], $_SESSION['id'], $_POST['category_id'],  $_POST['status_id'], file_get_contents($_FILES['thumbnail']['tmp_name']));
            if($save_blog) {
                $_SESSION['flash_message'] = "You have successfully created a blog.";
                header("Location: feed");
            } else {
                $errors[] = "Could not create a blog post. Please try again later.";
            }
        }
    } else {
        $_POST = [
            'title' => '',
            'category_id' => '',
            'body' => '',
            'thumbnail' => '',
            'status_id' => '' 
        ];
    }
?>

<?php include 'layouts/_header.php';?>
<main>
    <section id="new-blog" class="container">
        <h3>New Blog</h3>
        <?php include "layouts/_form.php" ?>
    </section>
</main>
<?php include 'layouts/_footer.php';?>