<?php
// store_duration.php

// Connect to your database if you're using one
// ...

$duration = $_POST['duration']; // Get the duration sent from JavaScript

// Get the user's accumulated call duration from the database or file system
$userCallDuration = getUserCallDuration($userId); // Implement your own function

// Add the current call duration to the accumulated duration
$totalCallDuration = $userCallDuration + $duration;

// Set your maximum call duration limit (in seconds)
$maxCallDurationLimit = 180; // 3 minutes = 180 seconds

// Calculate the remaining time
$remainingTime = $maxCallDurationLimit - $totalCallDuration;

// Update the user's call duration in the database or file system
updateUserCallDuration($userId, $totalCallDuration); // Implement your own function

// Return the remaining time in seconds
echo $remainingTime;
?>
