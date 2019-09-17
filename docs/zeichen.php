<pre>
<?php

/* function drawX($wiederholungen, $hoehe) {
    $abstandInner = $hoehe * 2;
    $abstandOuter = 0;

    for($y = 0; $y <= $hoehe * 2; $y++) {

        echo '<div style="display: inline-block; width: 20px">'.$y.'</div>';
        
        

        if($y < ($hoehe)) {

            for($i = 0; $i <= $wiederholungen; $i++) {
                echo str_repeat(" ", $abstandOuter);
                echo '#';
                echo str_repeat(" ", $abstandInner);
                echo '#   ';
                echo str_repeat(" ", $abstandOuter);
            }

            $abstandInner = $abstandInner - 2;
            $abstandOuter++;

            echo '<br>';
        } else {

        for($i = 0; $i <= $wiederholungen; $i++) {
            echo str_repeat(" ", $abstandOuter);
            echo '#';
            echo str_repeat(" ", $abstandInner);
            echo '#   ';
            echo str_repeat(" ", $abstandOuter);
        }

        $abstandInner = $abstandInner + 2;
        $abstandOuter--;

        echo '<br>';
        }
        
    }
}

drawX(12, 12); */



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


drawH(6, 10);