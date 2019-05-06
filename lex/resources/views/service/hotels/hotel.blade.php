<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('css/assets/hotel.css') }}">
</head>
<body>
<h1 align="center"><b>Hotels</b></h1>
<h2 align="center"><b>Clickable Dropdown</b></h2>
<p align="center"><b>Click on the button to show the Cities</b></p>

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Cities</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="/hotel/Dhaka">Dhaka</a>
    <a href="/hotel/Chittagong">Chittagong</a>
    <a href="/hotel/Sylhet">Sylhet</a>
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


</body>
</html>









