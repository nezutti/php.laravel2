<?php



$count=0;
while($count<=100){
  if($count===20){
    break;
  }
  if($count%3===0){
    $count++;
    continue;
  }
  print $count."<br>";
  $count++;
}

$num=0;

do{
  print 'num='.$num.'<br>';
  $num++;

}while($num<3);

$people=array(
  "person1"=>"Taro",
  "person2"=>"Jiro",
  "person3"=>"Saburo"
);

foreach ($people as $person=>$name){
  echo $person."は".$name."です"."<br>";
}




  for ($a = 1; $a <= 9; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 9; $b++) {
      echo '<td>' . $a * $b . '</td>';
    }
    echo '</tr>';
  }
