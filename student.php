<!DOCTYPE html>
<html>
<head>
<style>
    a{
        text-decoration:none;
        color:#FF0000;
        font-family:Georgia, "Times New Roman", Times, serif;
        font-style:Bold;
        font-size:14px;
    }
    td{
        text-align:center;
    }
    table{
        width:880px;
    }
</style>
</head>

<body style="background-color:#CCCCCC">
    <script language="JavaScript">

</script>
    <table align="center" border="0">
        <tr>
            <td width="100px">
                <img src="img/clglogo.png"/>
            </td>
            <td width="710px">
                <h1>
                    Department of Computer Science and Engineering
                    <br>
                            Research and Development
                            </br>
                </h1>
            </td>
            <td>
                <!--<a href="https://www.facebook.com/" target="_blank">
                    <img src="logo-designing.png" width="50px" height="50p"/>
                </a>
                <a href="https://twitter.com/" target="_blank">
                    <img src="697029-twitter-512.png" width="50px" height="50p"/>
                </a>-->
            </td>
        </tr>
    </table>
    <?php
        include_once("menu.php");
    ?>
              <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/seshu.css">
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="img/photo.jpg" style="width:880px">
  <div class="text"><h1>Final Batch</h1></div>
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="img/2011-2015.jpg" style="width:880px">
  <div class="text"><h1>2011-2015</h1></div>
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="img/2012-2016.jpg" style="width:880px">
  <div class="text"><h1>2012-2016</h1></div>
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="img/2013-2017.jpg" style="width:880px">
  <div class="text"><h1>2013-2017</h1></div>
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="img/2014-2018.jpg" style="width:880px">
  <div class="text"><h1>2014-2018</h1></div>
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="img/2015-2019.jpg" style="width:880px">
  <div class="text"><h1>2015-2019</h1></div>
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="img/2016-2020.jpg" style="width:880px">
  <div class="text"><h1>2016-2020</h1></div>
</div>

<!--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>-->

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
    </table>
    <table align="center">
    	<tr>
        	<td>
            
                <a href="registration1.php"><h4>I B.Tech Student Registration</h4></a>
                            
                 <a href="registration2.php"><h4>II.B.tech Student Registration</h4></a>
               
                <a href="registration3.php"><h4>III.B.tech Student Registration</h4></a>
                     
                 <a href="registration4.php"><h4>IV.B.tech Student Registration</h4></a>
                
            </td>
        </tr>
    </table>
    <table align="center">
    	<tr valign="top">
        	<td width="660px;" style="text-align:justify">
            	             	 

                </p>
            </td>
            <td>
            	
                 
             </td>
        </tr>
    </table>
    <table align="center" style="background-color:#FF0000; color:#FFFFFF; font-size:16px;">
    	<tr>
        	<td>
             
            </td>
        </tr>
    </table>
    
</body>
</html>
