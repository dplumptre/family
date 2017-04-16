<?php
namespace Babs\Easybackup\Lib;


class DbBackup
{

    protected $zip;

    public function __construct(Zipper $zip)
    {
        $this->zip = $zip;
    }

    protected function getBackupPath()
    {
        return $this->getFilePath() . $this->getFilename();
    }

    public function backup()
    {
        $dbhost = config('easybackup.db.db_host');
        $dbuser = config('easybackup.db.db_username');
        $dbpass = config('easybackup.db.db_password');
        $dbname = config('easybackup.db.db_name');
        $output = NULL;
        $backupFile = $this->getBackupPath();
        $command = "mysqldump -h$dbhost -u$dbuser -p$dbpass $dbname > " . $backupFile;
        $result = exec($command, $output);
        //dd(file_exists($backupFile));
        // zip file.
        $this->zip->add($backupFile, $this->getFilename());
        $this->zip->store($this->getZipFilename());
        unlink($backupFile);
    }


    protected function getZipFilename()
    {
        $zipFilename = config('easybackup.zip_filename');
        $today = date("Y_m_d__");
        $ext = after_last(".", $zipFilename);
        if ( $ext != 'zip' ){
            $zipFilename = before_last(".", $zipFilename) . ".zip";
        }
        return $this->getFilePath() . $today . $zipFilename;
    }


    protected function getFilename()
    {
        $filename = config('easybackup.db.output_filename');
        $ext = after_last(".", $filename);
        if ( $ext != 'sql' ){
            $filename = before_last(".", $filename) . ".sql";
        }
        return date("Y_m_d__H_i___") . $filename;
    }


    protected function getFilePath()
    {
        $filePath = config('easybackup.db.output_dir');

        if ( !is_dir($filePath) )
            mkdir($filePath, 0777, TRUE);

        if (substr($filePath, - 1) != '/')
            $filePath = $filePath . '/';

        return $filePath;
    }



}