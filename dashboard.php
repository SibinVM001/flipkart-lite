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
        <h5>Dashboard Overview</h5>
        <div class="topCardsContainer row">
            <div class="topCards col-4" style="background-color: #0694A2;">
                <div style="text-align: center;">
                    <i class="fa-solid fa-layer-group"></i>
                    <p>Today Order</p>
                    <h2><i class="fa-solid fa-indian-rupee-sign"></i> 300</h2>
                </div>             
            </div>
            <div class="topCards col-4" style="background-color: #3F83F8;">
                <div  style="text-align: center;">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>This Month</p>
                    <h2><i class="fa-solid fa-indian-rupee-sign"></i> 4500</h2>
                </div>
            </div>
            <div class="topCards col-4" style="background-color: #0E9F6E;">
                <div  style="text-align: center;">
                    <i class="fa-solid fa-credit-card"></i>
                    <p>Total Order</p>
                    <h2><i class="fa-solid fa-indian-rupee-sign"></i> 16500</h2>
                </div>
            </div>
        </div>
        <div class="secondCardsContainer row">
            <div class="secondCards col-3"> 
                <div class="row">
                    <div class="col-4">
                        <div class="iconContainer">
                            <div class="icon" style="background-color: #FCD9BD;color:#D03801;">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div>
                            <p>Total Order</p>
                            <h4>127</h4>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="secondCards col-3"> 
                <div class="row">
                        <div class="col-4">
                            <div class="iconContainer">
                                <div class="icon" style="background-color: #C3DDFD;color:#1C64F2;">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div>
                                <p>Order Pending</p>
                                <h4>35</h4>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="secondCards col-3"> 
                <div class="row">
                        <div class="col-4">
                            <div class="iconContainer">
                                <div class="icon" style="background-color: #AFECEF;color:#2E929C;">
                                    <i class="fa-solid fa-truck"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div>
                                <p>Order Processing</p>
                                <h4>108</h4>
                            </div>
                        
                        </div>
                    </div>
            </div>
            <div class="secondCards col-3"> 
                <div class="row">
                        <div class="col-4">
                            <div class="iconContainer">
                                <div class="icon" style="background-color: #BCF0DA;color:#278F6D;">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div>
                                <p>Order Delivered</p>
                                <h4>95</h4>
                            </div>
                        
                        </div>
                    </div>
            </div>
        </div>

        <div class="recentOrders">
            <h5>Recent Orders</h5>
            <div class="tableContainer">
                <table class="table table-hover">
                    <thead>
                        <th>Sl No.</th>
                        <th>Order Time</th>
                        <th>Delivery Address</th>
                        <th>Phone</th>
                        <th>Payment Method</th>
                        <th>Order Amount</th>   
                        <th>Status</th>                    
                    </thead>
                    <?php
                        // $inp = file_get_contents('data.json');
                        // $tempArray = json_decode($inp);
                        // $count = count($tempArray);
                        

                        // for($x=0;$x<$count;$x++){
                        //     $slno = $x + 1;
                        //     $result = json_encode($tempArray[$x]);
                        //     $newResult = json_decode($result, true);
                        //     echo "<tr>
                        //             <th>".$slno."</th>
                        //             <td>".$newResult['userId']."</td>
                        //             <td>".$newResult['name']."</td>
                        //             <td>".$newResult['email']."</td>
                        //             <td>".$newResult['phone']."</td>
                        //             <td>".$newResult['joiningDate']."</td>  
                        //             <td><a href='#'><i class='fa-solid fa-eye'></i></a> <a href='#'><i class='fa-solid fa-trash'></i></a></td>                          
                        //         </tr>";
                        // }
                    ?>
                </table>
            </div>
        </div>
        
    </section>



</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>