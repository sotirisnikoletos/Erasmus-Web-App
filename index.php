
<?php


session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.html');
};

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
  .responsive{
    width:  100%;
    height: auto;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">UoP Erasmus+</a>
  <div class="header-right">
    <a href="./apply.php">Apply</a>
    <a href="./reqs.php">Requirements</a>
    <a href="./more.php">Information</a>
  </div>
</div>


<h2>Welcome to Erasmus Program, powered by University of Peloponnese in Tripoli.</h2>

<div class="example">

<?php  if (isset($_SESSION['user_id'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['user_id']; ?></strong></p>
    	<input type="button" onclick="location.href='update.html';" value="Edit profile" />
      <input type="button" onclick="location.href='logout.php';" value="Get me out" />
      
    <?php endif ?>

<p>
<br>
<br>
<br>
  Erasmus Program is a European Union (EU) student exchange program that provides opportunities for students to study in another country and
  gain valuable international experience. The program was first introduced in 1987 and has since grown to include over 4,000 higher education institutions across 33 participating countries.
  
  The Erasmus Program aims to promote the mobility of students, teachers, and researchers within the EU, enhance the quality and innovation of higher education, and increase the competitiveness of European universities.
  
  
</p>

<h3>Why choose Erasmus Program?</h3>
		
		<ul>
			<li>Experience different cultures and languages</li>
			<li>Enhance your academic and personal skills</li>
            <li>Broaden your network and career opportunities</li>
            <li>Discover new perspectives and approaches to learning</li>
            <li>Explore new places and make lifelong memories</li>
      </ul>
  
      <img src="media/back1.jpg" class="responsive" width="100%" height="auto">
</div>

</body>
</html>
