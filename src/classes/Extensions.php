<?php
namespace Src\Classes;

 class Extensions{
    private $array_correspondence = [
        'pdf'               => ['pdf'],
        'excel'             => ['xls','xlsx'],
        'image'             => ['jpg','jpeg','png','gif','tiff','tif','bmp','svg','webp'],
        'css'               => ['css'],
        'word'              => ['doc','docx'],
        'powerpoint'        => ['ppt','pptx'],
        'audio'             => ['mp3','wav','aac','flac','ogg','m4a','wma','aiff','aif','opus'],
        'video'             => ['mp4','avi','mkv','mov','flv','webm','mpeg','mpg','3gp','h264'],
        'gif'               => ['gif'],
        'zip'               => ['zip'],
        'rar'               => ['rar'],
        'htaccess'          => ['htaccess'],
        'git'               => ['git'],
        'html'              => ['html'],
        'javascript'        => ['js'],
        'php'               => ['php'],
        'python'            => ['py'],
        'java'              => ['jar'],
        'exe'               => ['exe'],
        'bat'               => ['bat']
    ];

    function __construct()
    {
        
    }

    public function get_array(){
        return $this->array_correspondence;
    }

    public function get_correspondence(string $element){
        if(in_array($element, $this->get_array())){
            return $this->array_correspondence[$element];
        }
        return 'unknown';
    }

    public function get_correspondence_by_array(array $elements){
        $internal_array = $this->get_array();
        $return_array = [];
        if(!is_array($elements)){
            $elements = explode(',',$elements);
        }
        foreach($elements as $key => $item){
            if($internal_array[$item]){
                $return_array = array_merge($return_array, $internal_array[$item]);
                continue;
            }
        }
        
        return $return_array;
    }


    
    public function getExtension(array $files){
        foreach($files as $key=> $item){
            $extensions[$key] = strtolower(pathinfo($item, PATHINFO_EXTENSION));
        }
        return $extensions;
    }

}