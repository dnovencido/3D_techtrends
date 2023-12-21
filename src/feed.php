<?php 
    include "session.php"; 
    include "helpers/require_login.php";
    include "helpers/blog.php";
    include "helpers/category.php";

    $categories = get_categories();
    $filter = [];

    $filter['status'] = 'published';
       
    if(array_key_exists("category_id", $_GET)) {
        $filter['category_id'] = $_GET['category_id'];
    } 

    if(array_key_exists("query", $_GET)) {
        if(!empty($_GET['query'])) {
            $filter['search'] = [['title', 'body'], $_GET['query']];
        }
    }
     
    $blogs = get_all_blogs($filter);
?>

<?php include 'layouts/_header.php';?>
<main>
    <section id="account" class="container">
        <?php if(isset($_SESSION['flash_message'])) { ?>
            <?php include "layouts/_messages.php"; ?>
        <?php } ?>
        <?php include "layouts/_account-header.php"; ?>
        <div id="account-blog-list">
            <div id="blog-navigation">
                <?php include "layouts/_account-navigation.php" ?>
            </div>
            <div id="blog-container">
                <?php if(!empty($blogs)) { ?>
                    <div id="blog-item-container">
                        <?php foreach ($blogs as $row) { ?>
                        <div class="blog-item card">
                            <div class="blog-item-preview">
                                <img src="data:image/jpeg;base64,<?= base64_encode($row['thumbnail']) ?>" alt="" class="featured-image">
                            </div>
                            <div class="blog-item-description">
                                <div class="blog-item-category">
                                    <span class="blog-category"><?= $row['category'] ?></span>
                                </div>
                                <div class="blog-item-heading">
                                    <h4>
                                        <a href="view?id=<?=$row['id']?>"><?= display_blog_preview($row['title'], 50) ?></a>
                                    </h4>
                                </div>
                                <div class="blog-item-info">
                                    <p class="author"><?= $row['author'] ?></p>
                                </div>
                                <div class="blog-item-content">
                                    <p>
                                        <?= display_blog_preview(strip_tags($row['body']), 155) . ' ...' ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div id="no-items">
                        <p>No blog(s) to display...</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>
<?php include 'layouts/_footer.php';?>