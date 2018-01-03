<?php
class CSV {
    private $_csv_file = null; 
    public function __construct($csv_file) {
        if (file_exists($csv_file)) {
            $this->_csv_file = $csv_file;
        }else throw new Exception("File not exists!");
    }
    public function setCSV(Array $csv) {
        $handle = fopen($this->_csv_file, "a"); 
        foreach ($csv as $value) {
            fputcsv($handle, explode(";", $value), ";");
        }
        fclose($handle);
    }
    public function getCSV() {
        $handle = fopen($this->_csv_file, "r"); 
        $array_line_full = array();
        while (($line = fgetcsv($handle, 0, ";")) !== FALSE) {
            $array_line_full[] = $line;
        }
        fclose($handle);
        return $array_line_full;
    }
}
try {
    $csv = new CSV("file.csv");
    $get_csv = $csv->getCSV();
    foreach ($get_csv as $value) {
        echo "Surname: " . $value[0] . "<br/>";
        echo "Name: " . $value[1] . "<br/>";
        echo "Position: " . $value[2] . "<br/>";
        echo "Salary: " . $value[3] . "<br/>";
        echo "--------<br/>";
    }
    $arr = array("abc;def;;123",);
    $csv->setCSV($arr);
}catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
