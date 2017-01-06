<?php

namespace crud;
use crud\DB;


include('DB.php');


$conn = DB::init();
$selectTest = new DB($conn);


$data = $selectTest->select();
print_r($data);

