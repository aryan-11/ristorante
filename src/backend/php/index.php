<?php 

    $row = 1;
    $mycsvfile = array(); //define the main array.
    if (($handle = fopen("../csv/pietanze.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $row++;
            for ($c=0; $c < $num; $c++) {
            }
            $mycsvfile[] = $data; 
        }
        fclose($handle);
    }

    // echo $mycsvfile[3][0]; 
    return $mycsvfile;
?>