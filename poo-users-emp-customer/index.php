<?php

require_once 'classes/User.php';
require_once 'classes/Customer.php';
require_once 'classes/Employee.php';

$user = new User(1, "Alta", "uGwJqFcyJgZxTANV", "uv@dolekup.yt");
$employee = new Employee(2, "Lida", "nzpfBicDWDgUtrod", "bosge@bereb.nr", 2592);
$customer = new Customer(3, "Nathan", "yXouvliV", "suta@revpoh.wf", 30369, true);
$otherCustomer = new Customer(4, "Sean", "QmYdixXjKC", "zusuk@aghevja.gd", 5648, false);

var_dump($user, $employee, $customer);

echo $user->getIntroduction();
echo "<br />";
echo $employee->getIntroduction();
echo "<br />";
echo $customer->getIntroduction();
echo "<br />";
echo $otherCustomer->getIntroduction();
