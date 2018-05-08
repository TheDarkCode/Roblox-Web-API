<?php

$cookie = "YOURROBLOXCOOKIEHERE";
$groupid = "THEGROUPIDTOPAYOUTFROM";
$amount = "THEAMOUNT OF ROBUX TO PAYOUT";

$url = 'https://rbx.land/api/payout.php?cookie=.ROBLOSECURITY='. $cookie .';&groupid='. $groupid .'&user=' . $robloxid .'&amount='. $amount;
$contents = file_get_contents($url);
       if($contents !== false){
          echo $contents;
        }
        ?>