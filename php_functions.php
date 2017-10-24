<?
    function makeJSON($fileName,$contents,$permissions = 0775){
        $directories = explode('/',dirname($fileName));
        $path ="";
        foreach($directories as $directory){
            if(!is_dir($path.$directory)){
                mkdir($path.$directory, $permissions, true);
                chmod($path.$directory, $permissions);
            }
            $path =$path.$directory.'/';
        }
        file_put_contents($fileName,json_encode($contents));
        chmod($fileName, $permissions);
    }

    function print_br($string){
        echo "$string<br>";
    }
    
?>
