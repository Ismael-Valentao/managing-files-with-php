<?php

class Delivery{


    function __construct()
    {
        
    }

    public function getExtension(array $files){
        foreach($files as $key=> $item){
            $extensions[$key] = strtolower(pathinfo($item, PATHINFO_EXTENSION));
        }
        return $extensions;
    }

    public function getFolder(string $extension){
        $array_destiny = [
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
            'etc'=>'D:/tmp/other/'
    ];

    if($array_destiny[$extension]){

        $folder =  $array_destiny[$extension];
    }
    else{
        $folder = $array_destiny['etc'];
    }
        $this->verifyFolder($folder);
        return $folder;
    }
    

    public function verifyFolder(string $folder_path){
        if(!file_exists($folder_path)){
            $a = mkdir($folder_path);
        }
    }

    public function deliver(array $array_tmp, array $array_names){
        clearstatcache();
        $array_extensions = $this->getExtension($array_names);

        foreach($array_extensions as $key => $item){
            $destiny = $this->getFolder($item);
            $upload_response[$array_names[$key]] = 'error';
            $upload = move_uploaded_file($array_tmp[$key], $destiny.$array_names[$key]);

            if($upload){
                $upload_response[$array_names[$key]] = 'success';
            }
        }
        if(in_array("error", $upload_response)){
            return ['status'=>500];
        }
        return ['status'=>200];
    }


    /**
     * Função para separar os documentos filtrando as extensões desejadas...
     * @param $array_tmp - que guarda o armazenamento temporário dos documentos
     * @param $array_names -  os nomes dos documentos
     * @param $extension - o array das extensões que deseja filtrar....
     * @return - retorna um array contendo o status e a mensagem da operação. Caso falhe, o status será 500. Caso contrário, o status será 201...
     */
    public function separate(array $array_tmp, array $array_names, array $extension){
        clearstatcache();
        $array_extensions = $this->getExtension($array_names);

        foreach($array_extensions as $key => $item){
            if(!in_array($item, $extension)){
                continue;                
            }
            $destiny = $this->getFolder($item);
            $upload_response[$array_names[$key]] = 'error';
            $upload = move_uploaded_file($array_tmp[$key], $destiny.$array_names[$key]);

            if($upload){
                $upload_response[$array_names[$key]] = 'success';
            }
        }
        if(in_array("error", $upload_response)){
            return ['status'=>500];
        }
        return ['status'=>201, 'message'=>sizeof($upload_response).' documentos transferidos...'];
    }


} 