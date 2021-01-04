<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <?php
       $title="Welcome to bombay";
        
       $number = 317;
       $num_Array=array(10,20,30,40);
       $num=0;
     
       echo valid("Raju");
       valid2();
       function valid($name1)
       {
           return $name1 . " kumar" .'<br>';
       }
       
        function valid2()
       {
           echo "valid2 called" ;
       }
       
       ?> 
        
        <h1> <?php echo $title; ?> </h1>
    </body>
</html>
