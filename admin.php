<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipkart | Admin</title>
    <link rel="shortcut icon" href="images/logo/favicon-16x16.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="adminPage">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="images/logo/favicon-32x32.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <div class="searchBar">
                        <div>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div> -->
                    <div class="navLinks">
                        <div>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">
                                        <i class="fa-solid fa-bell">
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            10
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </i>
                                        
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">
                                        <div class="adminImgContainer">
                                            <img src="images/adminImg.jpg" width="100%" alt="">
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    
                    </div>              
                </div>
            </div>
        </nav>
        <section class="dashborad">
            <ul>
                <li id="dashboard" class="dashboradActive"><a href="#" class="dashboradActiveFont"><i class="fa-solid fa-gauge-high"></i> Dashborad</a></li>
                <li id="products"><a href="#"><i class="fa-solid fa-bag-shopping"></i> Products</a></li>
                <li><a href="#"><i class="fa-solid fa-list-ul"></i>Category</a></li>
                <li id="customers"><a href="#"><i class="fa-solid fa-users"></i> Customers</a></li>
                <li><a href="#"><i class="fa-solid fa-compass"></i> Orders</a></li>
                <li><a href="#"><i class="fa-solid fa-gift"></i> Coupons</a></li>
                <li><a href="#"><i class="fa-solid fa-user-group"></i> Our Staffs</a></li>
                <li><a href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
            </ul>
            <div class="logouBtnContainer">
                <button class="btn btn-primary"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
            </div>
            
        </section>
        
    </section>
    <section class="iframeContainer">
        <iframe id="iframe" src="dashboard.php" class="iframeClass" frameborder="0"></iframe>
    </section>
    

    

   
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    document.getElementById('dashboard').addEventListener('click',()=>{
        document.getElementById('customers').removeAttribute('class','dashboradActive')
        document.querySelector('#customers a').removeAttribute('class','dashboradActiveFont')
        document.getElementById('products').removeAttribute('class','dashboradActive')
        document.querySelector('#products a').removeAttribute('class','dashboradActiveFont')

        document.getElementById('dashboard').setAttribute('class','dashboradActive')
        document.querySelector('#dashboard a').setAttribute('class','dashboradActiveFont')
        document.getElementById('iframe').setAttribute('src','dashboard.php')
    })
    document.getElementById('products').addEventListener('click',()=>{
        document.getElementById('dashboard').removeAttribute('class','dashboradActive')
        document.querySelector('#dashboard a').removeAttribute('class','dashboradActiveFont')
        document.getElementById('customers').removeAttribute('class','dashboradActive')
        document.querySelector('#customers a').removeAttribute('class','dashboradActiveFont')

        document.getElementById('products').setAttribute('class','dashboradActive')
        document.querySelector('#products a').setAttribute('class','dashboradActiveFont')
        document.getElementById('iframe').setAttribute('src','products.php')
    })
    document.getElementById('customers').addEventListener('click',()=>{
        document.getElementById('dashboard').removeAttribute('class','dashboradActive')
        document.querySelector('#dashboard a').removeAttribute('class','dashboradActiveFont')
        document.getElementById('products').removeAttribute('class','dashboradActive')
        document.querySelector('#products a').removeAttribute('class','dashboradActiveFont') 
        
        document.getElementById('customers').setAttribute('class','dashboradActive')
        document.querySelector('#customers a').setAttribute('class','dashboradActiveFont')
        document.getElementById('iframe').setAttribute('src','customers.php')
    })
</script>