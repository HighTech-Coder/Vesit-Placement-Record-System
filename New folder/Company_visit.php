<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html>
    
<head>
    <title>VESIT Login Second Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<style>
  
  html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #ffffff ;
       
    }
     body {
  background-color: #ffffff;
  }
    .navbar-form{
    margin-right: 0;
    margin-left: 0;
    border: 0;
    }
    .navbar-default {
    background-color: #f1da09;
    height:50px;
    font-size: 1.5rem;
}
.card
{
    border-radius:15px;
    box-shadow:3px 5px 15px -5px rgba(0,0,0.3,0.5);
}
.card-text
{
display:flex;
justify-content:space-around;
}
i
{
    color:green;
} 
</style>
</head>
<body>
    
    <nav class="navbar-default  navbar-expand-lg navbar-light">
          
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                
                <div class="navbar-nav ml-auto">
                
                   
                    <ul id="menu" >
                        <a href="Firstpage.php" class="tab">Home  </a>
                        <a class = "tab">Events </a> 
                        <a class = "tab">Statistics </a> 
                        <a href="viewinsert.php" class = "tab">Records </a>  
                        <a class = "tab">Contact </a> 
                      <a href="logout.php" class = "tab">Logout</a>
                      </ul>
                </div>      
            </div>
        </nav>
<!--company display--->
<div class="container" style="margin-top:15px;">
<div class="row" style="margin-bottom:20px">
<div class="col-6 col-md-4" >
            <div class="card">
              <div class="card-body">
                <h5 class="card-title" style="color:blue">JP Morgan & Chase Co.</h5>
                <p class="card-text"> Date Visited: 12/02/2020<br>
                                     Intake: 45<br>
                                     Package: 14 L.P.A
                                
                    <img src="https://media.cdn.gradconnection.com/uploads/f754325c-7f7c-4bd5-af57-804c3dac8524-JPMORGAN_CHASE__CO_LOGO.png" style="width:100px;height:70px">
                </p>
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash" aria-hidden="true" style="color:red;float:right"></i></a>
              </div>
            </div>
  </div>
  <div class="col-6 col-md-4">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title" style="color:blue">Accenture</h5>
                <p class="card-text">Date Visited: 01/02/2020<br>
                                     Intake: 65<br>
                                     Package: 10 L.P.A
                    <img src="https://www.accenture.com/t20200701T040724Z__w__/us-en/_acnmedia/Accenture/Redesign-Assets/DotCom/Images/Global/Hero/12/Accenture-Logo-768x768.jpg" style="width:100px;height:70px">
                </p>
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash" aria-hidden="true" style="color:red;float:right"></i></a>
              </div>
            </div>
  </div>
  <div class="col-6 col-md-4">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title" style="color:blue">Infoysys</h5>
                <p class="card-text">Date Visited: 01/02/2020<br>
                                     Intake: 85<br>
                                     Package: 7 L.P.A
                    <img src="https://1000logos.net/wp-content/uploads/2020/08/Infosys-Logo.png" style="width:100px;height:70px">
                </p>
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash" aria-hidden="true" style="color:red;float:right"></i></a>
              </div>
            </div>
  </div>
</div>
<div class="row" style="margin-bottom:20px">
<div class="col-6 col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title" style="color:blue">TCS</h5>
                <p class="card-text"> Date Visited: 12/02/2020<br>
                                     Intake: 45<br>
                                     Package: 14 L.P.A
                                
                    <img src="https://pbs.twimg.com/profile_images/1319550226575716352/dPLzK52V.jpg" style="width:100px;height:70px">
                </p>
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash" aria-hidden="true" style="color:red;float:right"></i></a>
              </div>
            </div>
  </div>
  <div class="col-6 col-md-4">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title" style="color:blue">Capgemini</h5>
                <p class="card-text">Date Visited: 01/02/2020<br>
                                     Intake: 65<br>
                                     Package: 10 L.P.A
                    <img src="https://capgemini.github.io/images/logo-square.png" style="width:100px;height:70px">
                </p>
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash" aria-hidden="true" style="color:red;float:right"></i></a>
              </div>
            </div>
  </div>
  <div class="col-6 col-md-4">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title" style="color:blue">L&T Infotech</h5>
                <p class="card-text">Date Visited: 01/02/2020<br>
                                     Intake: 85<br>
                                     Package: 7 L.P.A
                    <img src="https://prepinsta.com/wp-content/uploads/2019/01/LT-Infotech-Preparation-course-PrepInsta-1024x695.png" style="width:100px;height:70px">
                </p>
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash" aria-hidden="true" style="color:red;float:right"></i></a>
              </div>
            </div>
  </div>
</div>
</div>
<!--company dispaly ends--->
        
                
           
</body>
</html>
