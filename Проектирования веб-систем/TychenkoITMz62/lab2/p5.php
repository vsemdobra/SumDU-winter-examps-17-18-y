<?php
class WorkWithFile {
    var $buff;
    var $filename;
    
    function __construct($filename)  {
        $uploaddir = './';

		$this->filename = $uploaddir .$filename;
        if(!file_exists($this->filename)) exit("File doesn't exist!");
        $fd = fopen($filename, "r");
        if(!$fd) exit("error during opening file procedure!");
        $this->buff = fread($fd,filesize($this->filename));
        fclose($fd) ;
    }
    function getContent(){
        return $this->buff;
    }
    function getsize()   {
        return filesize($this->filename);
    }
    function getCount(){
        if(!empty($this->filename)) {
            $arr = file($this->filename);
            return count($arr);
        }
        else return 0;
    }
    function addToFile($filename, $info) {
        $uploaddir = './';
        $this->filename = $uploaddir .$filename;
        if(!file_exists($this->filename)) exit(" file doesn't exist");
        $fd = fopen($filename, "a+");
        if(!$fd) exit("error d!");
        $this->buff = fwrite($fd, "\nrows count:".$info);
        fclose($fd) ;
    }
}
$first = new WorkWithFile("yoyo.txt");
echo "{$first->getContent()}<br>";
echo "Rows count: {$first->getCount()}<br>";
$first->addToFile("yoyo1.txt", $first->getCount());
echo "</br></br> New file: </br>";
$second = new WorkWithFile("yoyo.txt");
echo "Rows count: {$second->getCount()}<br>";
