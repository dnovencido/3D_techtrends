<div id="form-blog">
    <form method="post" enctype="multipart/form-data">
        <div class="input-control">
            <label for="name">Title: </label>
            <input type="text" name="title" class="input-field input-sm" value="" />
        </div>
        <div class="input-control">
            <label for="category">Category:</label>
            <select name="category_id" id="category" class="input-field input-sm">
                <option value="">--- Select Category ---</option>
            </select>
        </div>
        <div class="input-control">
            <textarea id="editor" name="body" class="input-field input-sm"></textarea>
        </div>
        <div class="input-control">
            <label for="category">Thumbnail</label>
            <input type="file" name="thumbnail" accept="image/*" class="input-field input-sm" />
            <input type="hidden" value="" name="thumbnail">
        </div>
        <div class="input-control">
            <label for="category">Status</label>
            <select name="status_id" id="category" class="input-field input-sm">
                <option value="publish">Publish</option>
                <option value="draft" selected>Draft</option>
            </select>
        </div>
        <div class="input-control">
            <input type="submit" name="submit" class="btn btn-md" value="Save" />
        </div>
    </form>
</div>