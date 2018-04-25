<?php
Class ScanFile
{
    var $dir_name = '';//The directory to search
    var $search_phrase = '';//The phrase to search in the file contents
    var $foundFiles;
    var $myfiles;
    
    function search($directory, $search_phrase){
        $this->dir_name = $directory;
        $this->search_phrase = $search_phrase;
        
        $this->myfiles = $this->GetDirContents($this->dir_name);
        $this->foundFiles = array();
        
        if ( empty($this->search_phrase) ) die('Empty search phrase');
        if ( empty($this->dir_name) ) die('You must select a directory to search');
        
        foreach ( $this->myfiles as $f ){
            $contents = file_get_contents($f);
            if ( strpos($contents, $this->search_phrase) !== false )
                $this->foundFiles [] = $f;
        }
        return $this->foundFiles;
    }
    
    function GetDirContents($dir){
       if (!is_dir($dir)){die ("Function GetDirContents: Problem reading : $dir!");}
       if ($root=@opendir($dir)){
           while ($file=readdir($root)){
               if($file=="." || $file==".."){continue;}
               if(is_dir($dir."/".$file)){
                   $files=array_merge($files,$this->GetDirContents($dir."/".$file));
               }else{
               $files[]=$dir."/".$file;
               }
           }
       }
       return $files;
    }
    

}