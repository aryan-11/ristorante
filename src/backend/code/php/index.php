<?php
    
    function test() {
        echo 'la funzione';
    }

    function writeOrder($nTavolo, $nome, $prezzo, $flag) {
        
        if(($nTavolo = 1 || $nTavolo = 2|| $nTavolo = 3|| $nTavolo = 4|| $nTavolo = 5) && $flag == 1)
        $filename = "tavolo".$nTavolo.".css";
        $file = fopen($filename, 'a') or die("file opening error");

        fwrite($file, $nome.";".$prezzo.";\n");
        fclose($file);
    }


?>