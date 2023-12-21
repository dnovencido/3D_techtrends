if(array_key_exists("query", $_GET)) {
        if(!empty($_GET['query'])) {
            $filter = [
                'title' => ['LIKE', $_GET['query']],
                'body' => ['LIKE', $_GET['query']]
            ];
        }
    }