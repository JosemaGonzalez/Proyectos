	    <?php
        for ($i=1; $i<=255 ; $i=$i+20){
            for ($j=1; $j<=255 ; $j=$j+20){
                for ($k=1; $k<=255 ; $k=$k+20){
                    echo '<div style="background-color:rgb('.$i.",".$j.",".$k.")".'; width:50px; display:inline-block;"><img width="50" height="50"></div>';
                }
            }
        }
    ?>


<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
