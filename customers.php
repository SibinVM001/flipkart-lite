<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="images/logo/favicon-16x16.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="mainDiv">
        <h5>Customers</h5>
        <div class="customerContainer">
            <div class="customerSearchContainer">
                <input type="text" class="customerSearch" placeholder="Search by name  / email / phone">
            </div>
            <div class="tableContainer">
                <table class="table table-hover">
                    <thead>
                        <th>Sl No.</th>
                        <th>UserId</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Joining Date</th>   
                        <th>Actions</th>                    
                    </thead>
                    <?php
                        $inp = file_get_contents('data.json');
                        $tempArray = json_decode($inp);
                        $count = count($tempArray);
                        

                        for($x=0;$x<$count;$x++){
                            $slno = $x + 1;
                            $result = json_encode($tempArray[$x]);
                            $newResult = json_decode($result, true);
                            echo "<tr>
                                    <th>".$slno."</th>
                                    <td>".$newResult['userId']."</td>
                                    <td>".$newResult['name']."</td>
                                    <td>".$newResult['email']."</td>
                                    <td>".$newResult['phone']."</td>
                                    <td>".$newResult['joiningDate']."</td>  
                                    <td><a href='#'><i class='fa-solid fa-eye'></i></a> <a href='#'><i class='fa-solid fa-trash'></i></a></td>                          
                                </tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
        
    </section>
    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>