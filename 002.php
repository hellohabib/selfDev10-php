<?php
// PHP Class-2 

// Learning from Youtube Channel: Projukti Plus

// Channel Link:
//  https://www.youtube.com/@projuktiplus

// Video link for this file named "002.php"
//  https://youtu.be/0Y1pZFNmXps?si=s8UQmPK4hTdRKz34


//***********************************************************
//              002-1. Github Clone Repository
//***********************************************************
/*
প্রথমে Github এর একটা Repository থেকে Clone করা দেখিয়েছে।
Repository টির লিঙ্কঃ
https://github.com/nayemspecial/wordpress-support-engineer

এই Repository তে সকল ক্লাসের বিস্তারিত লিংক সহ আছে।
*/

//***********************************************************
//              002-2. Code Runner দিয়ে PHP কোড রান করা
//***********************************************************
/*
১. VS Code এ কোড রানার এক্সটেনশন ইন্সটল করতে হবে
২. কম্পিউটারে PHP ইন্সটল থাকতে হবে
৩.  Control + Alter + N
    Ctl + Alt + n
    কিবোর্ডে এই কি গুলা প্রেস করলে PHP কোড রান হয়
*/
// কোড রান হয় কি না দেখলামঃ 
// নিচের কোডের আগের এই সাইন উঠায় দিয়ে প্রাক্টিস করতে হবে ==>> //
//$n1=10;
//echo $n1;

//***********************************************************
//              002-3. Operator
//***********************************************************
// ***  Comparison Operator: 
// ***  Equal == and 
// ***  Not-Equal !=
// ***  এই ইকুয়াল == বা নট-ইকুয়াল != কম্পারিজন অপারেটর শুধু ডাটা চেক করে, ডাটা টাইপ চেক করে না 
/*
$n1=10;
$n2="10";
$equal = $n1 == $n2;
echo $equal;
echo "\n"; // for creating new line
var_dump($equal);
$not_equal = $n1 != $n2;
echo $not_equal;
echo "\n";
var_dump($not_equal);
// true ট্রু হলে কনসোলে 1 দেখায় কিন্তু false হলে ০ দেখায় না, বরং  ব্লাঙ্ক কিছু একটা দেখায় 
*/

// ***  Comparison Operator: 
// ***  Identical-Equal === and 
// ***  Identical-Not-Equal !==
// ***  এই আইডেন্টিকাল-ইকুয়াল === বা আইডেন্টিকাল-নট-ইকুয়াল !== কম্পারিজন অপারেটর ডাটার সাথে সাথে ডাটা টাইপ ও চেক করে 
/*
$n1=10;
$n2="10";
$identical_equal = $n1 === $n2;
echo $identical_equal;
echo "\n"; // for creating new line
var_dump($identical_equal);
$identical_not_equal = $n1 !== $n2;
echo $identical_not_equal;
echo "\n";
var_dump($identical_not_equal);
// true ট্রু হলে কনসোলে 1 দেখায় কিন্তু false হলে ০ দেখায় না, বরং  ব্লাঙ্ক কিছু একটা দেখায় 
*/

// ***  Comparison Operator: 
// ***  Greater >
// ***  Smaller <
// ***  Greater or Equal =>
// ***  Smaller or Equal =<

//***********************************************************
//              002-4. Logical Operator
//***********************************************************

// ***  Logical AND &&
// ***  Logical OR ||
// ***  Logical NOT !
/*
$t=true;
$f=false;
echo "AND"; echo "\n";
var_dump($t && $f); // t এবং f ঘুরায় ফিরায় বিভিন্ন কম্বিনেশনে প্রাক্টিস করতে হবে 
echo "OR"; echo "\n";
var_dump($t || $f); // t এবং f ঘুরায় ফিরায় বিভিন্ন কম্বিনেশনে প্রাক্টিস করতে হবে
echo "NOT"; echo "\n";
var_dump(! $t); // t এবং f ঘুরায় ফিরায় বিভিন্ন কম্বিনেশনে প্রাক্টিস করতে হবে
*/

//***********************************************************
//              002-5. Increment and Decrement Operator
//***********************************************************

// ***  Increment ++
/*
$a=5;
$b=$a++; // Post Increment - আগে ভ্যালু এসাইন হবে পরে ইনক্রিমেন্ট হবে
echo $b; echo "\n"; 
echo $a; echo "\n"; 
$x=10; echo "\n";
$y=++$x; // Pre Increment - আগে ইনক্রিমেন্ট হবে পরে ভ্যালু এসাইন হবে  
echo $y; echo "\n";
echo $x; echo "\n";
*/
// ***  Decrement --
$a=5;
$b=$a--; // Post Decrement - আগে ভ্যালু এসাইন হবে পরে ডিক্রিমেন্ট হবে
echo $b; echo "\n"; 
echo $a; echo "\n"; 
$x=10; echo "\n";
$y=--$x; // Pre Increment - আগে ডিক্রিমেন্ট হবে পরে ভ্যালু এসাইন হবে  
echo $y; echo "\n";
echo $x; echo "\n";
?>