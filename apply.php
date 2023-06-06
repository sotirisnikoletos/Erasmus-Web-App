<?php

include 'config.php';

if(!isset($_SESSION)) 
    { 
      session_start(); 
    } 
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE email = '$user_id' or fname='$user_id'";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_array($results);
$fname = $row['fname'];
$lname = $row['lname'];
$stid = $row['a_m'];


?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(./media/back.jpg);
  
  

}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

div.example {
  background-color: cyan;
  padding: 20px;
  font-size: 2px;
}

@media screen and (min-width: 601px) {
  div.example {
    font-size: 20px;
    text-transform: none;
  }
  .img{
    height: 50px;
    width: 50px;
  }
}

@media screen and (max-width: 600px) {
  div.example {
    font-size: 30px;
  }
}
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}
th, td {
  padding: 5px;
  text-align: center;
}
h2{
  text-align: center;
}

.container {
  margin:5px; 
  padding: 5 20px;
  margin-left: auto; 
  margin-right: auto;
  text-align: center;
}
   
.form-group,.form-outline,.button,.form-control{
  margin-left: auto;
  margin-right: auto;
}
.form-check,.form-control{
  text-align: center;
}
.form{
  margin-left: auto; 
  margin-right: auto;
  border-style: solid;
}
.row{
  margin-left: auto; 
  margin-right: auto;
}

input {
  border: 1px solid #000;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">UoP Erasmus+</a>
  <div class="header-right">
  <?php
      
      if (isset($_SESSION['user_id'])) {
        // User is logged in
        echo '<a href="index.php">Home</a>';
        echo '<a href="reqs.php">Requirements</a>';
        echo '<a href="http://www.uop.gr/erasmus/images/stories/files/empeiries_foititon.pptx">Experiences</a>';

      } else {
        // User is not logged in
        echo '<a href="signup.html">Sign up</a>';
        echo '<a href="login.html">Login</a>';
        echo '<a href="reqs.php">Requirements</a>';



      }
    ?>
  </div>
</div>


<h2 >Apply for Erasmus Program!


</h2>


<form action="submit.php" method="POST">
  <div class="row"style="width: 22rem;">
    <div class="col"style="width: 22rem;">
      <label for="sel1">First Name</label>
      <input type="text" class="form-control" value="<?php echo $fname; ?>" required disabled><br>
    </div>
    <div class="col"style="width: 22rem;">
      <label for="sel1">Last Name</label>
      <input type="text" class="form-control" value="<?php echo $lname; ?>" required disabled><br>
    </div>
    <div class="col"style="width: 22rem;">
      <label for="sel1">Student Number</label>
      <input type="text" class="form-control" value="<?php echo $stid; ?>" required disabled><br>
    </div>
    
  </div>
  
  
  <div class="form-group" style="width: 22rem;">
    
    <label for="sel1">First choice:</label>
    <select class="form-control" id="sel1" name="university" required>
      <option value="Uni. of London">University of London</option>
      <option value="Uni. of Cyprus">University of Cyprus</option>
      <option value="Uni. of Berlin">University of Berlin</option>
      <option value="Uni. of Krakow">University of Krakow</option>
    </select>
  </div>
  </div>

  <div class="form-group" style="width: 22rem;">
    
    <label for="sel1">Second choice:</label>
    <select class="form-control" id="sel2" name="university2" required>
      <option value="Uni. of Berlin">University of Berlin</option>
      <option value="Uni. of Cyprus">University of Cyprus</option>
      <option value="Uni. of London">University of London</option>
      <option value="Uni. of Krakow">University of Krakow</option>
    </select>
  </div>
  </div>

  <div class="form-group" style="width: 22rem;">
    
    <label for="sel1">Third choice:</label>
    <select class="form-control" id="sel3" name="university3" required>
      <option value="Uni. of Cyprus">University of Cyprus</option>
      <option value="Uni. of London">University of London</option>
      <option value="Uni. of Berlin">University of Berlin</option>
      <option value="Uni. of Krakow">University of Krakow</option>
    </select>
  </div>
  </div>
 
  <div class="form-outline" style="width: 22rem;">
 
    <label class="form-label" for="typeNumber">Average of grades</label>
    <input value="" type="number" id="typeNumber" name ="average" class="form-control" style="display: inline;"step="any" requiured/>
  </div>
  </div>
  
  <div class="form-outline" style="width: 22rem;">
    
  <label class="form-label" for="typeNumber">Percent of passed courses </label>
  <input value="" type="number" id="typeNumber" class="form-control" name = "percent" style="display: inline;" required/>
  </div>
  </div>
  <br>
  <br>
  <div class="form-outline" style="width: 22rem;">
    <label for="yes_no_radio">English Level:</label>
      <p>
      <input type="radio" name="yes_no1" value="A1">A1</input>
      </p>
      <p>
      <input type="radio" name="yes_no1" value="A2">A2</input>
      </p>
      <p>
      <input type="radio" name="yes_no1" value="B1"checked>B1</input>
      </p>
      <p>
      <input type="radio" name="yes_no1" value="B2">B2</input>
      </p>
      <p>
      <input type="radio" name="yes_no1 " value="C1">C1</input>
      </p>
      <p>
      <input type="radio" name="yes_no1" value="C2">C2</input>
      </p>
      <br>
      <br>
    </div> -->
    <div class="form-outline" style="width: 22rem;">
  <label for="yes_no_radio">Do you agree to the terms?</label>
<p>
<input type="radio" name="yes_no" checked>Yes</input>
</p>
<p>
<input type="radio" name="yes_no">No</input>
</p>
</div>
    
    <br>
 

    <div class="form-outline" style="width: 22rem;">

      <label for="formFileSm" class="form-label" style="width: 22rem;">Full grades file</label>
      <input class="form-control form-control-sm" id="formFileSm" type="file" style="width: 22rem;"/><br>
      <label for="formFileSm" class="form-label" style="width: 22rem;">English certificate file</label>
      <input class="form-control form-control-sm" id="formFileSm" type="file"style="width: 22rem;" /><br>
      
      <label for="formFileSm" class="form-label" style="width: 22rem;">Other certificates</label>
      <input class="form-control form-control-sm" id="formFileSm" type="file"style="width: 22rem;" multiple/><br>
      <input type="submit" class="button" value="Apply for Erasmus" >
</form>
    

	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
