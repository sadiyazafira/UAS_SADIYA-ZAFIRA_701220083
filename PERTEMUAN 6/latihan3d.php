<?php 

function faktorial($a)  
{  
  if($a <= 1) {  
    return 1;  
  }  
  else{  
    return $a * faktorial($a - 1);  
  }  
}  


$a = 5;  
echo "Faktorial dari $a = " .faktorial($a); 
?> 