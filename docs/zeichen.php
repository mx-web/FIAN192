<pre>
<?php

function drawX($wiederholungen, $hoehe) {
    $abstandInner = $hoehe;
    $abstandOuter = 0;

    for($y = 0; $y <= $hoehe; $y++) {

        echo '<div style="display: inline-block; width: 20px">'.$y.'</div>';
        
        

        if($y < ($hoehe / 2)) {

            for($i = 1; $i <= $wiederholungen; $i++) {
                echo str_repeat(" ", $abstandOuter );
                echo 'X';
                echo str_repeat(" ", $abstandInner);
                echo 'X';
                echo str_repeat(" ", $abstandOuter);
            }

            $abstandInner = $abstandInner - 2;
            $abstandOuter++;

            echo '<br>';
        } else {
            $abstandOuter--;
            $abstandInner = $abstandInner + 2;
            for($i = 1; $i <= $wiederholungen; $i++) {
                echo str_repeat(" ", $abstandOuter );
                echo 'X';

                echo str_repeat(" ", $abstandInner );
                echo 'X';

                echo str_repeat(" ", $abstandOuter );


            }

            
            echo '<br>';
        }
    
        
    }
}

// drawX(7, 15); 



 function drawH($wiederholungen, $hoehe) {
    if($hoehe % 2 == 0) $hoehe++;
    $abstandInner = $hoehe;

    for($y = 1; $y <= $hoehe; $y++) {
        echo '<div style="display: inline-block; width: 20px">'.$y.'</div>';

        for($i = 0; $i <= $wiederholungen; $i++) {
            if($y < ($hoehe - 1) / 2) {
                echo '  X';
                echo str_repeat(' ', $abstandInner - 1);
                echo 'X';
    
            } elseif ($y == ($hoehe - 1) / 2) {
                echo '  ' . str_repeat('X', $abstandInner + 1);
            } else {
                echo '  X';
                echo str_repeat(' ', $abstandInner - 1);
                echo 'X';
            }
    
        }

        
        echo "<br>";
    }
}

// drawH(7, 15);




function drawA($wiederholungen, $hoehe) {
    $abstandInner = 0;
    $abstandOuter = $hoehe;

    for($y = 1; $y <= $hoehe; $y++) {
        
        echo '<div style="display: inline-block; width: 20px">'.$y.'</div>';
        


        for($w = 1; $w <= $wiederholungen; $w++) {
            echo str_repeat(' ', $abstandOuter);
            echo 'X';

            if($y == round($hoehe / 2, 0)) {
                echo str_repeat('X', $abstandInner);
                echo 'X';
            } else {
                echo str_repeat(' ', $abstandInner);
                echo 'X';
            }
        
            echo str_repeat(' ', $abstandOuter);
           
        }

        $abstandOuter--;
        $abstandInner = $abstandInner + 2;

        echo '<br>';
    }
}

// drawA(5, 5);







// 000#000
// 00#00#00
// 0#0000#0
// #000000#
// 0#0000#0
// 00#00#00
// 000#0000


$wiederholungen = 10;
$hoehe = 10;

$abstandInner = 0;
$abstandOuter = $hoehe;

    for($y = 0; $y <= $hoehe; $y++) {
        echo '<div style="display: inline-block; width: 20px">'.$y.'</div>';
        
        
        if($y < ($hoehe / 2)) {
            for($i = 1; $i <= $wiederholungen; $i++) {
                echo str_repeat(" ", $abstandOuter );
                echo 'X';
                echo str_repeat(" ", $abstandInner );
                echo 'X';
                echo str_repeat(" ", $abstandOuter );
            }
            $abstandOuter--;
            $abstandInner = $abstandInner + 2;
            echo '<br>';
        } else {
            


            for($i = 1; $i <= $wiederholungen; $i++) {
                echo str_repeat(" ", $abstandOuter );
                echo 'X';
                echo str_repeat(" ", $abstandInner);
                echo 'X';
                echo str_repeat(" ", $abstandOuter);
            }
            $abstandInner = $abstandInner - 2;
            $abstandOuter++;
            echo '<br>';
        }
    
        
    }