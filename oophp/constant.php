<?php 

// define ('NAMA', 'Tio');

// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// class Coba{
// 	const NAMA = 'Tio';
// }

// echo Coba::NAMA;


// function coba (){
// 	return __FUNCTION__;
// }

// echo coba();


class Coba{
	public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;








 ?>