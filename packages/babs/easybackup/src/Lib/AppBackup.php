<?php
namespace Babs\Easybackup\Lib;


class AppBackup
{

    public function __construct(Zipper $zipper)
    {

    }


    private function getIgnoreDirs()
    {
        $ignoreDirs = config('easybackup.files.ignore_dirs');
        $result = [];

        if (count($ignoreDirs)) {

            foreach ($ignoreDirs as $ignoreDir) {
                $result[] = base_path($ignoreDir);
            }
        }
        return $result;
    }

    private function getFiles()
    {
        $files = new \RecursiveDirectoryIterator(base_path());
        $files->setFlags(\FilesystemIterator::SKIP_DOTS | \FilesystemIterator::UNIX_PATHS);
        $files = new \RecursiveIteratorIterator($files, \RecursiveIteratorIterator::SELF_FIRST);

        $ignoreDirs = $this->getIgnoreDirs();
        $theFiles = [];
        foreach ($files as $files) {

            if ( count($ignoreDirs) )
            {
                foreach ($ignoreDirs as $ignoreDir)
                {
                    if ( $file->getType() == "file" && strpos($file->getPath(), $ignoreDir) !== false )
                    {
                        //path was found && it is also a file
                        continue 2;
                    }
                }
            }

        }
    }
}