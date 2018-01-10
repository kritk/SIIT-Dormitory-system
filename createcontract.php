<?php
session_start();
require_once('connect.php');
$studentid = $_SESSION["studentid"];

$q = "SELECT * FROM booking WHERE Studentid = '$studentid' ";

$result = $mysqli->query($q);
if(!$result){
echo "Select failed. Error: ".$mysqli->error ;
}
while ($obj = mysqli_fetch_object($result)) {
        $name = $obj->Name;
        $surname = $obj->Surname;
        $email = $obj->Email;
        $mobilephone = $obj->Mobilephone;
        $phone = $obj->Phone;
    }

?>
<html lang="en">
  <head>
    <title>Contract</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/contract.css">

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
                <a class="nav-link" href="#">Home</a>
              </li>

               <li class="nav-item active">
                <a class="nav-link" href="#">Create Contract <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Create Booking</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#">Reporting Problem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
             



            </ul>
          </div>
        </nav>
    <form action="contractconfirm.php" method="post">
      <div class="backgroundmain">
        <div class = "Form1">
          <div>
            <h2> 1. Student Information</h2>
          </div>
          <div class="radio-button">
                  <label class="radio"><input type="radio" name="gender" value="Male" checked >Mr.</label>
                  <label class="radio"><input type="radio" name="gender" value="Female">Miss</label>
          </div>
          <div class="form-inline ">
                    <div class="form-group" >
                      <label >Name(ชื่อ):</label>
                      <input type="text" class="form-control" size="20" name="Cname" value="<?php echo $name ?>" id="name">
                    </div>
                    <div class="form-group" >
                      <label >Surname(นามสกุล):</label>
                      <input type="text" class="form-control"  size="25" name="Csurname" value="<?php echo $surname ?>" id="surname">
                    </div>


          </div>
          <div class="form-inline ">
                    <div class="form-group" >
                      <label >Program :</label>
                      <div class="dropdown">
                            <select class="selectpicker" name="program">
                              <option value="Che">ChE</option>
                              <option value="CE">CE</option>
                              <option value="CPE">CPE</option>
                              <option value="EC">EC</option>
                              <option value="EM">EM</option>
                              <option value="IE">IE</option>
                              <option value="IT">IT</option>
                              <option value="MT">MT</option>
                              <option value="ME">ME</option>
                            </select>
                      </div>
                    </div>
          </div>
          <div  class="form-inline ">
            <div class="form-group" >
                      <label >National Identify Card/Passport(for foreign students) number :</label>
                      <input type="text" class="form-control" size="15" name="Cidcard" id="idcard">
            </div>
          </div>
           <div  class="form-inline ">
            <div class="form-group" >
                      <label >Student ID :</label>
                      <input type="text" class="form-control" size="15" value="<?php echo $studentid ?>" name="studentid" id="idcard">
            </div>
          </div>
          <div class="form-inline ">
            <div class="form-group">
               <label >Date of Birth :</label>
               <input class="form-control" type="date" value="2018-01-01" name="Cbirth" id="age">
            </div>
            <div class="form-group" >
                      <label >Age :</label>
                      <input type="text" class="form-control" size="2" name="Cage" id="age">
            </div>
          </div>
          <!--Address start here-->
           <div>
            <h2>Address</h2>
          </div>
          <div class="form-inline ">
                        <div class="form-group">
                              <label for="comment">Address :</label>
                              <div class = "address1">
                              <textarea class="form-control" rows="5" cols="40" id="Caddress1" name="address"></textarea>
                              </div>
                        </div>
          </div>
          <div class="form-inline ">
                        <div class="form-group">
                              <label for="comment">Currently Address :</label>
                              <div class = "address">
                              <textarea class="form-control" rows="5" cols="40" id="Caddress2" name="currentaddress"></textarea>
                              </div>
                        </div>
          </div>
          <div class="form-inline ">
                        <div class="form-group" >
                          <label >Telephone :</label>
                          <input type="text" class="form-control" size="20" value="<?php echo $phone ?>" name="Ctel" id="name">
                        </div>
                        <div class="form-group" >
                          <label >Cell phone :</label>
                          <input type="text" class="form-control"  size="15" value="<?php echo $mobilephone ?>" name="Cmobile" id="cphone">
                        </div>

          </div>
          <div class="form-inline ">
                        <div class="form-group" >
                          <label >E-mail :</label>
                          <input type="text" class="form-control"  size="25" value="<?php echo $email ?>" name="Cemail" id="email">
                        </div>
          </div>
          <div>
            <h2>Resident Type</h2>
          </div>
          <div class="B">
            <a >hereinafter called “Tenant”, have acknowledged and agreed to follow terms of condition identified by Sirindhorn International Institute of Technology, hereinafter called “Institute”, with the agreement of room renting between the student and institute as follows:</a>
          </div>
          <div class="form-group">
            <script>
                                function hiddenn(pvar) {
                                  if(pvar==1){
                                    document.getElementById("type2").style.display = '';
                                    
                                  }
                                  else if(pvar==2){
                                    document.getElementById("type3").style.display = '';
                                    document.getElementById("type2").style.display = 'none';
                                  }
                                  else{
                                    document.getElementById("type3").style.display = 'none';
                                    document.getElementById("type2").style.display = 'none';
                                  }
                                 
                                }
                                
            </script>
            <body onload="hiddenn('0')">
           

            
            <div>
              <br><label><input type="radio" name="type" onclick="hiddenn('0')" value="Type 1.1" checked> Type 1.1:  The tenant intends to stay alone with the use of both A and B rooms during the rental period. :</label>
            </div>
            <div>
              <label><input type="radio" name="type" onclick="hiddenn('1')" value="1.2"> Type 1.2:   The tenant stays with his/her specified roommate.</label>
              <div id="type2">
                                        <div class="radio-button">
                                              <label class="radio"><input type="radio" name="friend" value="male" checked >Mr.</label>
                                              <label class="radio"><input type="radio" name="friend" value="female">Miss</label>
                                        </div>
                                        <div class="form-inline " >
                                            <div class="form-group" >
                                              <label >Name(ชื่อ):</label>
                                              <input type="text" class="form-control" name="fname" id="name">
                                            </div>
                                            <div class="form-group" >
                                              <label >Surname(นามสกุล):</label>
                                              <input type="text" class="form-control" name="fsurname" id="surname" >
                                            </div>
                                        </div>
                                        <div class="form-inline " >
                                            <div class="form-group" >
                                              <label >Student ID :</label>
                                              <input type="text" class="form-control" name="fstudentid" id="studentid"  >
                                            </div>
                                            <div class="form-group" >
                                              <label >Program :</label>
                                              <div class="dropdown">
                                                    <select class="selectpicker" name="fprogram">
                                                      <option value="Che">ChE</option>
                                                      <option value="CE">CE</option>
                                                      <option value="CPE">CPE</option>
                                                      <option value="EC">EC</option>
                                                      <option value="EM">EM</option>
                                                      <option value="IE">IE</option>
                                                      <option value="IT">IT</option>
                                                      <option value="MT">MT</option>
                                                      <option value="ME">ME</option>
                                                    </select>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-inline " >
                                            <div class="form-group" >
                                              <label >Mobile Phone :</label>
                                              <input type="text" class="form-control" name="fmphone" id="mobile"  >
                                            </div>
                                        </div>
                </div>
            </div>
            <div>
              <label><input type="radio" name="type" onclick="hiddenn('2')" value="Type 1.3" > Type 1.3:  The tenant stays with a roommate that the institute has assigned.</label>
            </div>
            <div class="roomnum" id="type3">
                <label><input type="radio" name="room" value="roomA" checked > Room A during the rental period</label>
                <br><label><input type="radio" name="room" value="RoomB" > Room B during the rental period</label>
            </div>
            
          </div>
        </div>
        <div class="Form1">

          <div>
            <h2> 2. Duration</h2>
          </div>
          <div class="B">
            <a >  The tenant agrees to rent the room mentioned in item 1 as a residence during his/her study in SIIT with rental period</a>
          </div>
          <div class="form-inline ">
                    <div class="form-group" >
                      <label >Number of month:</label>
                      <input type="text" class="form-control" size="2" name="month" id="month">
                    </div>
                    <div class="form-group" >
                      <label >From:</label>
                      <input type="date" class="form-control" name="from" value="2018-01-01" id="month">
                    </div>
                    <div class="form-group" >
                      <label >To:</label>
                      <input type="date" class="form-control" name="to" value="2018-01-01" id="month">
                    </div>
          </div>
          <div class="B">
            <a >  In case the tenant fails to fulfill the rental period, he/she allows the institute to confiscate 
              <br>the damages deposit, except when the tenant completes his/her degree in the first semester or his/her  
              <br>status is terminated before expiration of the contract. In these cases, the tenant is required to hand 
              <br>student  in a request for a refund of damages deposit. However, if the tenant severely breaks  
              <br>the dormitory rules, the tenant allows the institute to confiscate all of the damages deposit.  </a>
          </div>
          <div class="B">
            <a ><br> Moreover, when the tenant returns the room and requests a refund on damages deposit,
            <br> the room must be in a good and clean condition without any defects on furniture and 
            <br>equipment (condition of furniture and equipment is checked according to its time of use).</a>
          </div>
          <div>
            <div class="button1">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Read more...</button>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Other Contract Agreement</h4>
                  </div>
                  <div class="modal-body">
                        <p>3. The tenant agrees to pay for electricity, tap water, telephone, and room rental fee within the deadline informed by the institute. The tenant will be fined for payment after the deadline according to the rates identified by the institute, which are 20 baht per day for renting of type 1.2 or 1.3 and 40 baht per day for type 1.1.</p>
                        <p>4. The tenant agrees not to transfer the room to other people and/or not to let other people rent the room, or not to allow other people to take over his/her rights without permission from the institute for any reason.</p>
                        <p>5. The tenant agrees to use the room mentioned in item 1 for the purpose of residing only and not to give the room to other people or seek any profits from it. The tenant must not persuade people who are not his/her roommate to stay in the room. </p>
                        <p>6. The tenant agrees not to add, modify, or misshape the room or any part of the building, including furniture, room equipment, and public areas. If there is any damage caused, the tenant is responsible for its fee without any argument.</p>
                        <p>7. The tenant must not put his/her personal belongings in the public area for any reason.</p>                 
                        <p>8. Pets or other animals are not allowed in the dormitory premises.</p>
                        <p>9. The tenant agrees to let an assigned lecturer/staff from the institute inspect the room at an appropriate time during the rental period without informing in advance.</p>
                        <p>10.  The tenant must strictly follow Tenant’s Rights, Duties and Responsibilities (attached to this contract) as well as dormitory regulations, announcements, and rules and/or institute regulations, announcements, and rules that were already identified, and to be identified in the future, and use them as a part of this contract of rent.</p>
                        <p>11.  If the tenant fails to follow the regulations, announcements and rules/ or conditions in this contract, the institute has the right to cancel the contract, confiscate the damages deposit immediately and to hold the student’s registration as well as graduation approval, without any argument. </p>
                        
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="check">
                      <br><label class="checkbox-inline"><input type="checkbox" required> I have read and agreed</label>
            </div>
          </div>
        </div>
        <div class="Form1">
          <div>
              <h2>Schorlarship Information</h2>
          </div>
          <div class="B">
            <a >The tenant has read and understands all the content in this contract and agrees
            <br> to strictly follow this agreement for using the rental room. Thus, the tenant’s
            <br> signature on this document is served as evidence. </a>
          </div>
          <div class="scholar">
            <div>
                <br><label><input type="radio" name="scholartype" value="noscholar" checked >The tenant does not receive any scholarship from the institute.</label>
                <br><label><input type="radio" name="scholartype" value="EFS"> Graduate Scholarship for Excellent Foreign Students (EFS)</label>
                <br><label><input type="radio" name="scholartype" value="memberquota" > SIIT Scholarship for Graduate Students (Faculty Member’s Quota)</label>
                <br><label><input type="radio" name="scholartype" value="4-year" > SIIT 4-Year Continuing Scholarships for Undergraduate Students</label>
                <br><label><input type="radio" name="scholartype" value="otherscholar" > Other (Please specify) </label>
                <div class="form-inline">
                    <input type="text" class="form-control" name="otherscholar" size="25" id="name">
                </div>
            </div>
          </div>   
        </div> 
        <div>
          <div class ="button2">
            <button type="submit" class="btn btn-primary">Confirm</button>
          </div>
        </div>
      </div>
    </form>
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
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>