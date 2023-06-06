<!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}


.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}


@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}


@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
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
.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 40%; 
  text-align: center;
  display: block;
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 1000px;
  height: 500px;
  border: none;
  margin: 0 auto;
  display: block;
}
</style>
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
        echo '<a href="http://www.uop.gr/erasmus/images/stories/files/empeiries_foititon.pptx">Experiences</a>';



      }
    ?>
      
    </div>
  </div>

<h2 style="text-align: center;color: rgb(103, 119, 32);">See the videos and images from students all over the world!</h2>
  <div class="container"> 
    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/ykwdEaRQXW4"></iframe>
  </div>
  
  <div class="container"> 
    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/wv0Kh1DSJHg"></iframe>
  </div>




<div class="row"> 
  <div class="column">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus1.png" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus2.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus3.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus4.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus5.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus6.jpeg" style="width:100%">
  </div>
  <div class="column">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus8.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus9.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus10.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus11.webp" style="width:100%">
    
  </div>  
  <div class="column">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus12.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus13.jpeg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus14.webp" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus15.jpg" style="width:100%">
  </div>
  <div class="column">
    
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus9.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus10.jpg" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus11.webp" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus17.png" style="width:100%">
    <img src="C:\Users\sothr\Desktop\tselikas web app\media\erasmus16.jpg" style="width:100%">


  </div>
</div>

</body>
</html>
