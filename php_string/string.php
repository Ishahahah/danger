<?php
function transformString($inputString, $option) {
    switch($option) {
        case 'UC':
            return strtoupper($inputString); // Convert to uppercase
        case 'LC':
            return strtolower($inputString); // Convert to lowercase
        case 'FCUC':
            return ucfirst(strtolower($inputString)); // Convert first character to uppercase
        default:
            return "Invalid option.";
    }
}

// Example usage:
$string = "hello, World!";
echo "Original string: " . $string . "<br>";

echo "String in UPPERCASE: " . transformString($string, 'UC') . "<br>";
echo "String in lowercase: " . transformString($string, 'LC') . "<br>";
echo "String with First Character in Uppercase: " . transformString($string, 'FCUC') . "<br>";
?>

