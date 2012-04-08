<?php
    echo Post::postForm($db)->render();
    if (isset($_POST['post'])) {
        $new_post = mysql_real_escape_string($_POST['post']);
        $u = new currentUser();
        $db->insertPosts($new_post,$u->getUser());
        $arr =  $db->getPosts();
        for ($i = 0; $i < sizeof($arr); $i++) {
            print $arr[$i]->render();
        }
    } else {
        $arr = $db->getPosts();
        for($j = 0; $j < sizeof($arr); $j++) {
            print $arr[$j]->render();
        }
    }    
?>
