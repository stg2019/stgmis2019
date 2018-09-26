<?php
$time = date('H:i:s');
$currentTime = date('Y-m-d H:i:s');
$toTime = strtotime($currentTime);

//And the time the notification was set
$fromTime = strtotime($time);

//Now calc the difference between the two
$timeDiff = floor(abs($toTime - $fromTime) / 60);

//Now we need find out whether or not the time difference needs to be in
//minutes, hours, or days
if ($timeDiff < 2) {
$timeDiff = "Just now";
} elseif ($timeDiff > 2 && $timeDiff < 60) {
$timeDiff = floor(abs($timeDiff)) . " minutes ago";
} elseif ($timeDiff > 60 && $timeDiff < 120) {
$timeDiff = floor(abs($timeDiff / 60)) . " hour ago";
} elseif ($timeDiff < 1440) {
$timeDiff = floor(abs($timeDiff / 60)) . " hours ago";
} elseif ($timeDiff > 1440 && $timeDiff < 2880) {
$timeDiff = floor(abs($timeDiff / 1440)) . " day ago";
} elseif ($timeDiff > 2880) {
$timeDiff = floor(abs($timeDiff / 1440)) . " days ago";
}

echo  $timeDiff;

?>