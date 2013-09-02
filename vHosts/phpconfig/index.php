<?php
phpinfo();
/*try{
$link = mysqli_init();
$connected = $link->real_connect(
			'127.0.0.1',
			'root',
			'vagrant',
			NULL,
			3306
		);
$link->select_db('typo3');

$res = $link->query('Show tables;');
$res->data_seek(0);
while($result = $res->fetch_assoc()){
	var_dump ($result);
}

}catch (Exception $e){
	echo $e->getMessage();
}*/

?>