<pre>
<?php

#       #   #       #
 #     #     #     #
  #   #       #   #
   # #         # #
    #           #
      
    $wiederholungen = 6;


    $height = 12;
    $abstandInner = $height * 2;
    $abstandOuter = 0;

    for($y = 0; $y <= $height * 2; $y++) {

        echo '<div style="display: inline-block; width: 20px">'.$y.'</div>';
        
       

       if($y < ($height)) {

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