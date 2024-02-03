<?php
namespace Src\Classes;

class Folder_Manager{
   private $array_destiny = [
        'pdf'=>'D:/tmp/pdf/',
        'xls'=>'D:/tmp/excel/',
        'xlsx'=>'D:/tmp/excel/',
        'ppt'=>'D:/tmp/powerpoint/',
        'pptx'=>'D:/tmp/powerpoint/',
        'doc'=>'D:/tmp/word/',
        'png'=>'D:/tmp/images/',
        'jpg'=>'D:/tmp/images/',
        'jpeg'=>'D:/tmp/images/',
        'gif'=>'D:/tmp/images/',
        'docx'=>'D:/tmp/word/',
        'txt'=>'D:/tmp/text/',
        'html'=>'D:/tmp/html/',
        'php'=>'D:/tmp/php/',
        'css'=>'D:/tmp/css/',
        'zip'=>'D:/tmp/compressed/',
        'rar'=>'D:/tmp/compressed/',
        'sql'=>'D:/tmp/sql/',
        'js'=>'D:/tmp/js/',
        'jar'=>'D:/tmp/jar/',
        'py'=>'D:/tmp/py/',
        'htaccess'=>'D:/tmp/htaccess/',
        'etc'=>'D:/tmp/other/'
];

    function __construct()
    {
        
    }

        /**
     * Determina que pasta para cada arquivo...
     * @param $extension - a extensão do documento em causa...
     * @param $destiny_folder - pasta destino...
     * @return string - a path da pasta destino...
     */
    
    public function getFolder(string $destiny_folder, string $extension){
        $folder = "$destiny_folder/$extension/";
        if(!file_exists($folder)){
            $a = mkdir($folder);
        }
        return $folder;
    }
}