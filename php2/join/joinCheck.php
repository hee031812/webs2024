<?php
    include "../connect/connect.php";

    // 비동기 방식

    $type = $_POST['type'];
    $jsonResult = "bad";

    if($type == "isIdCheck"){
        $youId = $connect -> real_escape_string(trim($_POST['youId']));
        $sql = "SELECT youId FROM myMembers WHERE youId = '{$youId}'";
    }
    if($type == "isEmailCheck"){
        $youId = $connect -> real_escape_string(trim($_POST['youEmail']));
        $sql = "SELECT youEmail FROM myMembers WHERE youEmail = '{$youEmail}'";
    }
    $result = $connect -> query($sql);
    if($result -> num_rows == 0){
        $jsonResult = "good";
    }
    echo json_encode(array("result" => $jsonResult));
?>