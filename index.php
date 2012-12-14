<?php
/*
 * index.php
 * Copyright 2012 Gayan Chathuranga <gayan@malditanight.com>
 *
 */
//http://colinwren.com/foursquare-tutorial-part-1/
$client_id = "TJ5HKZMIDFJPDCG1J4YVIV4BNVLSD2HFRYNTUBNAH332AMVL";
$secret = "N34JESVZOKCB1GRRI3FKOQESDF4D3VBFUWQLLFWJVATY2KSR";
$redirect = "http://malditanight.com/lets_out.html";
//access token = XGDHZOY53XEMPDDY3SDGSV4IRNNGGYSYHBKMSDTN5S5NTZ0I
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Maldita Night - Hottest Spots, Go Out</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="generator" content="Geany 0.20" />
        <style>
            body{
                font-family: serif;

            }

            #content{
                background-image:url('imgs/maldita_banner.jpg');
                margin: auto;
                margin-top: 5px;
                width: 70%;
                height: 200px;
                padding: 25px;
                border-radius: 10px;
                background-color: #828C35;
                box-shadow: 1px 1px 5px grey;
            }

            #logo{
                background-image:url('imgs/logo.jpg');
                background-repeat:no-repeat;
                margin-top: 50px;
                margin-left: 185px;
                width: 180px;;
                height: 80px;
                padding: 25px;
                border-radius: 10px;
            }

            #content p{
                color: #5C4A14;
                font-size: 2em;
            }

            #content p a{
                color: #5C4A14;
                text-shadow: 1px 1px 50px #FFFFFF;
            }


            #footer .left{
                float: left;
                clear: right;
            }

            #footer .right{
                float: right;
                width: 236px;
            }

        </style>

    </head>


    <body>
        <div id="logo"></div>
        <div id="content">

            <p style="margin-top: 90px; margin-left: 100px; "><a href="https://foursquare.com/oauth2/authenticate?client_id=<?php echo $client_id; ?>&response_type=code&redirect_uri=<?php echo $redirect; ?>" title="Sign In With FourSquare"><img src="imgs/signin_foursquare.png"></img></a></p>

        </div>


    </body>
</html>