<?php
    include "session.php"; 
    include "helpers/require_login.php";
?>
<?php include 'layouts/_header.php';?>
<main>
    <section id="account" class="container">
        <?php include "layouts/_account-header.php"; ?>
        <div id="account-blog-list">
            <div id="blog-navigation">
                <?php include "layouts/_account-navigation.php" ?>
            </div>
            <div id="blog-container">
                <div class="blog-item card">
                    <div class="blog-item-preview">
                        <img src="" alt="" class="featured-image">
                    </div>
                    <div class="blog-item-description">
                        <div class="blog-item-category">
                            <span class="blog-category"></span>
                        </div>
                        <div class="blog-item-heading">
                            <h4>
                                <a href="#"></a>
                            </h4>
                        </div>
                        <div class="blog-item-info">
                            <p class="author"></p>
                        </div>
                        <div class="blog-item-content">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'layouts/_footer.php';?>