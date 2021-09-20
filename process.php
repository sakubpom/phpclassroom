<?php
$score = $_GET['data1'];

if( $score >= 80 ){
     echo "คุณได้เกรด A";
}else if( $score >= 70 && $score < 80 ){
     echo "คุณได้เกรด B";
}else if( $score >= 60 && $score < 70 ){
     echo "คุณได้เกรด D";
}else if( $score >= 50 && $score < 60 ){
     echo "คุณได้เกรด D";
}else{
     echo "คุณสอบตก";
}
?>
