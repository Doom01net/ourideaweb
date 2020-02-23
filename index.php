
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TRY some CODE here</title>
        <meta name="description" content="An interactive getting started guide for our project.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <h1> Welcome and let's try to do some stuff</h1>
        <p>Let's say we need to make a user input something in a <i>field</i> and another label will show a result of what they entered.</p>
        
        <?php
	 $a = " ";
	 $b = " ";
	 $sum = " ";?>
        <form name="form" action="" method="get">
            <label id="num1">Enter a number here</label><br>
            <!--- The field below has ID num1 -->
            <input type="number" name="num1"><br>
            
            <!--- The field below has ID num2 -->
            <label for="num2">Enter a number here</label><br>
            <input type="number"  name="num2">
	    <input type="submit" name="submit" value="Submit">
        </form>
            

        <!-- possible space for computation -->
        <?php 
        
	 if(isset($_GET['num1'])){    
	    $a = $_GET['num1'];
	    $b = $_GET['num2'];
	    $sum = $a + $b;
	    
	    }
        ?>
        <h1>The sum of <?php echo $a;?> and <?php echo $b;?> is </h1>
        <h2><?php if($sum != 0) { echo "Sum is ", $sum;} ?></h2>
        
        <?php session_destroy(); ?>
        
    </body>
</html>
