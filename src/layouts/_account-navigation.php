<?php
    if(!isset($_GET['category_id']))
        $_GET['category_id'] = "";

?>
<div class="blog-navigation-item">
    <div class="blog-navigation-item-header">
        Account
    </div>
    <div class="blog-navigation-item-menu">
        <ul>
            <li>
                <a href="/new">Create a Blog</a>
            </li>
            <li>
                <a href="/my-blogs">My Blogs</a>
            </li>
        </ul>
    </div>
</div>
<div class="blog-navigation-item">
    <div class="blog-navigation-item-header">
        Categories
    </div>
    <div class="blog-navigation-item-menu">
        <ul>
            <li>
                <a href="feed" class="<?= (empty($_GET['category_id']) && $_SERVER['REQUEST_URI'] == '/feed') ? "active" : ""; ?>">All</a>
            </li>
            <?php if(!empty($categories)) { ?>
                <?php foreach ($categories as $row) { ?>
                    <li>
                        <a href="feed?category_id=<?= $row['id'] ?>" class="<?= ($row['id'] == $_GET['category_id']) ? "active" : ""; ?>"><?= $row['name'] ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</div>