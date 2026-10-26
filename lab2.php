<?php
// Lab 2A: Expressions and Control Structures
// PERSONALIZE: change the sample values (such as $x, $gpa, $status, and $fuel).

echo '<h1>Lab 2A: Expressions and Control Structures</h1>';

// 1. Expressions and Operators
echo '<h2>1. Expressions and Operators</h2>';
$x = -5;
// y = 3(abs(2x) + 4)
$y = 3 * (abs(2 * $x) + 4);
echo "With x = $x, y = 3(abs(2x) + 4) is $y.<br>";

// 2. Boolean Comparisons
echo '<h2>2. Comparisons</h2>';
echo '2 > 1: '; var_dump(2 > 1);
echo '2 == 3: '; var_dump(2 == 3);
echo '"5" == 5: '; var_dump("5" == 5);
echo '"5" === 5: '; var_dump("5" === 5);

// 3. Unary Operators
echo '<h2>3. Unary Operators</h2>';
$c = 5;
$negative = -$c;
$positive = +$c;
$incremented = ++$c;
echo "Unary minus: $negative; unary plus: $positive; pre-increment of c: $incremented.<br>";

// 4. Operator Precedence
echo '<h2>4. Operator Precedence</h2>';
$precedenceResult = 2 + 3 * 4;
$parenthesesResult = (2 + 3) * 4;
echo "2 + 3 * 4 = $precedenceResult; (2 + 3) * 4 = $parenthesesResult.<br>";

// 5. Assignment Associativity
echo '<h2>5. Assignment Associativity</h2>';
$level = $score = $time = 0;
echo "level = $level, score = $score, time = $time.<br>";

// 6. Equality and Assignment
echo '<h2>6. Equality and Assignment</h2>';
$number = 10;
$numberAsText = '10';
$otherNumber = 12;
echo '$number == $numberAsText: '; var_dump($number == $numberAsText);
echo '$number === $numberAsText: '; var_dump($number === $numberAsText);
echo '$number == $otherNumber: '; var_dump($number == $otherNumber);
echo '$number === 10: '; var_dump($number === 10);

// 7. Logical Operators
echo '<h2>7. Logical Operators</h2>';
$a = 1;
$b = 0;
echo '$a && $b: '; var_dump($a && $b);
echo '$a || $b: '; var_dump($a || $b);
echo '!$b: '; var_dump(!$b);

// 8. Scholarship Decision with if...else
echo '<h2>8. Scholarship Decision with if...else</h2>';
$gpa = 3.59; // PERSONALIZE: replace this sample GPA.
if ($gpa >= 3.5) {
    echo "GPA $gpa: eligible for a scholarship.<br>";
} else {
    echo "GPA $gpa: not eligible for a scholarship.<br>";
}

// 9. Scholarship Decision with if...elseif...else
echo '<h2>9. Scholarship Decision with if...elseif...else</h2>';
if ($gpa >= 3.7) {
    echo 'Full scholarship.<br>';
} elseif ($gpa >= 3.5) {
    echo 'Partial scholarship.<br>';
} else {
    echo 'No scholarship.<br>';
}

// 10. Access Status
echo '<h2>10. Access Status</h2>';
$status = 'pending'; // PERSONALIZE: try 'approved' or another value.
switch ($status) {
    case 'approved':
        echo 'Access approved.<br>';
        break;
    case 'pending':
        echo 'Access is pending review.<br>';
        break;
    default:
        echo 'Access denied or status not recognized.<br>';
}

// 11. While Loop
echo '<h2>11. While Loop</h2>';
$fuel = 10; // PERSONALIZE: change the starting fuel amount.
while ($fuel > 1) {
    echo "There is enough fuel ($fuel units remain).<br>";
    $fuel--;
}
echo "Fuel is now $fuel; the loop stopped.<br>";

// 12. Multiplication Table
echo '<h2>12. Multiplication Table</h2>';
$tableNumber = 12; // PERSONALIZE: change 12 to another number.
for ($i = 1; $i <= 12; $i++) {
    echo "$tableNumber x $i = " . ($tableNumber * $i) . '<br>';
}
