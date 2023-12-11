<?php

//  ATTENTION!
//
//  DO NOT MODIFY THIS FILE BECAUSE IT WAS GENERATED AUTOMATICALLY,
//  SO ALL YOUR CHANGES WILL BE LOST THE NEXT TIME THE FILE IS GENERATED.
//  IF YOU REQUIRE TO APPLY CUSTOM MODIFICATIONS, PERFORM THEM IN THE FOLLOWING FILE:
//  /home/zuelligf/public_html/wp-content/maintenance/template.phtml


$protocol = $_SERVER['SERVER_PROTOCOL'];
if ('HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol) {
    $protocol = 'HTTP/1.0';
}

header("{$protocol} 503 Service Unavailable", true, 503);
header('Content-Type: text/html; charset=utf-8');
header('Retry-After: 600');
?>

<html>
    <head>
        <title>Undergoing Maintenance</title>
        <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">-->
        <style>
          h2 { font-size: 37px; font-weight: 400; text-align: center;}
          a { color: #fff; font-weight: bold;}
        </style>
    </head>

<body style="padding: 0; margin: 0; width: 100%; height: 100%; font-family: Open Sans; font-weight: 100; font-size: 15px; color: #00369b; text-align: center; text-align: center; padding: 0; background-image: url('https://zuelligfoundation.ngo/wp-content/uploads/2023/10/bg2.jpg')">
    <!--<article>-->
        <br>
        <img src="https://zuelligfoundation.ngo/wp-content/uploads/2023/10/logo.png" width="250px">
        <h2>Our Website is Undergoing Maintenance!</h2>
        <div>
            <p style='font-weight: 400;'>Thank you for visiting our website. We are currently undergoing maintenance to improve your user experience.<br>We apologize for any inconvenience this may cause. During this time, our website will be unavailable.<br>We expect it to be accessible by January 1, 2024.</p>
    		<p style='font-weight: 400;'>In the meantime, you can follow us on social media for updates on our progress. <br>You can also visit our social media pages for more information about our knowledge products and services. <br><a style="text-decoration:none; color:#00369b" href="https://twitter.com/i/flow/login?redirect_after_login=%2Fzff_foundation">Twitter</a>, <a style="text-decoration:none; color:#00369b" href="https://www.facebook.com/zuelligfamilyfoundation">Facebook</a>, <a style="text-decoration:none; color:#00369b" href="https://www.instagram.com/zuellig_family_foundation/">Instagram</a>, <a style="text-decoration:none; color:#00369b" href="https://www.youtube.com/@ZuelligFamilyFoundation">YouTube</a>, <a style="text-decoration:none; color:#00369b" href="https://www.linkedin.com/company/zuellig-family-foundation/">LinkedIn</a>, <a style="text-decoration:none; color:#00369b" href="https://www.tiktok.com/@zuelligfamilyfoundation">TikTok</a>, <a style="text-decoration:none; color:#00369b" href="https://open.spotify.com/show/0Uc6dCUTsA0E9BLQB6hiLg?si=0a12992ff86e4629&nd=1">Spotify</a></p>
    		<p style='font-weight: 400;'>We appreciate your patience and understanding </p>
    		<p style='font-weight: 400;'>Sign up for our email list to be notified when our website is up and running by Jan 1, 2024.</p>
    		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSePeEg7jr22dgXbLBoBD9H11eQUz8T0s2Ontm4KDJ2dYUdX2g/viewform?embedded=true" width="440" height="206" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    		<p style='font-weight: 400;'>We thank you for your continued support.</p>
        </div>
    <!--</article>-->
</body>
</html>