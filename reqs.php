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
  background-color: cyan;
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
   
.form-group,.form-outline,.button{
  margin-left: auto;
  margin-right: auto;
}
.form-check{
  text-align: center;
}


</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">UoP Erasmus+</a>
  <div class="header-right">
    <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
      // User is logged in
      echo '<a href="index.php">Home</a>';
      echo '<a href="apply.php">Apply</a>';
      echo '<a href="http://www.uop.gr/erasmus/images/stories/files/empeiries_foititon.pptx">Experiences</a>';

    } else {
      // User is not logged in
      echo '<a href="signup.html">Sign up</a>';
      echo '<a href="login.html">Login</a>';
      echo '<a href="more.php">Information</a>';



    }
  ?>
  </div>
</div>


<h2>See below table for minimum requirements

</h2>





  <table class="table table-striped" style="width:50%">
    <tr>
    <th>Year of studies:</th>
    <td>Second year</td>
  </tr>
  <tr>
    <th>Total average:</th>
    <td>6.50</td>
  </tr>
  <tr>
    <th>Percent of passed courses:</th>
    <td>70 %</td>
  </tr>
  <tr>
    <th>English Certificate:</th>
    <td>B2 (Lower)</td>
  </tr>
</table>
  </table>
  <br>
  <br>
  <h2>
    Check your requirements :
  </h2>
  <br>
  <br>
  
  <div class="form-group" style="width: 22rem;">
    
    <label for="sel1">Select current year of studies:</label>
    <select class="form-control" id="sel1">
      <option value="1">1</option>
      <option selected="selected" value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5 or more</option>
    </select>
  </div>
  </div>
  <div id="message"></div>


 
  <div class="form-outline" style="width: 22rem;">
 
    <label class="form-label" for="typeNumber">Average of grades</label>
    <input value="6.5" type="number" id="typeNumber" class="form-control" style="display: inline;"/>
  </div>
  </div>
  
  <div class="form-outline" style="width: 22rem;">
    
  <label class="form-label" for="typeNumber">Percent of passed courses </label>
  <input value="50" type="number" id="typeNumber1" class="form-control" style="display: inline;"/>
  </div>
  </div>
  <br>
  <br>
  <div class="form-check">
    <label class="form-label" >Choose your English Certificate</label><BR>

    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
      A1
    </label>
  </div>
  <div class="form-check">
    
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      A2
    </label>
  </div>
  <div class="form-check">
    
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      B1
    </label>
  </div>
  <div class="form-check">
    
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      B2
    </label>
  </div>
  <div class="form-check">
    
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      C1
    </label>
  </div>
  <div class="form-check">
    
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      C2
    </label>
    <br>
    <br>
    <div class="button" style="width: 50%;"> 
      <input type="submit" value="Check requirements" onclick="myF()" id="submitBtn">
    
    </div>
    <script>
      function myF(){

      
        var x = document.getElementById("sel1").selectedIndex;
        var y = document.getElementById("typeNumber").value;
        var z = document.getElementById("typeNumber1").value;

        if (x==0){
          alert('You must at least be a 2nd grader :)');
        }
        else if (y<6.5){
          alert('You must at least have average 6.5 or more :)');
        }
        else if (z<70){
          alert('You must at least have 70 percent of passed grades :)');
        }
        else {
          alert('You can apply, please sign up or login');
        }
}
</script>

	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
