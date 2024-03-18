<?php

// Function to calculate rectangle area
function calculateRectangleArea($length, $width) {
  if (!is_numeric($length) || !is_numeric($width)) {
    return "Error: Please enter valid numeric values for length and width.";
  } else {
    $area = $length * $width;
    return "The area of the rectangle is " . $area . ".";
  }
}

// Function to calculate circle area
function calculateCircleArea($radius) {
  if (!is_numeric($radius)) {
    return "Error: Please enter a valid numeric value for radius.";
  } else {
    $pi = 3.14159; // Define pi constant
    $area = pi * ($radius * $radius);
    return "The area of the circle is " . $area . ".";
  }
}

// Get user input for rectangle
$rectLength = readline("Enter the length of the rectangle: ");
$rectWidth = readline("Enter the width of the rectangle: ");

// Calculate and display rectangle area
$rectangleAreaResult = calculateRectangleArea($rectLength, $rectWidth);
echo $rectangleAreaResult . "\n";

// Get user input for circle
$circleRadius = readline("Enter the radius of the circle: ");

// Calculate and display circle area
$circleAreaResult = calculateCircleArea($circleRadius);
echo $circleAreaResult . "\n";

?>
