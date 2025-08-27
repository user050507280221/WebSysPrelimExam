<?php

if ($_POST) {
    $qu1z1 = $_POST['qu1z1']; // Score sa quiz
    $ass1gn1 = $_POST['ass1gn1']; // Score sa assignment
    $ex4m1 = $_POST['ex4m1']; // Score sa exam
    

     // Kailngan nng number at mamimili lang sa 0 - 100  numbers and ichecheck if valid ba ang ilalagay na inputs
    if (is_numeric($qu1z1) && is_numeric($ass1gn1) && is_numeric($ex4m1) &&
        $qu1z1 >= 0 && $qu1z1 <= 100 &&
        $ass1gn1 >= 0 && $ass1gn1 <= 100 &&
        $ex4m1 >= 0 && $ex4m1 <= 100) {
       
    // ICcompute yung final grade gamit yung weights
         $result = ($qu1z1 * 0.3) + ($ass1gn1 * 0.3) + ($ex4m1 * 0.4);
    // Malalaman if anong kalalabasan ng grde.. letter grade
         if ($result >= 90) {
            $letter = "A";
        } elseif ($result >= 80) {
            $letter = "B";
        } elseif ($result >= 70) {
            $letter = "C";
        } elseif ($result >= 60) {
            $letter = "D";
        } else {
            $letter = "F";
        }
    
        
// ipapakita na sa screen ung final grde and ung letter after macompute
echo "<div class='result'>Final Grade: " . number_format($result, 1) . "<br> Letter Grade: $letter</div>";
} else { 

//kung mali yung input na nilagay, pag ma letter na nilagay or negative, sasabihin na mali yung input
echo "<div class='result' style='color:red;'>Invalid input. Please enter numbers between 0 and 100.</div>";
    }
}
?>