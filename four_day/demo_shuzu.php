<?
$key = 3;
$newarray = array(1,'abc','book'=>'my',4=>'hello',$key=>'word');

print_r($newarray);
?>
<?php
$fruit = array(3=>'苹果',0=>'香蕉','菠萝',[1,2,3,5]);
print_r($fruit);
foreach ($fruit as $key => $value) {
	echo '<br>第'.$key."值是:".$value;
}
?>

<?php
$fruit=array('苹果','香蕉','菠萝');
foreach($fruit as $k=>$v){
    echo '<br>第'.$k.'值是：'.$v;}

?>