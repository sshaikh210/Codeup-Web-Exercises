<?php

require_once 'User.php';

// $user = new User();
// $user->email = 'jerome@codeup.com';
// $user->name = 'Jerome';
// $user->phone = '2102222222';
// $user->address = '7638 Mission Hvn';
// $user->city = 'Boerne';
// $user->state = 'TX';
// $user->zip = '78015';
// $user->save();
$user = User::all();
$user2 = User::find(3);
$user2->email = 'sakib@codeup.com';
$user2->save();
var_dump($user);