<?php

/*
陣列 array

*/

$student = array("王小明","李阿花","林三八");
echo $student[0];
echo "<br>";
echo $student[2];
echo "<hr>"; //html的分隔線

//一般的for loop抓取值

for ($i=0 ; $i<5 ; $i++)

//foreach是php用來輸出陣列方式使用的
//使用上較快且直覺

//結構:foreach(陣列名稱 as $變數){
	//echo $變數
//}

foreach($student as $value){
	echo $value."<br>";
}


?>