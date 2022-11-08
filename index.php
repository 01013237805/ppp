<table style="margin: auto;">
    <?php
        for($tdr=1; $tdr<=8; $tdr++){ 
            echo "<tr>";
                for( $div=1; $div<=8; $div++){
                  
                    if($div%2 == 0){
                        $e='#fff';
                    } else{
                        $e='#000';
                    };
                    if($tdr%2==0 ){
                        if($div%2== 0){
                            $e='#000';
                        } else{
                            $e='#fff';
                        };
                    };
                    echo"<td style=' height: 80px; width: 80px; border: solid 1px;   background-color: " . $e ." ; '>  ahmed </td>";
                };
            echo "</tr>";
        };
    
    ?>
</table>

