<?php
namespace Src\Classes;
use Src\Classes\Extensions;
use Src\Classes\Folder_Manager;
class Delivery{


    function __construct()
    {
        
    }
    

    /**
     * Função que faz a distribuição dos arquivos...
     * @param $array_tmp - array de armazenamento temporário dos documentos
     * @param $array_names -  os nomes dos documentos
     * @return - retorna um array contendo o status e a mensagem da operação. Caso falhe, o status será 500. Caso contrário, o status será 201...
     */
    public function deliver(array $array_tmp, array $array_names){
        clearstatcache();
        $manager    = new Folder_Manager(); 
        $ext_object    = new Extensions(); 
        $array_extensions = $ext_object->getExtension($array_names);


        foreach($array_extensions as $key => $item){
            $destiny = $manager->getFolder('D:/tmp/',$item);
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


    /**
     * Função para separar os documentos filtrando as extensões desejadas...
     * @param $array_tmp - array de armazenamento temporário dos documentos
     * @param $array_names -  os nomes dos documentos
     * @param $extension - o array das extensões que deseja filtrar....
     * @return - retorna um array contendo o status e a mensagem da operação. Caso falhe, o status será 500. Caso contrário, o status será 201...
     */
    public function separate(array $array_tmp, array $array_names, array $extension){
        $ext_object = new Extensions();
        $manager    = new Folder_Manager(); 
        $ext_object_array = $ext_object->get_correspondence_by_array($extension);
        clearstatcache();
        $array_extensions = $ext_object->getExtension($array_names);

        foreach($array_extensions as $key => $item){
            if(!in_array($item, $ext_object_array)){
                continue;                
            }
            $destiny = $manager->getFolder('D:/tmp/', $item);
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