<?php 

    require_once("config.php");
    $query2 = "SELECT * FROM users WHERE user_type_id='0'";

    $result2= mysqli_query($conn,$query2);
    $query3 = "SELECT * FROM users WHERE user_type_id='1'";

    $result3= mysqli_query($conn,$query3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  
    <style>
* {box-sizing: border-box;}
#form-wrapper
{
    height:100%;
    flex: 1 1 auto;
    margin:0 auto;
    display:block;
    
    
    
}

#form-wrapper input{
    display:flex;

}
.button input{
   
   border-radius: 5px;
   border: none;
   color: black;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: lightblue;
   height: 45px;
   margin: 35px 0 0 0;
   
 }

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
body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
 .border{
  background-color:cyan;
 } 

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
.form-wrap {
  display:flex;
  justify-content: center;
}

div.example {
  background-color: cyan;
  padding: 20px;
  font-size: 2px;
}

/* Section One*/


        }
</style>
<?php

$jsscript="<script>
    function displaySelectedDate() {
      var dateInput = document.getElementById('start');
      var selectedDate = dateInput.value;
      var result = document.getElementById('result');
      var dateInput2 = document.getElementById('end');
      var selectedDate2 = dateInput2.value;
      var result2 = document.getElementById('result2');
      result.textContent = 'Applications Start Date: ' + selectedDate;
      result2.textContent = 'Applications End Date: ' + selectedDate2;
      ";
      echo $jsscript;
      ?>

    
  </script>


<div class="header">
  <a href="#default" class="logo">Admin Page</a>
  <div class="header-right">
    <a href="new_admin.php">Create new admins</a>
    <a href="login.html">User login</a>

    
  </div>
</div>


<br>
<div id ="result"> </div>
<div id ="result2"> </div>




<body style = "background-color:cyan;">















  
      <h5 style = "font-family:sans-serif; font-weight:bold; text-decoration: underline; text-align:center;">Admins table : </h5>

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered" id='table1'>
                          <thead>
                            <tr>
                                <th>Admin Name </th>
                                <th> Admin Surname </th>
                                <th> Admin email </th>
                                
                                
                                </thead>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result2))
                                    {
                                        $UserID = $row['fname'];
                                        $UserName = $row['lname'];
                                        $UserEmail5 = $row['email'];

                            ?>
                            <tbody>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail5 ?></td>
                                        
                                        
                                    </tr>        
                                    </tbody>
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>



          <h5 style = "font-family:sans-serif; font-weight:bold; text-decoration: underline; text-align:center;">Students table : </h5>

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table id="myTable" class="table table-bordered">
                          <thead>
                            <tr>
                                <td>Student Name </td>
                                <td> Student Surname </td>
                                <td> Student email </td>
                                <td> Student ID </td>

                                
                            </tr>
                          </thead>
                            

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result3))
                                    {
                                      
                                        $UserID = $row['fname'];
                                        $UserName = $row['lname'];
                                        $UserEmail = $row['email'];
                                        $UserEmail2 = $row['a_m'];

                            ?>
                                    <tbody>
                                      <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td> <?php echo $UserName ?></td>
                                        <td> <?php echo $UserEmail ?></td>
                                        <td ><?php echo $UserEmail2 ?></td>

                                        
                                      </tr>
                                    </tbody>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
                                  </div> 

                                      <h5 style = "font-family:sans-serif; font-weight:bold; text-decoration: underline; text-align:center;">Application table : </h5>
                                                  
                                        <br>
                                            <form method="POST" action="" class='form-wrap'>
                                              <br>
                                               
                                                <input type="number" name="avg" id="avg" placeholder ="Average greater than..">
                                                <br>
                                                
                                                <p><input type="submit" value="Submit" name="submit" /></p>
                                            </form>

                                            <div class="container">
                                                    <div class="row">
                                                        <div class="col m-auto">
                                                            <div class="card mt-5">
                                                                <table id='myTable2' class="table table-bordered">
                                              <tr>
                                                        <th>App ID</th>
                                                        <th>First name</th>
                                                        <th>Last name</th>
                                                        <th>First choice</th>
                                                        <th>Second choice</th>
                                                        <th>Third choice</th>
                                                        <th>Percent of passed</th>
                                                        <th>Average</th>
                                                        <th>English</th>
                                                        <th>Status</th>
                                                        <th>Accept</th>


                                  
                                              </tr>
        <?php
        // Connect to your database here
        include 'config.php';

        // Get the filter values from the form submission
        $avg = isset($_POST['avg']) ? $_POST['avg'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : '';
        

        // Construct the SQL query based on the filter values
        $query = "SELECT * FROM applications WHERE avg > $avg";

        

       

        // Execute the query and fetch the results
        // Replace 'your_table' with your actual table name and adjust the column names accordingly
        $result = mysqli_query($conn, $query);

        // Loop through the results and display them in the table
        if (isset($_POST['submit']))
        {
        while ($row = mysqli_fetch_assoc($result)) {
         
         

            echo "<tr>";
            echo "<td>" . $row['application_id'] . "</td>";
            echo "<td>" . $row['fname'] . "</td>";
            echo "<td>" . $row['lname'] . "</td>";
            echo "<td>" . $row['uni_1'] . "</td>";
            echo "<td>" . $row['uni_2'] . "</td>";
            echo "<td>" . $row['uni_3'] . "</td>";
            echo "<td>" . $row['perc'] . "</td>";
            echo "<td>" . $row['avg'] . "</td>";
            echo "<td>" . $row['eng'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td><input type='checkbox' name='checkbox[" . $row['application_id'] . "]' value='". $row['application_id'] . "' </td>";
            

         

      
    }
    
  }

        // Close the database connection here
        ?>
           <input type="submit" value="Submit" name="submit" />
    </table>



    

    
    
</body>
</html>