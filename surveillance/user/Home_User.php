<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="shortcut icon" href="http://cdns2.freepik.com/free-photo/bird-house-with-small-round-hole_318-36741.jpg"/>
<title>HOME USER</title>
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("http://www.tbotech.com/blog/wp-content/uploads/Video-Surveillance.jpg");
    min-height: 75%;
}
.menu {
    display: none;
}
</style>
<body>

<!-- Navigation Button Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <!--home button -->
    <div class="w3-col s3">
      <a href="#home" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <!--about button -->
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-black w3-block">ABOUT</a>
    </div>
    <!--surveillance button -->
    <div href="#surveillance" class="w3-dropdown-hover">
    <button class="w3-button w3-black">SURVEILLANCE</button>
    <!--live stream and view logs button -->
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#live_stream" class="w3-bar-item w3-button w3-black">LIVE STREAM</a>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#logs" class="w3-bar-item w3-button w3-black">VIEW LOGS</a>
    </div>
    </div>
    </div>
    <!--network monitoring button -->
    <div class="w3-col s3">
      <a href="#network_monitoring" class="w3-button w3-block w3-black">NETWORK MONITORING</a>
    </div>
</div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-center w3-padding-large w3-hide-small">
    <h4><span class="w3-tag">Home Surveillance And Network Monitoring System</span></h4>
  </div>
</header>

<!-- Add a background color -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h1 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE SYSTEM</span></h1>
    <p>The system will enable you to monitor, live stream and view and monitor the network activities.</p>

    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Security is just an illusion, us the users are the weakest link to a secure system but it is worth knowing all that and knowing what lies around your shadow preying just to wait for the right time to take its next move and attack"</i></p>
      <p>Cyber Security Enthusiast:<strong>gr00t@/g3k1e</strong></p>
    </div>
    <p><strong>1.</strong> So for monitoring A.K.A surveillance you as the user will be having an upper advantage of live streaming from anywhere you are that personal space, the live stream is secured with login credentials which the <strong>ADMIN</strong> has set and availled to you just on top of the llive stream section.</p>

    <p><strong>2.</strong> For Network monitoring you will be dealing with two kinds of systems installed in your I.O.T BOX, a <b>Low Interactive HoneyPot</b> and a WiFi Monitoring, Intrusion Detection And Forensics tool known as <b>Nzyme</b>.</p>

    <p> Do you know what a Low Interactive HoneyPot is ?, if not watch the video below to know what you are dealing with !!</p>

    <!--honeypot video-->
    <div class="table-responsive">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/9zhnlTHtwKM" frameborder="0" allowfullscreen></iframe>
    </div>

    <p>so why the honeypot i guess you know why, Plus it will be acting as your DMZ host hence it is the first line of defence to your home network/work network!!</p>

    <p>The Other tool that helps you analyze your WiFi network and works as a Intrusion Detection and will help you in Wireless Forensics is called <strong>Nzyme</strong>, I bet you have not heard of it and if you haven't you are in good luck because below is a link of the video about the tool, and if you have heard of it then you are in luck again to see it at work where it logs details in an open source log management system known as graylog where the admin himself will provide you with login details to access the web server. so goodluck!!</p>

    <!--Nzyme video and documentation url-->
    <div class="table-responsive">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/bi12FkXghmo" frameborder="0" allowfullscreen></iframe>
  </div>

    <img src="http://www.gfi.com/blog/wp-content/uploads/2012/02/DDoS-attacks.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
  </div>
</div>

<!-- Surveillance Container -->
<!-- so this button it doesn't call would you mind fixing it for me kindly-->
<div class="w3-container" id="surveillance">
  <div class="w3-content" style="max-width:700px">
      <h1 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">SURVEILLANCE</span></h1>
        <!-- live stream container -->
        <div class="w3-container" id="live_stream">
            <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">LIVE STREAM</span></h2>
            
            <center><p>The Credentials LogIn details are:</p></center>
            <center><p><strong>Username:</strong> pi</p></center>
            <center><p><strong>Password:</strong> ra5p1E</p></center>

            <center><p>Kindly input the IP ADDRESS fo the I.O.T B0X the one you attained from step 2 config file, then click the live stream button</p></center>

            <p><strong>IP ADDRESS</strong> :</p>
          <form>
            <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="IP ADDRESS" id="ip_address_1"></p>
            <center><p><button class="w3-button w3-green w3-border w3-border-white" type="submit" name="livestream" onclick="process()">LIVE STREAM</button></p></center>
          </form>

          <!--Live stream button function Script-->
          <script>
      
      function process(){
              var address = document.getElementById("ip_address_1").value;
              var url = "http://"+address+":9080";
      window.open(url);}

          </script>

      </div>
      <div class="w3-container" id="logs">
          <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">VIEW LOGS</span></h2>
          <center><p>Real Time Logs:</p></center>
          <center><p><button class="w3-button w3-green w3-border w3-border-white" type="submit" name="WebServer" onclick="process3()">ACTIVE DIRECTORY</button></p></center>

    <!--Graylog WebServer button function Script-->
          <script>
      function process3(){
            var url1 = "http://192.168.0.100:8000";
      window.open(url1);}
          </script>
          
      </div>
  </div>
</div>

<!-- Network Monitoring Container -->
<div class="w3-container" id="network_monitoring" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h1 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">NETWORK MONITORING</span></h1>
    <div class="w3-container">
            <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">HoneyPot Access</span></h2>
          
            <center><p>Kindly input the IP ADDRESS fo the I.O.T B0X the one you attained from **** config file, then click the Access HoneyPot button</p></center>

            <p><strong>IP ADDRESS</strong> :</p>
          <form>
            <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="IP ADDRESS" id="ip_address_2"></p>
            <center><p><button class="w3-button w3-green w3-border w3-border-white" type="submit" name="monitor_network" onclick="process1()">ACCESS HONEYPOT</button></p></center>
          </form>

          <!--Monitor Network button function Script-->
          <script>
      function process1(){
            var address1 = document.getElementById("ip_address_2").value;
            var url1 = "http://"+address1;
      window.open(url1);}
          
          </script>

  </div>

  <div class="w3-container">
    <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Nzyme Log Access</span></h2>

    <center><p>The Credentials LogIn details are:</p></center>
      <center><p><strong>Username:</strong> admin</p></center>
      <center><p><strong>Password:</strong> ra5p1E</p></center>
    
    <center><p>Click the GrayLog WebServer Button to login:</p></center>
    <center><p><button class="w3-button w3-green w3-border w3-border-white" type="submit" name="WebServer" onclick="process2()">GRAYLOG WEBSERVER</button></p></center>

    <!--Graylog WebServer button function Script-->
          <script>
      function process2(){
            var url1 = "http://192.168.0.104:9000";
      window.open(url1);}
          </script>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-medium">
  <p>Powered by <br>gr00t@/g3k1e</a></p>
</footer>

<!-- always sits at the bottom -->
<div class="w3-bottom">
  <div class="w3-center">
<!-- Log Out Button container --> 
  <strong><a href="Logout_Button.php" class="w3-button w3-black w3-padding w3-opacity-min w3-hover-opacity-off w3-border w3-border-black w3-medium w3-block">LOG-OUT</a></strong>
  <!--could you help me out hapa pia please-->

</div>
</div>

<!--Tabbed Menu Script-->
<script>

function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }

  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";

</script>

</body>
</html>