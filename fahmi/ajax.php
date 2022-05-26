<?php
  if (isset($_REQUEST["id"])) {
    switch ($_REQUEST["id"]) {
      case 'Quest1':
        $alpha = range('A', 'Z');  
        $inpVal = $_POST['inpVal'];
        for($i=$inpVal-1; $i>=0; $i--){   
          for($j=0; $j<=$i; $j++){  
            echo $alpha[$j];  
            }  
            echo "<br>";  
        }  

      break;

      case 'Quest2':
        $startInp = $_POST['startInp'];
        $finishInp = $_POST['finishInp'];

        $arr_str = range($startInp,$finishInp);
        $imax_loop = count( $arr_str);
        for($i = 0; $i < $imax_loop; $i++)
        {
            echo implode(" ",$arr_str) . "<br/>";

            
            $head_elm = array_shift($arr_str);// tentukan elemen pertama dan ambil    
            array_push( $arr_str, $head_elm);// add elemen pertama ke akhir array
        }

      break;
    }
  }

    