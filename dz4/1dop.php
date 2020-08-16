<?php

function GetListFiles($folder){
    $fp=opendir($folder);
    while($cv_file=readdir($fp)){
        if(is_file($folder."/".$cv_file)){
           echo $folder."/".$cv_file . '<br>';
        }
        elseif($cv_file!="."&&$cv_file!=".."&&is_dir($folder."/".$cv_file)){
            GetListFiles($folder."/".$cv_file);
        }
    }
    closedir($fp);
}

GetListFiles('C:\gitRepository\OpenServer\domains');

