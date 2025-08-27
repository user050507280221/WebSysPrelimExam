<?php
 if ($_POST) {
    $quiz = $_POST['quiz'];
    $assign = $_POST['asssign'];
    $exam = $_POST['exam'];
    $operation = $_POST['operation'];
    $result = 0;
    $error = "";
    

    switch ($operation) {
        case '+':
            $result = ($quiz * 0.3) + ($assign * 0.3) + ($exam * 0.4);
            break;
        case '-':
            $result = ($quiz * 0.3) - ($assign * 0.3) - ($exam * 0.4);
            break;
        case '*':
            $result = ($quiz * 0.3) * ($assign * 0.3) * ($exam * 0.4);
            break;
        case '/':
            if ($assign != 0) {
                $result = $quiz / $exam;
            } else {
                $error = "Cannot divide by zero!";
            }
            break;
    }
    
    if ($error){
        echo "<p class='result' style='color: red;'>$error</p>";
    } else {
        echo "<p class='result'>Result: $quiz $operation $assign $exam = $result</p>";
    }
}
 ?>