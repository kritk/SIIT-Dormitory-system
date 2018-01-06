<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootcss/bootstrap.min.css">

     <link rel="stylesheet" type="text/css" href="css/login.css">

  </head>
<body>
    <!--Jumbotron Section-->

              <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-3">SIIT Dormitory Management System</h1>
                  </div>
              </div>

              <!--Nav bar go here -->
              <nav class="navbar navbar-expand-lg navbar-light ">

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Home</a>
                    </li>
                   
                    <li class="nav-item">
                      <a class="nav-link" href="contract.html">Create Contract</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="booking.html">Create Booking</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="report.html">Reporting Problem</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact us</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Staff login <span class="sr-only">(current)</span></a>
                    </li>
                     
                    
                  </ul>
                </div>
              </nav>



<div class="backgroundmain">

<!-- Login form -->
      <div class="wrapper">
          <form class="form-signin" action="login.php" method="post">       
            <h2 class="form-signin-heading">Admin Login</h2>
            <input type="text" class="form-control" name="username" placeholder="Email Address" required autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required/>
            <small>Your password or username is incorrect, Please try again</small>      
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
          </form>
      </div>

  
     
   




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>
<div class="bottom">
            <h5 class="bottommain"> All Rights Reserved </h5>
            <span class="bottomquote">Property Management Division (SIIT Bangkadi)
              <br />
              Sirindhorn International Institute of Technology, Bangkadi Campus
              <br />
              200 Moo 5, Tivanond Rd., Bangkadi, A.Muang, Pathumthani 12000, THAILAND
              <br />
              TEL: (+66) 0-2501- 3505 ~ 20 ext. 4802, 4801
              <br />
              FAX: (+66) 0-2501- 3521</span>
</div>


</body>
</html>