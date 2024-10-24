<?php

// $prices = [100,200,300,400,500];

// $taxRate = 0.15;

// function applyTax($price) {
//   global $taxRate;
//   return $price + ($price * $taxRate);
// }


// $final_prices =  array_map('applyTax', $prices);

// var_dump($final_prices);


// $employees = [
//   ['name' => 'Mehdi', 'department' => "IT", 'age' => 22],
//   ['name' => 'Ali', 'department' => "HR", 'age' => 33],
//   ['name' => 'Sara', 'department' => "Marketing", 'age' => 25],
//   ['name' => 'Reza', 'department' => "IT", 'age' => 24],
//   ['name' => 'Maryam', 'department' => "IT", 'age' => 26],
// ];

// function filterByDepartment($employee) {
//   return $employee['department'] == 'IT';
// }

// $itemEmployees = array_filter($employees, 'filterByDepartment');

// print_r($itemEmployees);

// function doubleNumber($num) {
//     return $num * 2;
// }

// $numbers = [1, 2, 3, 4, 5];

// $doubledNumbers = array_map("doubleNumber", $numbers);

// var_dump($doubledNumbers);


// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $obj = json_decode($jsonobj);

// foreach($obj as $key => $value) {
//   echo $key . " => " . $value . "<br>";
// }