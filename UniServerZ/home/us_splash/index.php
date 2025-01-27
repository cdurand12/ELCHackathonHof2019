<?php
$version="";

 if (getenv('HOME') == ''){                       // Not set when running as service
   $root= substr($_SERVER["DOCUMENT_ROOT"],0,-4); // this alternative with limitations
 }                                                // gets path to folder UniServerZ

 else{                                            // Set when run as standard program
   $root= getenv('HOME');                         // this is the ideal method to
 }                                                // get the path to folder UniServerZ


$file="$root\home\us_config\us_config.ini" ;     // Name and path of configuration file

if (file_exists($file) && is_readable($file)){   // Check file
  $settings=parse_ini_file($file,true);          // parse file into an array 
  $version=$settings["APP"]["AppVersion"];       // get parameter
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Uniform Server ZeroXIII - Splash page</title>
<meta name="Description" content="The Uniform Server ZeroXIII 13.4.2" />
<meta name="Keywords" content="The Uniform Server,ZerXIII,MPG,Mike,Ric,UniServer,Olajide,BobS " />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>

<div id="wrap">
  <div id="header">

     <a href="http://www.uniformserver.com"><img src="images/logo.png" align="left" alt="The Uniform Server ZeroXIII" /></a>
       <div id="header_txt2" >
         <div style="position:absolute;">
           <b>ZeroXIII <?php print "- ".$version; ?> </b><br />
           Apache 2.4.39 VC14 <br />
           Mariadb 10.3.17 <br />
           PHP 5.6,7.0,7.1,7.2,7.3 or 7.4
         </div>
       </div>
  </div>

  <div id="content">
    <h2>Welcome to The Uniform Server</h2>
    <p>Welcome to The Uniform Server ZeroXIII default start splash page. This page and every other file are being served by Apache. Information can be found in folder UniServer\docs. Additional support for ZeroXIII see <a target="_1" href="http://www.uniformserver.com/ZeroXIII_documentation/">on-line documentation</a>.</p>
    <p>&nbsp;</p>
    <h2>Server Specification - Plugins</h2>
  <table>
   <tr valign="top">
   <td>
    <ul>
      <li> <b>Apache 2.4.39 VC14 openssl 1.0.2j</b></li>
      <li> MySQL 5.7.27-community</li>
	  <li> MySQL 8.0.17-community</li>
      <li> <b>Mariadb 10.3.17</b></li>
	  <li> Mariadb 10.4.7</li>
      <li> PHP : 7.0.33</li>
      <li> PHP : 7.1.31</li>
	  <li> <b>PHP : 7.2.21</b></li>
	  <li> <b>PHP : 7.3.8</b></li>
	  <li> PHP : 7.4.0-dev</li>
      <li> <b>phpMyAdmin 4.9.0.1</b></li>
      <li> phpMyBackupPro 2.5</li>
    </ul>
   </td>
   <td>
     &nbsp;&nbsp;&nbsp;&nbsp;
   </td>
   <td>
    <ul>
      <li> Adminer  4.2.2</li>
      <li> Strawberry Perl</li>
      <li> ActivePerl via Installer</li>
      <li> APC 	- Dependent on PHP version</li>
      <li> eAccelerator - Dependent on PHP version</li>
      <li> XCache  - Dependent on PHP version</li>
      <li> Zend OpCache - Dependent on PHP version</li>
      <li> <b>OpenSSL/1.0.2j</b></li>
      <li> msmtp 1.4.32 - Mail client for PHP  </li>
      <li> Cron - Scheduler</li>
      <li> DtDNS - IP address updater</li>
      <li> <b>PHP installed as Apache module</b></li>
    </ul>
   </td>
   </tr>
  </table>
  </div>


  <div id="divider"> <a target="_1" href="http://www.uniformserver.com">The Uniform Server</a> | <a target="_1" href="http://sourceforge.net/projects/uniform-server/files/Uniform%20Server%20ZeroXIII/">Downloads</a> | <a target="_1" href="http://wiki.uniformserver.com/index.php/">Wiki</a> | <a target="_1" href="http://forum.uniformserver.com">Support Forum</a> </div>

  <div id="content">
  <p>The Uniform Server is a WAMP package that allows you to run a server on any XP,
 Vista, W7, W8 or W10 Windows OS based computer (UniServer ZeroXIII requires W8+). It is small and quick to download, and can be
 easily moved around. It also can be setup and used as a production/live server.
 Developers can use The Uniform Server to test their applications which require PHP,
 MySQL and the Apache HTTPd Server.</p>
  </div>

  <div id="divider">Developed By <a href="http://www.uniformserver.com/">The Uniform Server Development Team</a><br>Updated By <a href="https://github.com/BrainStormDevel" target="_blank">BrainStorm</a></div>
</div>
</body>
</html>
