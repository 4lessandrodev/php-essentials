<?php

for ($i=0; $i < 900; $i += 5) { 
    
    if($i >= 200 && $i <= 400) continue;

    if($i === 600) break;
    
    echo $i . "<br>";
    
}

?>