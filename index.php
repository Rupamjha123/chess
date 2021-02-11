<html>


<head>

<style>


*{

  
    margin:0px;
}

body{

    background:aqua;
}
table{ 
font-size:20px;
border-spacing:0px;

}

.td1{
  
background-color:black;
width:30px;
height:30px;

}

.td2{
    
    
background-color:white;
width:30px;
height:30px;

}

h1{
    background:black;
    text-align:center;
    color:white;
}

</style>
</head>

<body>

<h1>welcome to gameplay</h1>

<form method="POST">

<br>
    ENTER THE ROW TO MAKE CHESSBOARD<br><br><input type="text" name="num">

    <input type="submit" name="submit"><br><br>


</form>


<?php

if(isset($_POST['submit']))
{

    $nam=$_POST['num'];
    
 

?>


<table border="1";>


    



<?php
    for($i=1;$i<=$nam;$i++)
    {
?>
        <tr>
<?php

        for($j=1;$j<=$nam;$j++)
        {
        
            
            if($i%2==0)
             {
                if($j%2==0)
                {
                ?>

                <td class="td1"></td>

                <?php
                }


                else
                {
                ?>

                <td class="td2"></td>

                <?php
                }

            }

            else{ 
                
                if($j%2==0)
                {
                ?>

                <td class="td2"></td>

                <?php
                }


                else
                {
                ?>

                <td class="td1"></td>

                <?php
                }

            }

            
            
            
     
        }
        ?>

        </tr>

        <?php
    }


    ?>




<table>
    

    <?php
    
}


?>




</body>

</html>