<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Tabbed Image Gallery</h2>
  <p>Click on the images below:</p>
</div>

<div class="w3-row-padding">
  <div class="w3-col s3 w3-container">
  <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Nature');">
    <img src="tlo.png" alt="Nature" style="width:100%">
  </a>
  </div>
  <div class="w3-col s3 w3-container">
    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Snow');">
      <img src="tlo.png" alt="Snow" style="width:100%">
    </a>
  </div>
  <div class="w3-col s3 w3-container">
    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Mountains');">
      <img src="tlo.png" alt="Mountains" style="width:100%">
    </a>
  </div>
  <div class="w3-col s3 w3-container">
    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Lights');">
      <img src="tlo.png" alt="Lights" style="width:100%">
    </a>
  </div>
</div><br>

<div id="Nature" class="picture w3-display-container" style="display:none">
  <img src="tlo.png" alt="Nature" style="width:100%">
  <span onclick="this.parentElement.style.display='none'" 
  class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
  <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Nature</div>
</div>

<div id="Snow" class="picture w3-display-container" style="display:none">
  <img src="tlo.png" alt="Snow" style="width:100%">
  <span onclick="this.parentElement.style.display='none'" 
  class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
  <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Snow</div>
</div>

<div id="Mountains" class="picture w3-display-container" style="display:none">
  <img src="tlo.png" alt="Mountains" style="width:100%">
  <span onclick="this.parentElement.style.display='none'" 
  class="w3-display-topright w3-button w3-transparent">&times;</span>
  <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Mountains</div>
</div>

<div id="Lights" class="picture w3-display-container" style="display:none">
  <img src="tlo.png" alt="Lights" style="width:100%">
  <span onclick="this.parentElement.style.display='none'" 
  class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
  <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Northern Lights</div>
</div>

<script>
function openImg(imgName) {
  var i, x;
  x = document.getElementsByClassName("picture");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(imgName).style.display = "block";
}
</script>

</body>
</html> 
