<div id="account-blog-menu">
    <h3>Welcome <?= $_SESSION['name'] ?>!</h3>
    <div id="search-blog">
        <form method="get" action="feed">
            <div id="form-search">
                <div id="search-field" class="input-control">
                    <input type="text" name="query" class="input-field input-xs" value="<?= (isset($_GET['query'])) ? $_GET['query'] : ''; ?>" placeholder="Search a blog" />
                </div>
                <div id="search-btn" class="input-control">
                    <input type="submit" name="submit" class="btn btn-sm" value="Search" />
                </div>
            </div>
        </form>            
    </div>
</div>