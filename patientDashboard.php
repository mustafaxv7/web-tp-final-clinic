<?php
  include("bdd.php");
  include("makeAnAppointement.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" sizes="32x32" href="./assets/img/header/logo.svg">
    <link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
	   <!-- Bootstrap CSS -->
    
	   <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

	
	
    <title>Insove | User </title>
</head>
<body>


  <style >
    .bg-primary {
    /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
    background: #F0F2F0;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #25bfcf, #F0F2F0);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #25bfcf, #F0F2F0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}

.col-md-4, .col-md-8{
   margin-bottom: 16px;
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

  </head>
  <style type="text/css">
  </style>
  <body style="padding-top:50px;">
    <div class="container-fluid" style="margin-top:50px;">
       <h3 style="margin-left: 40%; padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;">
          <img src="./assets/img/header/logo.svg" alt="clinc's logo">
       </h3>
       <h3 style="margin-left: 40%; padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome </h3>
       <div class="row">
          <div class="col-md-4" style="max-width:25%; margin-top: 3%">
             <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
                <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Book Appointment</a>
                <a class="list-group-item list-group-item-action" href="#app-hist" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">Appointment History</a>
             </div><br>
             <section id="showcase">
      <div class="content">
          <a href="./login.php"><button name="logout">Logout</button></a>
      </div>
  </section>
          </div>
          <div class="col-md-8" style="margin-top: 3%;">
             <div class="tab-content" id="nav-tabContent" style="width: 950px;">
                <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
                   <div class="container-fluid container-fullw bg-white">
                      <div class="row">
                         <div class="col-sm-4" style="left: 5%">
                            <div class="panel panel-white no-radius text-center">
                               <div class="panel-body">
                                  <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-bookmark fa-stack-1x fa-inverse"></i> </span>
                                  <h4 class="StepTitle" style="margin-top: 5%;"> Book My Appointment</h4>
                                  <script>
                                     function clickDiv(id) {
                                       document.querySelector(id).click();
                                     }
                                  </script>
                                  <p class="links cl-effect-1">
                                     <a href="#list-home" onclick="clickDiv('#list-home-list')">
                                     Book Appointment
                                     </a>
                                  </p>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-4" style="left: 10%">
                            <div class="panel panel-white no-radius text-center">
                               <div class="panel-body">
                                  <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                                  <h4 class="StepTitle" style="margin-top: 5%;">My Appointments</h2>
                                  <p class="cl-effect-1">
                                     <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                                     View Appointment History
                                     </a>
                                  </p>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                   <div class="container-fluid">
                      <div class="card">
                         <div class="card-body">
                            <center>
                               <h4>Book Appointment</h4>
                            </center><br>
                            <form class="form-group"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                               <div class="row">
                                  <div class="col-md-4">
                                     <label for="service">Service:</label>
                                  </div>
                                  <div class="col-md-8">
                                     <select name="Service" class="form-control" id="service">
                                        <option value="" disabled selected>Select Specialization</option>
                                        <option value="General Checkup">General Checkup</option>
                                        <option value="Dental">Dental</option>
                                        <option value="Cardiology">Cardiology</option>
                                        <option value="Orthopedic">Orthopedic</option>
                                        <option value="Neurology">Neurology</option>
                                        <option value="Gynecology">Gynecology</option>
                                     </select>
                                  </div>
                                  <br><br>
                                  <div class="col-md-4">
                                     <label for="doctor">Doctors:</label>
                                  </div>
                                  <div class="col-md-8">
                                     <select name="Doctor" class="form-control" id="doctor" required="required">
                                        <option value="" disabled selected>Select Doctor</option>
                                        <option value="Dr. Rajesh Patel">Dr. Rajesh Patel</option>
                                        <option value="Dr. Emily Williams">Dr. Emily Williams</option>
                                        <option value="Dr. Samuel O'Connor">Dr. Samuel O'Connor</option>
                                        <option value="Dr. Benjamin Lee">Dr. Benjamin Lee</option>
                                        <option value="Dr. Daniel Rodriguez">Dr. Daniel Rodriguez</option>
                                        <option value="Dr. john sam">Dr. john sam</option>
                                     </select>
                                  </div><br/><br/>
                                  <div class="col-md-4">
                                     <label for="date">Date:</label>
                                  </div>
                                  <div class="col-md-8">
                                     <input type="date" placeholder="Date" name="date" id="date" required>
                                  </div>
                               </div>
                               <div class="row">
                               <div class="col-md-4">
                                  <button type="submit"  name="bookNow" class="btn btn-primary">Book Now</button> 
                               </div>
                               <div class="col-md-8"></div>
                            </div>
                            </form>
                            
                         </div>
                      </div>
                   </div><br>
                </div>
                <div class="tab-pane fade" id="app-hist" role="tabpanel" aria-labelledby="list-pat-list">
                   <table class="table table-hover">
                      <thead>
                         <tr>
                            <th scope="col">#</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                               <a href="#" onClick="return confirm('Are you sure you want to cancel this appointment ?')" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">
                               <button class="btn btn-danger">Cancel</button>
                               </a>
                            </td>
                         </tr>
                      </tbody>
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
 
    
    </script>
 </body>
 