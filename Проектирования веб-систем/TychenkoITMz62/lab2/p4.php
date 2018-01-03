<?php 
class WorkWithFile {
    var $buff;
    var $filename;
    function __construct($filename) {
        $uploaddir = './';
        $this->filename = $uploaddir .$filename;
        if(!file_exists($this->filename)) exit("Файл не існує");
        $fd = fopen($filename, "r");
        if(!$fd) exit("Помилка відкриття файлу");
        $this->buff = fread($fd,filesize($this->filename)); fclose($fd) ;
    }
    function getContent(){
        return $this->buff;
    }
    function getsize(){
        return filesize($this->filename);
    }
    function getCount(){
        if(!empty($this->filename)) {
            $arr = file($this->filename);
            return count($arr);
        }        else return 0;
    }
}
$first = new WorkWithFile("yoyo.txt"); echo "{$first->getContent()}<br>"; echo "{$first->getsize()}<br>";
echo "{$first->getCount()}<br>";
