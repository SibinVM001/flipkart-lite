<?php
    $inp = file_get_contents('data.json');
    $tempArray = json_decode($inp);
    $count = count($tempArray);

    for($x=0;$x<$count;$x++){
        $result = json_encode($tempArray[$x]);
        $newResult = json_decode($result, true);
        if($newResult['email'] == $_POST['email']){
            if($newResult['password'] == $_POST['password']){
                session_start();
                $_SESSION['userId'] = $newResult['userId'];
                $_SESSION['name'] = $newResult['name'];
            }
            else{
                echo 'Incorrect Password';
            }
        }else{
            echo 'Incorrect Email';
        }
    }
?>