<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $answers = array($_POST['question1'], $_POST['question2'], 
        $_POST['question3'], $_POST['question4'], 
        $_POST['question5']);
    $questions = array("Question 1: As of 2018, how many consecutive Big 12 Championships does the University of Kansas have in basketball?",
        "Question 2: How many NCAA Tournament championships does the KU basketball team have?",
        "Question 3: Who is the GOAT college basketball coach?",
        "Question 4: How many losses does Bill Self have at Allen Fieldhouse",
        "Question 5: What is the best College Basketabll Arena");
    $correctAnswers = array("14","3","Bill Self", "13", "Allen Fieldhouse");
    $totalCorrect = 0;
    $correctPercent = 0;

    for ($i=0; $i < 5; $i++) { 
        echo $questions[$i] . "<br>";
        echo "You answered: " . $answers[$i] . "<br>";  
        echo "Correct answer: " . $correctAnswers[$i] . "<br>";
        echo "<br>";
        if($answers[$i] == $correctAnswers[$i]){
            $totalCorrect++;
        }
    }

    echo "Correct answers: " . $totalCorrect . "<br>";
    $correctPercent = ($totalCorrect/5)*100;
    echo "Score: %" . $correctPercent;

?>