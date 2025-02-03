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

// Класс для работы с файлами
/*class FileHandler{
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
echo $fileHandler->readFromFile();*/

//СОК
/*$str = "Москвовский энергитический институт";
echo "$str[2] $str[4] $str[7]"*/

// Цикл завершен
/*$a = 0;
while(1){
    if($a = 10){
        echo "Цикл завершен";
        break 1;
    }else{
        echo ".";
    }
    $a++;
}*/

// Интеграция 5<br /> Интеграция 10; выходим<br />
/*$i = 0;
while (++$i) {
    switch($i){
        case 5:
            echo "Интеграция 5<br />\n";
            break 1;
        case 10:
            echo "Интеграция 10; выходим<br />\n";
            break 2;
        default:
            break;

    }
}*/

// 11
/*$a=0;
session_start();
$_SESSION['one'] = 'one';
$_SESSION['two'] = 'two';
$_SESSION['three'] = 'three';
foreach ($_SESSION as $value){
    $a+=strlen($value);
}
echo $a;*/

// Текст N 1
/*$str = "Текст N";
for($i = 1; $i < 4; $i++){
$query = "INSERT INTO tbl SET txt='$str $i'";
mysql_db_query("test", $query);
if($i == 1) exit;
}*/

//Экзамен так как всегда будет false
/*$a = 0;
$str = 'Зачет и экзамен';
if(substr($str, 5, 1) && $a){
    echo "Зачет";
}else{
    echo "Экзамен";
}*/

//PHP MySQL Apache
/*$str1="PHP";
$str2=" MySQL";
$str3=" Apache";
echo $str1.$str2.$str3;*/

//Выход из цикла
/*$max = 10;
for($i = 0; $i < $max; $i++){
    if(!(substr("PHP и MYSQL", 5, 1) && $i)){
        echo "Выход из цикла";
        break 1;
    }else{
        $max++;
    }
}*/

//Функция для определения количества дней
/*function getFutureDayOfWeek($numDays){
    $daysOfWeek = array(
        'воскресенье',
        'понедельник',
        'вторник',
        'среда',
        'четверг',
        'пятница',
        'суббота',
    );

    $currentDayOfWeek = date('w');
    $futureDayOfWeek = ($currentDayOfWeek + $numDays) % 7;

    return $daysOfWeek[$futureDayOfWeek];
}
$days = 11;
$futureDay = getFutureDayOfWeek($days);
echo "Через $days дней будет $futureDay";*/

// Ошибка
/*$str = "Зачет";
for($i = 0; $i < substr($str); $i++){
    echo "$str[$i] <br>";
}*/

// 4
/*$a=5; $b=6;
if($a & $b){
    echo $a & $b;
}else{
    echo $a & $b;
}*/

//Бесконечный цикл
/*for($index = 0; $index < 5; $index + 1){
    echo $index;
    if($index == 5) echo "Отл";
    if($index == 4) echo "Хор";
    if($index == 3) echo "Уд";
}*/

// Ошибка
/*$a = "$bb";
$b = "/$aa";
echo $a, $b;*/

//i=5 бесконечный цикл
/*$i=0;
while($i< 10){
    if($i = 5) echo "i=5";
    else echo ".";
    $i++;
}*/

// Ошибка: нету второго аргумента у substr
/*$str = "Зачет";
for($i = 0; $i < substr($str); $i++){
    echo "$str[$i]<br>";
}*/

// Класс php для работы с файлами
/*$file = new SplFileObject("gia/part2/");*/

//PHP. MySQL. Apache
/*$str1="PHP";
$str2=" MySQL";
$str3=" Apache";
echo "$str1.$str2.$str3";*/
?>