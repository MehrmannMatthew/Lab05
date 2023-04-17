<!doctype html>
<head>
    <link href="style.css" 
    rel="stylesheet" 
    type="text/css"/> 
</head>
<header id="pageHeader">Excercise 2</header>
<article> 
    <?php 
        $total_correct = 0;
        $answer1 = $_POST['q1'];
        $answer2 = $_POST['q2'];
        $answer3 = $_POST['q3'];
        $answer4 = $_POST['q4'];
        $answer5 = $_POST['q5'];
        if($answer1 == 'C'){
            $total_correct++;
        }
        if($answer2 == 'D'){
            $total_correct++;
        }
        if($answer3 == 'D'){
            $total_correct++;
        }
        if($answer4 == 'D'){
            $total_correct++;
        }
        if($answer5 == 'A'){
            $total_correct++;
        }
        $score = ($total_correct/5)*100;
        echo "<div>" . "Number Correct: " . $total_correct . "<br>" . "Score: " . $score . "%" . "</div>";
    ?>
    <div id="Quiz">
        <form>
            <div class= <?php if($answer1 == 'C'){echo "correct";}else{echo "false";}?>>
            Which of the following are not covered by the term software architecture? <br>
            </div>
            <input type="radio" id="q1_1" name="q1" value="A" <?php if($answer1 == 'A'){echo "checked=checked";}?>>
            <label for="q1_1">(A) Interfaces</label><br>
            <input type="radio" id="q1_2" name="q1" value="B" <?php if($answer1 == 'B'){echo "checked=checked";}?>>
            <label for="q1_2">(B) Components</label><br>
            <input type="radio" id="q1_3" name="q1" value="C" <?php if($answer1 == 'C'){echo "checked=checked";}?>> <!-- Correct Answer -->
            <label for="q1_3">(C) Coding Conventions</label><br>
            <input type="radio" id="q1_4" name="q1" value="D" <?php if($answer1 == 'D'){echo "checked=checked";}?>>
            <label for="q1_4">(D) Cross-cutting concepts</label><br><br>

            <b> Correct Answer: (C) Coding Conventions</b><br>
            <b> You Selected: <?php echo $answer1;?></b><br><br><br>

            <div class= <?php if($answer2 == 'D'){echo "correct";}else{echo "false";}?>>
            A software architecture is represented in terms of the following except: <br>
            </div>
            <input type="radio" id="q2_1" name="q2" value="A" <?php if($answer2 == 'A'){echo "checked=checked";}?>> 
            <label for="q2_1">(A) Software connectors</label><br>
            <input type="radio" id="q2_2" name="q2" value="B" <?php if($answer2 == 'B'){echo "checked=checked";}?>>
            <label for="q2_2">(B) Software components</label><br>
            <input type="radio" id="q2_3" name="q2" value="C" <?php if($answer2 == 'C'){echo "checked=checked";}?>> 
            <label for="q2_3">(C) Configuration (or topology)</label><br>
            <input type="radio" id="q2_4" name="q2" value="D" <?php if($answer2 == 'D'){echo "checked=checked";}?>> <!-- Correct Answer -->
            <label for="q2_4">(D) A set of use cases</label><br><br>

            <b> Correct Answer: (D) A set of use cases</b> <br>
            <b> You Selected: <?php echo $answer2;?></b><br><br><br>

            <div class= <?php if($answer3 == 'D'){echo "correct";}else{echo "false";}?>>
            Design guidelines for layered architecture includes which of the following? <br>
            </div>
            <input type="radio" id="q3_1" name="q3" value="A" <?php if($answer3 == 'A'){echo "checked=checked";}?>>
            <label for="q3_1">(A) The architectural model is a high-level model that does not include implementation information.</label><br>
            <input type="radio" id="q3_2" name="q3" value="B" <?php if($answer3 == 'B'){echo "checked=checked";}?>>
            <label for="q3_2">(B) Within each layer, the components are independent and do not overlap in functionality.</label><br>
            <input type="radio" id="q3_3" name="q3" value="C" <?php if($answer3 == 'C'){echo "checked=checked";}?>> 
            <label for="q3_3">(C) Each layer is an area of concern and is considered separately from other layers.</label><br>
            <input type="radio" id="q3_4" name="q3" value="D" <?php if($answer3 == 'D'){echo "checked=checked";}?>> <!-- Correct Answer -->
            <label for="q3_4">(D) All of the above.</label><br><br>

            <b> Correct Answer: (D) All of the above.</b> <br>
            <b> You Selected: <?php echo $answer3;?></b><br><br><br>
            
            <div class= <?php if($answer4 == 'D'){echo "correct";}else{echo "false";}?>>
            An architecture is separated into ordered layers. Which of the following is correct?<br>
            </div>
            <input type="radio" id="q4_1" name="q4" value="A" <?php if($answer4 == 'A'){echo "checked=checked";}?>>
            <label for="q4_1">(A) Each layer serves as a “server” to the layer above.</label><br>
            <input type="radio" id="q4_2" name="q4" value="B" <?php if($answer4 == 'B'){echo "checked=checked";}?>>
            <label for="q4_2">(B) Each layer servers as a “client” of the layer below.</label><br>
            <input type="radio" id="q4_3" name="q4" value="C" <?php if($answer4 == 'C'){echo "checked=checked";}?>> 
            <label for="q4_3">(C) Changes in a layer affect at most the adjacent two layers, thus increased opportunity for reuse.</label><br>
            <input type="radio" id="q4_4" name="q4" value="D" <?php if($answer4 == 'D'){echo "checked=checked";}?>> <!-- Correct Answer -->
            <label for="q4_4">(D) All are correct statements.</label><br><br>

            <b> Correct Answer: (D) All are correct statements</b> <br>
            <b> You Selected: <?php echo $answer4;?></b><br><br><br>
            
            <div class= <?php if($answer5 == 'A'){echo "correct";}else{echo "false";}?>>
            During architectural design, "Performance" and "Maintainability" conflict with each other.<br>
            </div>
            <input type="radio" id="q5_1" name="q5" value="A" <?php if($answer5 == 'A'){echo "checked=checked";}?>> <!-- Correct Answer -->
            <label for="q5_1">(A) True</label><br>
            <input type="radio" id="q5_2" name="q5" value="B" <?php if($answer5 == 'B'){echo "checked=checked";}?>>
            <label for="q5_2">(B) False</label><br>
            <input type="radio" id="q5_3" name="q5" value="C" <?php if($answer5 == 'C'){echo "checked=checked";}?>> <!-- Correct Answer -->
            <label for="q5_1">(C) Don't know</label><br>
            <input type="radio" id="q5_4" name="q5" value="D" <?php if($answer5 == 'D'){echo "checked=checked";}?>>
            <label for="q5_2">(D) Don't care</label><br><br>
            <?php if($answer5 == 'D'){echo '<script>alert("That was not cool. Cannot believe you would pick that")</script>';}?>
            <b> Correct Answer: (A) True </b> <br>
            <b> You Selected: <?php echo $answer5;?></b><br><br><br>
        </form>
    </div>
</article>

<nav id="mainNav">
    <div class="home">
        <a href="index.html"><button class="homebtn" id="home">Home</button></a>
        <br>
    </div>
    <div class="dropdown">
    <button class="dropbtn">EECS 448</button>
        <div class="dropdown-content">
        <a href="exerciseOneLab06.php">Exercise 1</a>
        <a href="exerciseTwoLab06.html">Exercise 2</a>
        <a href="exerciseThreeLab06.html">Exercise 3</a>
        </div>
    </div> 
</nav>

<footer id="pageFooter"><a href="https://www.linkedin.com/in/matt-mehrmann-80333a165/">LinkedIn</a></footer>