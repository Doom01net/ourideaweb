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
        
        
        <form>
            <label id="num1">Enter a number here</label><br>
            <!--- The field below has ID num1 -->
            <input type="number" id="num1" name="number1"><br>
            
            <!--- The field below has ID num2 -->
            <label for="num2">Enter a number here</label><br>
            <input type="number" id="num2" name="number2">
        </form>
            <button type="button" id="btn"> Hit this to compute!</button>

        <!-- possible space for computation -->
        <?php 
        echo("He!");
        ?>
        <h1>The sum of [replace with num1] and [replace with num2] is </h1>
        <h2>[Answer]!</h2>
        
        
        
    </body>
</html>
