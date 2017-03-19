<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","search");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (id, title, description, url)
VALUES ('$_POST[post_category]', '$_POST[post_title]', '$_POST[post_contents]', '$_POST[post_tags]')";
?>