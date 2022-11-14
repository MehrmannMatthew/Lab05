<!doctype html>
<head>
    <link href="style.css" 
    rel="stylesheet" 
    type="text/css"/> 
</head>
<header id="pageHeader">Excercise 3</header>
<article> 
    <div id="ForSale">
    <?php
        $password = $_POST['password'];
        $username = $_POST['email'];
        $shippingCost = $_POST['ss'];
        $shippingSpeed = $shippingCost == 0.00 ? 'Free 7 Day' : $shippingCost == 50.00 ? 'Overnight' : 'Three Day';
        $keyboard = $_POST['keyboard'];
        $mouse = $_POST['mouse'];
        $headphones = $_POST['headphones'];
        $keyboardTotalCost =number_format($keyboard * 80.00, 2, "." , ","); 
        $mouseTotalCost = number_format($mouse * 100.00, 2, "." , ","); 
        $headphonesTotalCost = number_format($headphones * 350.00, 2, "." , ","); 
        $subtotal = number_format($keyboardTotalCost + $mouseTotalCost + $headphonesTotalCost, 2, "." , ","); 
        $taxes =number_format($subtotal * .075, 2, "." , ","); 
        $total =number_format($subtotal + $taxes + $shippingCost, 2, "." , ",");
    

    ?>
    <h1>Welcome <?php echo $username;?></h1>
    <h3>Password: <?php echo $password;?></h3>
    <table class=ReceiptTable>
    <caption><h3>Receipt</h3></caption>
    <tr class=ReceiptTable>
        <th class=ReceiptTd>Item</th>
        <th class=ReceiptTd>Quanity</th>
        <th class=ReceiptTd>Cost Per Item</th>
        <th class=ReceiptTd>Sub Total</th>
    <tr>
    <tr class=ReceiptTable>
        <td class=ReceiptTd>Keyboard</td>
        <td class=ReceiptTd><?php echo $keyboard;?></td>
        <td class=ReceiptTd>$80.00</td>
        <td class=ReceiptTd>$<?php echo $keyboardTotalCost;?></td>
    </tr> 
    <tr class=ReceiptTable>
        <td class=ReceiptTd>Mouse</td>
        <td class=ReceiptTd><?php echo $mouse;?></td>
        <td class=ReceiptTd>$100.00</td>
        <td class=ReceiptTd>$<?php echo $mouseTotalCost;?></td>
    </tr> 
    <tr class=ReceiptTable>
        <td class=ReceiptTd>Headphones</td>
        <td class=ReceiptTd><?php echo $headphones;?></td>
        <td class=ReceiptTd>$350.00</td>
        <td class=ReceiptTd>$<?php echo $headphonesTotalCost;?></td>
    </tr> 
    <tr class=ReceiptTable>
        <td class=ReceiptTd>Shipping</td>
        <td class=ReceiptTd colspan="2"><?php echo $shippingSpeed;?></td>
        <td class=ReceiptTd>$<?php echo $shippingCost;?></td>
    </tr> 
    <tr class=ReceiptTable>
        <td class=ReceiptTd>Taxes</td>
        <td class=ReceiptTd colspan="2">7.5%</td>
        <td class=ReceiptTd>$<?php echo $taxes;?></td>
    </tr> 
    <tr class=ReceiptTable>
        <td class=ReceiptTd>Total</td>
        <td class=ReceiptTotal colspan=3>$<?php echo $total;?></td>
    </tr>    
    </table>
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