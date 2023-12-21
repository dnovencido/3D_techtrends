<?php
    require "db/db.php";

    function validate_form_blog($title, $body, $category_id, $thumbnail, $thumbnail_tmp_name) {
        $validation_errors = [];

        if(!$title) {
            $validation_errors[] = "Title is required.";
        }

        if(!$body) {
            $validation_errors[] = "The body of the blog is required.";
        }

        if(!$thumbnail && !$thumbnail_tmp_name) {
            $validation_errors[] = "The thumbnail of the blog is required.";
        }

        if(!empty($title) && strlen($title < 20)) {
            $validation_errors[] = "The title of the blog must have atleast 20 characters.";
        }

        if(!empty($body) && str_word_count($body) < 20) {
            $validation_errors[] = "The body of the blog must have atleast 20 words.";
        }

        if(empty($category_id)) {
            $validation_errors[] = "Category is required.";
        }

        return $validation_errors;
    }

    function save_blog($title, $body, $user_id, $category_id, $status, $thumbnail, $id=null) {
        global $conn;
        $flag = false;

        $date_created = date("Y-m-d H:i:s");
        if($id == null) 
            $query = "INSERT INTO `blogs` (`user_id`, `category_id`, `title`, `body`, `status`, `thumbnail`, `created_at`) VALUES ('".$conn->real_escape_string($user_id)."', '".$conn->real_escape_string($category_id)."', '".$conn->real_escape_string($title)."', '".$conn->real_escape_string($body)."', '".$conn->real_escape_string($status)."', '".$conn->real_escape_string($thumbnail)."', '".$date_created."')";
        else {
            $last_updated = date('Y-m-d H:i:s');
            $query = "UPDATE `blogs` as `b` SET `b`.`title` = '".$conn->real_escape_string($title)."', `b`.`body` = '".$conn->real_escape_string($body)."', `b`.`thumbnail` = '".$conn->real_escape_string($thumbnail)."', `b`.`category_id` = '".$conn->real_escape_string($category_id)."', `b`.`status` = '".$conn->real_escape_string($status)."', `b`.`updated_at` = '".$last_updated."' WHERE `b`.`id` = '".$conn->real_escape_string($id)."'";
        } 

        if ($conn->query($query)) {
            $flag = true;
        }
        
        return $flag;    
    }

    function get_all_blogs($filter = [], $pagination = []) {
        global $conn;
        $blogs= [];
       
        $query = "SELECT `c`.`name` as `category`, `b`.`id`, `b`.`title`, `b`.`body`, `b`.`thumbnail`, `u`.`name` as `author`, `b`.`status`, `b`.`created_at`, `b`.`updated_at` 
                FROM `blogs` as `b` 
                INNER JOIN `categories` as `c` ON `c`.id = `b`.`category_id` 
                INNER JOIN `users` as `u` ON `u`.`id` = `b`.`user_id`";

        if(!empty($filter)) {
            $query .= " WHERE ";

            $conditions = [];
            $search = [];
            
            foreach ($filter as $column => $value) {
                if (is_array($value) && $column === "search") {
                    foreach ($value[0] as $column_search => $value_search) {
                        $search[] = "{$value_search} LIKE '%{$conn->real_escape_string($value[1])}%'";
                    }
                } else {
                    $conditions[] = "$column = '{$conn->real_escape_string($value)}'";
                }
            }

            $where_clause = [];
            
            if(!empty($conditions))
                $where_clause[] = implode(' AND ', $conditions);

            if(!empty($search))
                $where_clause[] = implode(' OR ', $search);

            $query .= implode(' AND ', $where_clause);

        }
        
        $query .= " ORDER BY `b`.`id` DESC";

        if (!empty($pagination)) {
            $query .= " LIMIT {$pagination['offset']}, {$pagination['total_records_per_page']}";
        }

        if ($result = $conn->query($query)) {
            $blogs = $result->fetch_all(MYSQLI_ASSOC);
        }

        return $blogs;
    }  

    function view_blog($id) {
        global $conn;
        $blog = [];

        $query = "SELECT `c`.`name` as `category`, `c`.`id` as `category_id`, `b`.`id`, `b`.`title`, `b`.`body`, `b`.`status`, `b`.`thumbnail`, `b`.`created_at`, `u`.`name` as `author` 
                FROM `blogs` as `b` 
                INNER JOIN `categories` as `c` ON `c`.id = `b`.`category_id` 
                INNER JOIN `users` as `u` ON `u`.`id` = `b`.`user_id`
                WHERE `b`.`id` = $id";
                
        if ($result = $conn->query($query)) {
            $blog = $result->fetch_array(MYSQLI_ASSOC);
        }

        return $blog;
    }

    function display_blog_preview($field, $length) {
        return substr($field, 0, $length);
    }

    function delete_blog($current_user, $id) {
        global $conn;
        $flag = false;

        $query = "SELECT * FROM `blogs` WHERE `blogs`.`id` = '".$conn->real_escape_string($id)."'";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            $blog = $result->fetch_array(MYSQLI_ASSOC);

            $query = "DELETE FROM `blogs` WHERE `blogs`.`id` = '".$blog['id']."'";

            if ($conn->query($query) && $current_user == $blog['user_id']) {
                $flag = true;
            }
        }

        return $flag;
    }

    function get_total_number_records() {
        global $conn;
        $total = 0;

        $query = "SELECT * FROM `blogs`";

        if ($result = $conn->query($query)) {
            $total = $result->num_rows;
        }
    
        return $total;
    }
?>