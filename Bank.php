<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
</head>
<body>
    
<div class="container">
<center><h1>Bank Application - Loan Department </h1></center>
    <form method="post">
        Client Name : </br> <input type="text" name="txtname" value="<?php echo isset($_POST['txtname'])?$_POST['txtname']:'' ?>" class="form-control"/><br>
        Loan Value : </br> <input type="text" name="txtloan" class="form-control" value="<?php echo(isset($_POST["txtloan"])?$_POST["txtloan"]:'') ?>" /><br>
        Rate Percentage : </br> <input type="text" name="txtrate" class="form-control" value="<?php echo isset($_POST['txtrate'])?$_POST["txtrate"]:'' ?>" /><br>
        No Of Years : </br> <input type="text" name="txtyears" 
        value="<?php echo isset($_POST['txtyears'])?$_POST["txtyears"]:'' ?>" class="form-control"/><br>
        <input type="submit" value="Calculate Loan Details" name="btncalc" class="btn btn-primary"/>
    </form>
    <?php
    if(isset($_POST["btncalc"]))
    {
        //Declaration Variable 
           $name;  $loan; $percent; $years; $value; $after; $monthly;
        //Inputs
            $name=$_POST["txtname"];
            $loan=$_POST["txtloan"];
            $percent=$_POST["txtrate"];
            $years=$_POST["txtyears"];
        //Process
            $value=$loan*$percent*$years;
            $after=$loan+$value;
            $monthly=$after/($years*12);
        //Outputs
            echo("<h4 style='color:red'>The Rate Value : ".$value."</h3><br/>");
            echo("<h4 style='color:red'>The Loan After Rate Value : ".$after."</h3><br/>");
            echo("<h4 style='color:red'>The Monthly Payment : ".$monthly."</h3><br/>");
            
    }
    ?>


</div>

</body>
</html>