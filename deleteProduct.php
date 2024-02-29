<?php 
    $inp = file_get_contents('productsList.json');
    $tempArray = json_decode($inp);
    $count = count($tempArray);
    $slno = $count + 1;
    // $data = array("productId"=>"PDT".$slno,"productName"=>$_POST['productName'], "productCategory"=>$_POST['productCategory'], "productCount"=>$_POST['productCount'], "productColor"=>$_POST['productColor'],  "productPrice"=>$_POST['productPrice'], "salePrice"=>$_POST['salePrice']);
    // $inp = file_get_contents('productsList.json');
    // $tempArray = json_decode($inp);
    // array_push($tempArray, $data);
    // $jsonData = json_encode($tempArray);
    // file_put_contents('productsList.json', $jsonData);
    // echo 'added';

    // $productId = $_POST['productId'];
    // echo $productId;

    for($x=0;$x<$count;$x++){
        $result = json_encode($tempArray[$x]);
        $newResult = json_decode($result, true);
        if($newResult['productId'] == $_POST['productId']){
            $data = \array_diff($newResult, [$newResult['productId']]);
            // $tempArray = json_decode($inp);
            // array_push($tempArray, $data);
            // $jsonData = json_encode($tempArray);
            file_put_contents('productsList.json', $newResult);
        }
    }
?>