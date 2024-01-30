<?php

$conn = mysqli_connect("172.16.0.103","root","Test123!","webtest",3306);

$sql = "insert into items (title, description, created) value ('{$_POST['title']}','{$_POST['description']}', now())";

mysqli_query($conn,$sql);
if ($result=== false){
    echo 'error occured.';
    error_log(mysqli_error($conn));
}
echo 'Succeed. <a href="index.php"> back</a>';

?>
