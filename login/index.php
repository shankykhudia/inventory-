<?php
 session_start();
  
   include("connection.php");
   include("function.php");

   $user_data = check_login($con);
?>
   Hello ,<?php echo $user_data['user_name']; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="index.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                <img src="Pinaack-Solutions.png" alt="Pinaack-Solutions" width="150" height="70">
                    <!--<span class="profession">Web developer</span>-->
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <!-- <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li> -->

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <!-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Resources</span>
                        </a>
                    </li> -->
                    <li class="nav-link">
                        <!-- <div class="dropdown"> -->
                        <a href="#">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">Employees</span>
                            <!-- <div class="dropdown-content">
                                <a href="#">Add Employees</a><br>
                                <a href="#">Show Employees</a> -->
                                
                        </a>
                        <!-- </div>
                      </div> -->
                    </li>

                    <li class="nav-link">
                        <!-- <div class="dropdown"> -->
                         <a href="#">
                            <i class='bx bx-data icon'></i>
                            <span class="text nav-text">Inventory</span>
                            <!-- <div class="dropdown-content">
                                <a href="#"><span>Add Inventory</span>
                                    <div class="dropdown-content">
                                        <a href="#">Add Laptop</a><br>
                                        <a href="#">Add Software</a>
                                    </div>
                                </a>
                                <br>
                                <a href="#">Show Inventory</a>
                            </div>  -->
                        </a>
                        <!-- </div>
                      </div> -->
                    </li>
        
    
                    

                    <li class="nav-link">
                        <a href="logout.php">
                            <i class='bx bx-power-off icon' ></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </li>

                    <!-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li> -->
                   
                </ul>
            </div>
         
            
               
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text"> <?php echo $user_data['user_name']; ?> Welcome To Pinaack Solutions<br></div>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>

