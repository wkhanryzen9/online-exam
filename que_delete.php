<?php

require 'conn.php';

$id = $_GET['id'];
$sql = "delete from que_paper where qid='$id'";

mysqli_query($conn, $sql);

header('location: QuestionList.php');