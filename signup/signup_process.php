<?php
$conn = mysqli_connect('localhost','root','111111','opentutorials');

$data = array(
    'uid'=>$_POST['uid'],
    'pwd'=>$_POST['pwd'],
    'name'=>$_POST['name']);
$query = "
    INSERT into members
    (uid, pwd, name)
    values('".$data['uid']."','".hash('sha512',$data['pwd'])."','".$data['name']."')
";
$result = mysqli_query($conn, $query);
echo "success";
?>
<div>
    <a href="../index.php">back</a>
</div>