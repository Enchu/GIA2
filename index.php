<?php
/*function sum($a, $b) {
    return $a + $b;
}
echo sum(123, 5);*/

//Бесконечный цикл
/* for($index = 0; $index < 5; $index++){
    if($index = 5){echo "0тл";}
    if($index = 4){echo "Хор";}
    if($index = 3){echo "Уд";}
}*/

//2CSSJavaSript
/*$msg = "2";
switch(print $msg){
    case 2: print "HTML";
    case 1: print "CSS";
    default: print "JavaSript";
}*/

//
class FileHandler{
    private $filePath;
    public function __construct($filePath){
        $this->filePath = $filePath;
    }
    public function writeToFile($data){
        file_put_contents($this->filePath, $data);
    }
    public function readFromFile(){
        return file_get_contents($this->filePath);
    }
}

$fileHandler = new FileHandler("example.txt");
$fileHandler->writeToFile("Привет, мир!");
echo $fileHandler->readFromFile();
?>