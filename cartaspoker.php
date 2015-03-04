<?php include '_header.php' ?>

<?php 

     $cartas = ["As","2","3","4","5","6","7","8","9","10","J","Q","K"];
     $palos = ["picas","treboles","diamantes","corazones"];

     $carta1 = "carta_dorso.jpg.jpg"
     $carta2 = "carta_dorso.jpg.jpg";




    if(isset($_POST["dar"])){
    
        $c1 = rand(1,13);
        $p1 = rand(1,4);
        $c2 = rand(1,13);
        $p2 = rand(1,4);

        $carta1 = "carta_" . $p1 . "_" . $c1 .".jpg.jpg";
        $carta2 = "carta_" . $p2 . "_" . $c2 .".jpg.jpg";

    }

 ?>    



<div class="well">cartaspoker</div>
    <div class="row">


        <form action="poker.php" method="post">
            <input type="submit" name="dar" />
        </form>
        
        <img src="img/<?php echo $carta1 ?>">     
        <img src="img/<?php echo $carta2 ?>">
    </div>


<?php include '_footer.php' ?>