<h3>Upload new avatar</h3>
<?php
    function mime_to_extension($mimes, $mime) {
        foreach ($mimes as $extension => $m) {
            if ($m === $mime) {
                return $extension;
            }
        }
        return FALSE;
    }

    if ($db->isLoggedIn() && isset($_FILES['avatar'])) {
        echo "Service under-construction";
        $cmd = 'file --mime-type --brief ' . $_FILES['avatar']['tmp_name'];
        $mime = trim(`$cmd`);
        if ($extension = mime_to_extension($CONFIG['image_info'], $mime)) {
            $me = $_SESSION['user'];
            $new_path = $CONFIG['path']['home'] . '/' . $CONFIG['path']['profileimgs'] . '/' . $me->id . '.' . $extension;
            move_uploaded_file($_FILES['avatar']['tmp_name'], $new_path);
        }
        else{
            echo "Unable to upload file";
        }
    }
?>
<form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>?p=new_avatar" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label> <input type="file" name="avatar" id="file"/> <br/>
    <input type="submit" name="submit" value="Submit" />
</form>
