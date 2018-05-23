<?php
    session_start();
    if (!isset($_SESSION['visitante'])) {
        $_SESSION['visitante'] = round(microtime(true));
        function contador()
        {
            $archivo = "app/contador.txt";
            $file = fopen($archivo, "r");
            $contador = 0;
            if($file)
            {
                $contador = fread($file, filesize($archivo));
                $contador = $contador + 1;
                fclose($file);
            }
            $file = fopen($archivo, "w+");
            if($file)
            {
                fwrite($file, $contador);
                fclose($file);
            }
            return $contador;
        }
    }else{
        function contador()
        {
            $archivo = "app/contador.txt";
            $file = fopen($archivo, "r");
            if($file)
            {
                $contador = fread($file, filesize($archivo));
                fclose($file);
            }
            $file = fopen($archivo, "w+");
            if($file)
            {
                fwrite($file, $contador);
                fclose($file);
            }
            return $contador;
        }
    }
    $visitante = contador();
?>