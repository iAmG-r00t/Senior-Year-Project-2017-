<!DOCTYPE html>
<html>
<title>ADMIN-PORTAL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://lh3.ggpht.com/yT9mrxqbmmvKYvb1hEQiBYEVMQXAgJ3Zb4xiC10MrqcTWe8kVftt_U91VwbEfdbTxhrO=w300"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}

</style>

<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
  <a href="#config" onclick="w3_close()" class="w3-bar-item w3-button">Config Files</a>
  <a href="#surveillance" onclick="w3_close()" class="w3-bar-item w3-button">Surveillance</a>
  <a href="#network" onclick="w3_close()" class="w3-bar-item w3-button">Network</a>
  <a href="user_function/Users_Portal.php" onclick="w3_close()" class="w3-bar-item w3-button">Users</a>
  <a href="Backup.php" onclick="w3_close()" class="w3-bar-item w3-button">Backup</a>
  <a href="Logout_Button.php" onclick="w3_close()" class="w3-bar-item w3-button">LogOut</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <!-- administrator container -->
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-64"><span class="w3-tag w3-wide">-ADMINISTRATOR-</span></div>
  </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
<!-- welcome Container -->
<h1 id="home" class="w3-center w3-padding-64" class="w3-tag w3-wide">-WELCOME-</h1>
<center><img class="w3-round w3-grayscale-min" src="http://www.wpzest.com/wp-content/uploads/2015/10/admin-login31.jpg"></center>

<div class="w3-content" style="max-width:700px">
  <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"The best System Admins are the Lazy ones,"</i></p>
      <p>By Sys-Admin:<strong>zK9@zahir</strong></p>
  </div>
</div>

<!-- config files container -->
<div class="w3-container" id="config">
  <div class="w3-content" style="max-width:700px">
    <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">CONFIG FILES</span></h2>
    <center><p>Dear Admin Here are the files for setting up the <strong>I.O.T BOX ??</strong> to get started to using it !!</p></center>
    <!--config files-->
    <div class="w3-row w3-center">
      <div class="w3-half">
        <p><a href="../config-files/STEP-1.pdf" title="*Step 1*" target="open" class="w3-hover-text-green">*STEP-1*</a></p>
        <p><a href="../config-files/STEP-2.pdf" title="*Step 2*" target="open" class="w3-hover-text-green">*STEP-2*</a></p>
        <p> <a href="../config-files/STEP-3.pdf" title="*Step 3*" target="open" class="w3-hover-text-green">*STEP-3*</a></p>
      </div>

      <div class="w3-half w3-center">
        <p><a href="../config-files/STEP-4.pdf" title="*Step 4*" target="open" class="w3-hover-text-green">*STEP-4*</a></p>
        <p><a href="../config-files/STEP-5.pdf" title="*Step 5*" target="open" class="w3-hover-text-green">*STEP-5*</a></p>
        <p><a href="../config-files/STEP-6.pdf" title="*Step 6*" target="open" class="w3-hover-text-green">*STEP-6*</a></p>
      </div>
      
      <p>You are <strong>STRONGLY ADVISED</strong> these configuration files guide you to set up your I.0.T BOX to <strong>!!DEFAULT SETTINGS!!</strong>, for security purposes while setting up the I.0.T B0X <strong>CHANGE</strong> the !!default settings!!</p>

    </div>
  </div>
</div>
  
<!-- surveillance Container -->
<div class="w3-container" id="surveillance">
  <div class="w3-content" style="max-width:700px">
    <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">SURVEILLANCE</span></h2>
        <!-- live stream container -->
  <div class="w3-container">
            <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">LIVE STREAM</span></h2>
          
            <center><p>Kindly input the IP ADDRESS fo the I.O.T B0X the one you attained from step 2 config file, then click the live stream button</p></center>

            <center><p>The Credentials LogIn details are:</p></center>
            <center><p><strong>Username:</strong> pi</p></center>
            <center><p><strong>Password:</strong> ra5p1E</p></center>

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
    
    <div class="w3-container">
    <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">LOGS</span></h2>

    <center><p>Real Time Logs:</p></center>
          <center><p><button class="w3-button w3-green w3-border w3-border-white" type="submit" name="WebServer" onclick="process3()">ACTIVE DIRECTORY</button></p></center>

    <!--Active Directory button function Script-->
          <script>
      function process3(){
            var url1 = "http://192.168.0.100:8000";
      window.open(url1);}
          </script>
    
    </div>
  </div>

<!-- Network Container -->
<div class="w3-container" id="network">
  <div class="w3-content" style="max-width:700px">
    <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">NETWORK</span></h2>
        <!-- live stream container -->
  <div class="w3-container">
            <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">HoneyPot Access</span></h2>
          
            <p>Kindly input the IP ADDRESS fo the I.O.T B0X the one you attained from **** config file, then click the Access HoneyPot button</p>

            <p><strong>IP ADDRESS</strong> :</p>
          <form>
            <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="IP ADDRESS" id="ip_address_2"></p>
            <center><p><button class="w3-button w3-green w3-border w3-border-white" type="submit" name="livestream" onclick="process1()">ACCESS HONEYPOT</button></p></center>
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

  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-padding-48 w3-medium">
  <p>Powered by <br>gr00t@/g3k1e</a></p>
</footer>
        
  
<!-- !End page content! -->
</div>

<!--Script to open and close sidebar-->
<script>

function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

</script>

</body>
</html>