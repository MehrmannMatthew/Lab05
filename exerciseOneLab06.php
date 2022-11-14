<!doctype html>
<head>
    <link href="style.css" 
    rel="stylesheet" 
    type="text/css"/> 
</head>
<header id="pageHeader">Excercise 1</header>
<article> 
    <table class=multTable border=1>
        <?php 
        for($y = 0; $y <= 100; $y++){
            echo "<tr>";
            for($x = 0; $x <=100; $x++){
                echo "<td" . ($y == $x ? " class=square>" : ">");
                echo ($y == 0 ? ($x == 0 ? " " : $x) : ($x == 0 ? $y : $y*$x));
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
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