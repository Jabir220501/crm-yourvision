<?php
function calculateRemainingTime($deadline)
{
    $currentDate = new DateTime(); // Current date
    $deadlineDate = new DateTime($deadline); // Deadline date

    // Calculate the difference between the current date and the deadline
    $interval = $deadlineDate->diff($currentDate);

    // Calculate total days remaining
    $totalDays = $interval->days;

    // Display the remaining time based on days
    if ($totalDays > 0) {
        if ($totalDays === 1) {
            return '1 day left';
        } elseif ($totalDays <= 7) {
            return $totalDays . ' days left';
        } else {
            $weeks = ceil($totalDays / 7);
            if ($weeks === 1) {
                return '1 week left';
            } else {
                return $weeks . ' weeks left';
            }
        }
    } else {
        // Calculate remaining hours if deadline is within the same day
        $hours = $interval->h;
        $minutes = $interval->i;

        if ($hours > 0) {
            return $hours . ' hours left';
        } elseif ($minutes > 0) {
            return $minutes . ' minutes left';
        } else {
            return 'Less than a minute left';
        }
    }
}

function determineBackgroundColor($remainingTime)
{
    if (strpos($remainingTime, 'week') !== false) {
        return 'primary';
    } elseif (strpos($remainingTime, 'day') !== false) {
        return 'warning';
    } elseif (strpos($remainingTime, 'minute') !== false || strpos($remainingTime, 'hour') !== false) {
        return 'error';
    } else {
        return ''; // Default or fallback color
    }
}
?>