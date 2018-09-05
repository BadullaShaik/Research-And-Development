<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: "Times New Roman", sans-serif;
}

 
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

 
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

 
div.tab button:hover {
    background-color: #ddd;
}
 
div.tab button.active {
    background-color: #ccc;
}

.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>

<h1><b>Academic Year 2017-18 Time Table</b></h1>

<div class="tab">
  <button class="tablinks" onclick="openCourse(event, 'Ist')">Ist Year</button>
  <button class="tablinks" onclick="openCourse(event, 'IInd')">IInd Year</button>
  <button class="tablinks" onclick="openCourse(event, 'IIIrd')">IIIrd Year</button>
  <button class="tablinks" onclick="openCourse(event, 'IVth')">IVth Year</button>
</div>

<div id="Ist" class="tabcontent">
  <h3>Ist Year</h3>
 
    <img src="Ist Year.JPG" height="780px;" width="880px;" />
             
</div>

<div id="IInd" class="tabcontent">
  <h3>IInd Year</h3>
 
    <img src="IInd Year.JPG" height="780px;" width="880px;" />
</div>

<div id="IIIrd" class="tabcontent">
   <h3>IIIrd Year</h3>
 
    <img src="IIIrd Year.JPG" height="780px;" width="880px;" />

</div>
<div id="IVth" class="tabcontent">
   <h3>IVth Year</h3>
 
    <img src="IVth Year.JPG" height="780px;" width="880px;" />
</div>

<script>
function openCourse(evt, courseName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(courseName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 
