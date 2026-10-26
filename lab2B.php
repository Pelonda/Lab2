<?php
// Lab 2B: PHP Functions and Basic Objects
// PERSONALIZE: replace the sample names and user details below.

echo '<h1>Lab 2B: Functions and Objects</h1>';

// 1. Function with Parameters and Return Value
echo '<h2>1. Function with Parameters and Return Value</h2>';
function formatName($first, $middle, $last)
{
    $first = ucwords(strtolower(trim($first)));
    $middle = ucwords(strtolower(trim($middle)));
    $last = ucwords(strtolower(trim($last)));
    return trim("$first $middle $last");
}
$fullName = formatName('maria', 'anne', 'chen');
echo "Formatted name: $fullName<br>";

// 2. Function That Returns an Array
echo '<h2>2. Function That Returns an Array</h2>';
function cleanNameParts($first, $middle, $last)
{
    return array(
        ucwords(strtolower(trim($first))),
        ucwords(strtolower(trim($middle))),
        ucwords(strtolower(trim($last)))
    );
}
$nameParts = cleanNameParts(' maria ', 'ANNE', ' chen ');
echo 'First name from the array: ' . $nameParts[0] . '<br>';

// 3. Variable Scope
echo '<h2>3. Variable Scope</h2>';
$first = 'Maria';
$last = 'Chen';
function buildFullName()
{
    global $first, $last;
    return "$first $last";
}
echo 'Using global variables: ' . buildFullName() . '<br>';

function buildFullName2($first, $last)
{
    return "$first $last";
}
echo 'Using function parameters: ' . buildFullName2($first, $last) . '<br>';

// 4. Static Variable
echo '<h2>4. Static Variable</h2>';
function nextTicketNumber()
{
    static $ticketNumber = 0;
    $ticketNumber++;
    return $ticketNumber;
}
echo 'Ticket numbers: ' . nextTicketNumber() . ', ' . nextTicketNumber() . ', ' . nextTicketNumber() . '<br>';

// 5. User Class
echo '<h2>5. User Class</h2>';
class User
{
    public $name;
    public $email;

    public function display()
    {
        return $this->name;
    }
}
$user = new User();
$user->name = 'Maria Chen';
$user->email = 'maria@example.com';
echo 'User: ' . $user->display() . ' (' . $user->email . ')<br>';

// 6. Constructor and Password Hashing
echo '<h2>6. Constructor and Password Hashing</h2>';
class User2
{
    public $name;
    private $passwordHash;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }
}
$userWithPassword = new User2('Jordan Lee', 'change-this-sample-password');
echo '<pre>';
print_r($userWithPassword);
echo '</pre>';
