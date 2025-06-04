<?php
function stars($shape,$size){
   switch ($shape) {
    case '正三角形':
      triangle($size);
      break;
    case '菱形':
      diamond_shape($size);
      break;    
    default:
      echo "無";
      break;
   }


}

function triangle($size){
for ($i=0; $i <$size ; $i++) {         

        for($k=0;$k<$size-1-$i;$k++) {
          echo "&nbsp;";
        }
        for ($j=0; $j<$i*2+1; $j++) {                   
             echo "*";                            
        }
        echo "<br>";
    }

}


   function diamond_shape($size){
    if ($size%2==0){
        $size=$size+1;
    }

    for ($i=0; $i <$size ; $i++) {         
       if ($i<floor($size/2) ){
           $y=$i;
       }else{
           $y=$size-1-$i;
       }

       for($j=0;$j<floor($size/2)-$y;$j++){
          echo "&nbsp";        
       }

       for($k=0;$k<$y*2+1;$k++){
          echo "*";
       }
     echo "<br>";
    }

   }
?>