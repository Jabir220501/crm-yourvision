<?php
function nameInitials($name)
{
    $parts = explode(' ', $name); // Split the full name into parts
    $initials = '';

    foreach ($parts as $part) {
        $initials .= strtoupper(substr($part, 0, 1)); // Extract the first letter of each part and convert to uppercase
    }

    return $initials;
}
?>