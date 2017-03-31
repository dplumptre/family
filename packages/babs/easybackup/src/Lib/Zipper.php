<?php
namespace Babs\Easybackup\Lib;


class Zipper {

    private $_files = [],
            $_zip,
            $_list = []
    ;

    public function __construct()
    {
        $this->_zip = new \ZipArchive;
    }


    public function add($input)
    {
        if ( is_array($input) )
        {
            $this->_files = array_merge($this->_files, $input);
        } else {
            $this->_files[] = $input;
        }
    }


    public function store($location = NULL)
    {

        if ( count($this->_files) )
        {
            foreach ($this->_files as $file){

                if ( is_file($file) ){
                    $this->_list[] = $file;
                }
                if ( is_dir($file) ){
                    $this->_list[] = $file;
                }
            }
        }
        unset($this->_files);


        if ( count($this->_list) ) {


            if ( $this->_zip->open($location, \ZipArchive::CREATE ) === TRUE )
            {
                foreach ($this->_list as $file){

                    if ( is_dir($file) )
                    {
                        $this->_zip->addEmptyDir($file);
                    }
                    elseif ( is_file($file) )
                    {
                        $this->_zip->addFile($file);
                    }
                }

                $this->_zip->close();
            } else {
                throw new \Exception("Cannot create Zip Archive.");
            }
        }
    }
}