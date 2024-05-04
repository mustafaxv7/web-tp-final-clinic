<?php
   include("bdd.php");
   include("ajouter_pat.php");
   include("supprimer_patient.php");
   include("modifier_patient.php");
            
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" type="image/svg" sizes="32x32" href="./assets/img/header/logo.svg">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Insove | Admin </title>

  
  <style >
    .bg-primary {
      background: #F0F2F0;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #25bfcf, #F0F2F0);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #25bfcf, #F0F2F0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background: #F0F2F0; 
    background: -webkit-linear-gradient(to right, #25bfcf, #F0F2F0);
    background: linear-gradient(to right, #25bfcf, #F0F2F0);
    border-color: #c3c3c3;
}
.text-primary {
    color: #342ac1!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}

.col-md-4, .col-md-8 {
  margin-bottom: 8px;
}
#showcase button {
  text-decoration: none;
    padding: 10px 20px;
    border: 2px solid #25bfcf;
    border-radius: 30px;
    display: grid;
    place-items: center;
    color: #25bfcf;
}

#showcase button:hover {
  opacity: 0.9;
    scale: 1.1;
    transform: all 0.4s;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
   
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;">  <img src="./assets/img/header/logo.svg" alt="clinc's logo"> </h3>
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;">  Welcome Admin </h3>
    <div class="row">
        

  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">View Patients</a>
      <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
      <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">Add Patient</a>
      <a class="list-group-item list-group-item-action" href="#list-modify" id="list-ddoc-list" role="tab" data-toggle="list" aria-controls="home">Modify Patient</a>
      <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list"  role="tab" data-toggle="list" aria-controls="home">Delete Patient</a>
     
    </div><br>
    <section id="showcase">
      <div class="content">
          <a href="./login.php"><button name="logout">Logout</button></a>
      </div>
  </section>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    
    <div class="tab-content" id="nav-tabContent" style="width: 980px;">
      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="" >
              <div class="row">
               <div class="col-sm-4">
                  <div class="">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user-md fa-stack-1x fa-inverse"></i> </span>
                     <article>
                      <h4 class="StepTitle" style="margin-top: 5%;"></h4>
                      
                      
                      <p class="links cl-effect-1">
                        <a href="#list-doc" onclick="clickDiv('#list-doc-list')">
                         
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: -3%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Patient List</h4>
                      
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                          View Patients
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              

                <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-app-list')">
                          Search Patient
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-4" style="left: 13%;margin-top: 5%;">
                  <div class="">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-file-powerpoint-o fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;"></h4>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 18%;margin-top: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus-circle fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage Patients</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">Add Patient</a>
                        &nbsp|
                        <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                          Delete Patient
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>
              
              </div>
            </div>
      
                
      






      <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">
              

      <div class="col-md-8">
      <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="doctor_contact" placeholder="Enter Your Email" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search"></div></div>

        </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                  </tr>
                </thead>
                
          </table>
        <br>
      </div>
      </form>
    
    

      <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">
        <div class="col-md-8">
          <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> "  method="post">
            <div class="row">
            <div class="col-md-10"><input type="text" name="matricule" placeholder="Enter Your Matricule" class = "form-control"></div>
            <div class="col-md-2"><input type="submit" name="search" class="btn btn-primary" value="Search"></div></div>
          </form>
          
        </div>
          
            <table class="table table-hover">
              <thead>
                <tr>
                <th scope="col">ID</th>
                  <th scope="col">Matricule</th>
                  <th scope="col">Fullname</th>
                  <th scope="col">Email</th>
                  <th scope="col">phone</th>
                  <th scope="col">Registration Date</th>
                </tr>
                <?php include("affiche_appointements.php"); ?>
              </thead>
            </table>
         <br>
       </div>
      <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

       <div class="col-md-12">
  
        <div class="row">
        
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Service</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Appointment Date</th>
                  </tr>
                </thead>
              </table>
        <br>
      </div>
      </div>
      </div>




      <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

         <div class="col-md-8">
      <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="app_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="app_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
    <?php include("affiche_appointements.php");?>
    <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Service</th>
            <th scope="col">Doctor</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
  </table>
        <br>
      </div>

<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <form class="form-group"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="row">
          <div class="col-md-4"><label>Matricule:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="matricule" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>phone:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="phone" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>fullname:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="fullname" onkeydown="return alphaOnly(event);" required></div><br><br>
            
                  <div class="col-md-4"><label>Email:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="email" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="password" id="password"  required></div><br><br>
                  
                  
                  
                 <br><br>
                </div>
          <button type="submit" name="signup"  class="btn btn-primary">Add</button>
        </form>
      </div>
      <div class="tab-pane fade" id="list-modify" role="tabpanel" aria-labelledby="list-modify-list">
              <form class="form-group"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="row">
                  <div class="col-md-4"><label>Matricule:</label></div>
                          <div class="col-md-8"><input type="text" class="form-control" name="matricule" onkeydown="return alphaOnly(event);" required></div><br><br>
                          <div class="col-md-4"><label>phone:</label></div>
                          <div class="col-md-8"><input type="text" class="form-control" name="phone" onkeydown="return alphaOnly(event);" required></div><br><br>
                          <div class="col-md-4"><label>fullname:</label></div>
                          <div class="col-md-8"><input type="text" class="form-control" name="fullname" onkeydown="return alphaOnly(event);" required></div><br><br>
                    
                          <div class="col-md-4"><label>Email:</label></div>
                          <div class="col-md-8"><input type="email"  class="form-control" name="email" required></div><br><br>
                          <div class="col-md-4"><label>Password:</label></div>
                          <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="password" id="dpassword"  required></div><br><br>
                        
                        <br><br>
                        </div>
                <button type="submit" name="modify" class="btn btn-primary" value="Modify Patient">Modify</button>
              </form>
         </div>

      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <form class="form-group"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="row">
          
                  <div class="col-md-4"><label>Matricule:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="matricule" placeholder="Enter Your Matricule" required></div><br><br>
                  
                </div>
          <button type="submit" name="delete"  class="btn btn-primary" onclick="confirm('do you really want to delete?')">Delete</button>
        </form>
      </div>


       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>

       <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">

         <div class="col-md-8">
      <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="fullname" placeholder="Fullname" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="search" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                
              </table>
        <br>
      </div>



    </div>
  </div>
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>