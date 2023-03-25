<?php
$con =mysqli_connect('localhost','root','','db');
if($con){
    echo 'conected';
}
else{
    echo 'not conected';
}
if (isset($_POST['submit_search'])){
    $search = $con->prepare("SELECT * FROM users WHERE a_title LIKE :value OR ");
    $SEARCH_VALUE = "%".$_POST['search']."%";
    $search->bind_param("value",$SEARCH_VALUE);
    $search->execute();
      

    foreach($search AS $data){
        echo "h1" .$data['a_title'] ."</h1";
        echo "p" .$data['name'] ."</p";

    }














    
}
?>