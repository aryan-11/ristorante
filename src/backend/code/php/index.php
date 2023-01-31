<?php
    // ini_set('display_errors', 1);
    function test() {
        echo 'la funzione';
    }
    
    function getFood() {
        $temp=fopen("../../csv/pietanze.csv", "r") or die("Not Open");
        $pietanze_csv=array();
        $row = 1;
    
        if($temp !== FALSE){
            while(($data=fgetcsv($temp, 1000, ","))!==FALSE){
                $num=count($data);
                $row++;
                for($c=0; $c<$num; $c++){
                }
                $pietanze_csv[]=$data;
            }
            fclose($temp);
        }

        return $pietanze_csv;
      }

    function writeOrder($nTavolo, $nome, $prezzo, $flag) {
        
        if (($nTavolo == 1 || $nTavolo == 2 || $nTavolo == 3 || $nTavolo == 4 || $nTavolo == 5) && $flag == 1) {
          $filename = "tavolo".$nTavolo.".csv";
          $file = fopen($filename, 'a') or die("file opening error in writing");
          

          fwrite($file, $nome.";");
          fwrite($file, $prezzo.";\n");
          fclose($file);

          $flag = 0;
        }
    }
    
    function readOrder($nTavolo) {
        if (($nTavolo == 1 || $nTavolo == 2 || $nTavolo == 3 || $nTavolo == 4 || $nTavolo == 5)) {
            $filename = "tavolo".$nTavolo.".csv";
            $file = fopen($filename, 'r') or die("file opening error in read");
            
            $ordini=array();
            $row = 1;
            if($file !== FALSE){
                while(($data=fgetcsv($file, 1000, ";"))!==FALSE){
                    $num=count($data);
                    $row++;
                    for($c=0; $c<$num; $c++){
                    }
                    $ordini[]=$data;
                }
                fclose($file);
            }
            return $ordini;
        }
    }

    function clearTableOrders() {
        for($i=1; $i<=5; $i++) {
            $filename = "tavolo".$i.".csv";
            if (file_exists($filename)) {
                $file = fopen($filename, 'w') or die("file opening error in clearing");
                fclose($file);
            }
        }
    }

    


?>