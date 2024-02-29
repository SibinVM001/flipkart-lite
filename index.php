<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipkart | Shop Online</title>
    <link rel="shortcut icon" href="images/logo/favicon-16x16.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="images/logo/favicon-32x32.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="searchBar">
                    <div>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="navLinks">
                    <div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item" id="navLoginBtn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLogin">
                                    Login
                                </button>
                            </li>
                            <li class="nav-item" id="navSignupBtn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSignup">
                                    SignUp
                                </button>
                            </li>
                            <li class="nav-item" id="navLogoutBtn" style="display: none;">
                                <button type="button" class="btn btn-danger">
                                    logOut
                                </button>
                                <script>
                                    document.getElementById('navLogoutBtn').addEventListener('click',()=>{
                                        $.ajax({
                                            url:"logout.php",
                                            type:"GET",
                                            success:function(res){
                                                window.location.href = '/'
                                                document.getElementById('navLogoutBtn').style.display = 'none';
                                                document.getElementById('navLoginBtn').style.display = '';
                                                document.getElementById('navSignupBtn').style.display = '';
                                            }
                                        })
                                    })
                                </script>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>
                                        <?php 
                                            echo "<i class='fa-solid fa-user'></i> " . $_SESSION["name"];
                                            if($_SESSION['name'] != ''){
                                                echo "<script>
                                                document.getElementById('navLoginBtn').style.display = 'none';
                                                document.getElementById('navSignupBtn').style.display = 'none';
                                                document.getElementById('navLogoutBtn').style.display = '';
                                                </script>";
                                            }
                                        ?>
                                    </p>
                                </a>
                                
                            </li>
                            <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li> -->
                        </ul>
                    </div>
                   
                </div>              
            </div>
        </div>
    </nav>
    
    <!-- Modal login-->
        <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div style="text-align: center;">
                            <input type="email" name="email" id="loginEmail" placeholder="Enter Your Email"><br>
                            <input type="password" name="password" id="loginPassword" placeholder="Enter Your Password">
                            <div>
                                <button id="loginBtn" type="submit" class="btn btn-primary">Login</button>
                                <p>New User? <span><a href="#" data-bs-toggle="modal" data-bs-target="#modalSignup" data-bs-dismiss="modal" aria-label="Close">SignUp</a></span></p>
                                <p id="loginMsg"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modalOverlay">
            </div>
        </div>

    <!-- Modal signup-->
    <!-- <form action="signup.php" method="POST"> -->
        <div class="modal fade" id="modalSignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">SignUp</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div style="text-align: center;">
                            <input type="text" name="name" id="name" placeholder="Enter Your Full Name"><br>
                            <input type="email" name="email" id="email" placeholder="Enter Your Email"><br>
                            <input type="number" name="phone" id="phone" placeholder="Enter Your Mobile Number"><br>
                            <input type="password" name="password" id="password" placeholder="Enter Your Password"><br>
                            <input type="password" name="rePassword" id="rePassword" placeholder="Re-Enter Your Password">
                            <div>
                                <button id="signupBtn" type="submit" class="btn btn-primary">SignUp</button>
                                <p>Already a user? <span><a href="#" data-bs-toggle="modal" data-bs-target="#modalLogin" data-bs-dismiss="modal" aria-label="Close">Login</a></span></p>
                                <p id="signupMsg"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modalOverlay">
            </div>
        </div>
    <!-- </form> -->
    <script>
        document.getElementById('loginBtn').addEventListener('click',()=>{
            $.ajax({
                url:"login.php",
                type:"POST",
                data:{"email":document.getElementById('loginEmail').value,
                    "password":document.getElementById('loginPassword').value},
                success:function(res){
                    if(res == "Incorrect Password"){
                        document.getElementById('loginMsg').innerText = res
                    }
                    else if(res == "Incorrect Email"){
                        document.getElementById('loginMsg').innerText = res
                    }
                    else{
                        // window.location.href = '/'
                        document.getElementById('navLoginBtn').style.display = 'none';
                        document.getElementById('navSignupBtn').style.display = 'none';
                        document.getElementById('navLogoutBtn').style.display = '';
                    }
                }
            })
        })

        document.getElementById('signupBtn').addEventListener('click',()=>{
            $.ajax({
            url:"signup.php",
            type:"POST",
            data:{"name":document.getElementById('name').value,
                "email":document.getElementById('email').value,
                "phone":document.getElementById('phone').value,
                "password":document.getElementById('password').value},
            success:function(res){
                if(res == "email already exists, please login"){
                    document.getElementById('signupMsg').innerText = res
                }
                if(res == "added"){
                    document.getElementById('signupMsg').innerText = ''
                    window.location.href = '/'
                }
            }
        })
        })
        
    </script>


    <!-- <h1>Hello</h1><span id='userName'></span>
    <form action="/" method="GET">
    <input type="text" id="id" name="id" placeholder="id">
    <button type="submit">Submit</button>
    </form>
    <?php 
        // $url = "https://reqres.in/api/products";
        // $request_url = $url . '/3';
        // $curl = curl_init($request_url);
        // $response = curl_exec($curl);
        // curl_close($curl);
        // $data = json_decode($response, true);
        // echo $data['name'];
        // $json = file_get_contents('data.json');
        // $data = json_decode($json);
        // var_dump($data[0]);
    ?> -->
    <!-- <script>
        setTimeout(()=>{
            $('#modalSignup').modal('toggle');
        },2000)
    </script> -->
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>