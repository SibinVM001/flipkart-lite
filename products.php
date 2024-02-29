<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="images/logo/favicon-16x16.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="mainDiv pb-5">
        <h5>Products</h5>
        <div class="mainContainer">
            <div class="productsContainer sticky-top">
                <input type="text" class="productSearch" placeholder="Search by product name">
                <select name="category" id="categorySearch" class="categorySearch">
                    <option value="shirts">Category</option>
                </select>
                <select name="price" id="priceSearch" class="priceSearch">
                    <option value="price">Price</option>
                </select>
                <button class="btn btn-primary addProductsBtn" data-bs-toggle="modal" data-bs-target="#addProductModal"><i class="fa-solid fa-plus"></i> Add Product</button>
                <!-- Modal -->
                <div class="modal fade" id="addProductModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-4">
                                    <p>Sl No.</p>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-7">
                                    <p>1</p>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p>Product Name</p>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="productName" id="productName">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p>Product Category</p>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-7">
                                    <select name="productCategory" id="productCategory">
                                        <option value="shirts">Shirts</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p>Product Count</p>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="productCount" id="productCount">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p>Product Color</p>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="productColor" id="productColor">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p>Product Price</p>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="productPrice" id="productPrice">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p>Sale Price</p>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="salePrice" id="salePrice">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-7">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                                    <button id="addProductBtn" type="button" class="btn btn-primary" data-bs-dismiss="modal">Add Product</button>    
                                </div>
                            </div>
                            
                        </div>
                        
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="tableContainer pb-5">
                <table class="table table-hover pb-5">
                    <thead>
                        <th>Sl No.</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>   
                        <th>Status</th>     
                        <th>Discount</th>  
                        <th>Publish</th>    
                        <th>Delete</th>              
                    </thead>
                    <?php
                        $inp = file_get_contents('productsList.json');
                        $tempArray = json_decode($inp);
                        $count = count($tempArray);
                        

                        for($x=0;$x<$count;$x++){
                            $slno = $x + 1;
                            $result = json_encode($tempArray[$x]);
                            $newResult = json_decode($result, true);
                            $discount = $newResult['productPrice'] - $newResult['salePrice'];
                            echo "<tr>
                                    <th>".$slno."</th>
                                    <td>".$newResult['productId']."</td>
                                    <td>".$newResult['productName']."</td>
                                    <td>".$newResult['productCategory']."</td>
                                    <td>".$newResult['salePrice']."</td>
                                    <td>".$newResult['productCount']."</td>
                                    <td></td>
                                    <td>".$discount."</td> 
                                    <td style='text-align:center'><a href='#'><i class='fa-solid fa-upload'></i></a></td>
                                    <td id='del".$newResult['productId']."' style='text-align:center'><a href='#'><i class='fa-solid fa-trash'></i></a></td>                          
                                </tr>";
                            echo "<script>document.getElementById('del".$newResult['productId']."').addEventListener('click',()=>{
                                $.ajax({
                                    url:'deleteProduct.php',
                                    type:'POST',
                                    data:{'productId':'".$newResult['productId']."'},
                                    success:function(res){
                                        alert(res)
                                    }
                                })
                            })</script>";
                        }
                    ?>
                </table>
            </div>
        </div>
        
    </section>


    
    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    document.getElementById('addProductBtn').addEventListener('click',()=>{
        $.ajax({
            url:'addProduct.php',
            type:'POST',
            data:{"productName":document.getElementById('productName').value,
                "productCategory":document.getElementById('productCategory').value,
                "productCount":document.getElementById('productCount').value,
                "productColor":document.getElementById('productColor').value,
                "productPrice":document.getElementById('productPrice').value,
                "salePrice":document.getElementById('salePrice').value
            },
            success:function(res){
                window.location.href = '/products.php'
            }
        })
    })
    
</script>