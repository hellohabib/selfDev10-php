<?php
// PHP Class-6 

// Learning from Youtube Channel: Projukti Plus

// Channel Link:
//  https://www.youtube.com/@projuktiplus

// Video link for this file named "006.php"



//***********************************************************
//              006-1. Break Vs Continue
//***********************************************************
// ***  Break
// ***  Break থাকলে পুরা লুপ থেকে বের হয়ে যায়। 
/*
for($i=1; $i<=6; $i++){
    if($i%2==0){
        break;
        echo "show me";
    }
    echo $i;
}
// ***  Output: 1
*/

// ***  Continue
// ***  Continue থাকলে ওই ব্লকের বাকি কোড এক্সিকিউট না করে ব্লক থেকে বের হয়ে যাইয় কিন্তু পুরা লুপ থেকে বের হয়ে যায় না। 
/*
for($i=1; $i<=6; $i++){
    if($i%2==0){
        continue;
        echo "show me";
    }
    echo "$i\n";
}
// Output: 1 3 5
*/

//***********************************************************
//              006-2. Arrray, var_dump Vs print_r
//***********************************************************
// ***  Array
//$letters=["a","b","c","d"]; // [] ব্যবহার করলে array ওয়ার্ড টা লেখার দরকার নাই
//$letters=array("a","b","c","d"); // () ব্যবহার করলে array ওয়ার্ড টা লিখতে হবে
//echo $letters[0]; // এভাবে একটা আইটেম দেখা যায়
//echo $letters; // এভাবে ফুল এরে দেখতে চাইলে error দিচ্ছে
//var_dump($letters);
//print_r($letters);

//***********************************************************
//              006-3. Array Manupulation
//***********************************************************
//$numbers=array(3,4,5,6);
//print_r($numbers);
// ***  নতুন আইটেম লাস্টে insert করার জন্য array_push()
//array_push($numbers,7);
//print_r($numbers);
// ***  নতুন আইটেম প্রথমে insert করার জন্য array_unshift()
//array_unshift($numbers,2);
//print_r($numbers);
// ***  প্রথম আইটেম delete করার জন্য array_shift
//array_shift($numbers);
//print_r($numbers);
// ***  শেষ আইটেম delete করার জন্য array_pop
//array_pop($numbers);
//print_r($numbers);

//***********************************************************
//              006-4. Array Kay-Value Pare
//***********************************************************
/*
$student=[
    'name'=>'Abdur Rahim', // লাস্টে , দিতে হবে
    'age'=>25,
    'department'=>'math'
];
*/
//print_r($student);
//echo $student['name'];
//echo $student['age'];

//***********************************************************
//              006-5. explode() for string to array
//***********************************************************
//$mySentence='I am learning PHP and I wish I can be expert at it';
//$myArray=explode(' ',$mySentence); // কিসের ভিত্তিতে word গুলা এরের আইটেম হবে তা প্রথম প্যারামিটার হিসাবে দিতে হবে যেমন এখানে স্পেস ' '
//print_r($myArray);

//***********************************************************
//              006-6. implode() for array to string
//***********************************************************
//$arrayToString=implode('-',$myArray); // এরের আইটেম গুলা স্ট্রিং এর মধ্যে কি দিতে সেপারেট হবে তা রথম প্যারামিটার হিসাবে দিতে হবে যেমন এখানে হাইফেন '-'
//print_r($arrayToString);


//***********************************************************
//              006-7. Multi-Dimentional Array
//***********************************************************
// ***  এটা অনেক টা এরের মধ্যে এরে
/*
$student=[
    ['name'=>'Abdur Rahim','age'=>25,'department'=>'math'],
    ['name'=>'Abdul Kuddus','age'=>22,'department'=>'stat'],
    ['name'=>'Azizul Hakim','age'=>24,'department'=>'physics']
];
*/
//print_r($student); // পুরা মাল্টি-ডাইমেনশনাল এরে কে দেখাবে
//echo $student[1]['name']; // একটা নির্দিষ্ট আইটেম কে দেখাবে


//***********************************************************
//              006-8. Serialized
//***********************************************************
// ***  API এবং JSON Data নিয়ে কাজ করার সময় এই Serialized কাজে লাগে
//$myArray=['name'=>'habib', 'age'=>25, 'dept'=>'Math'];
//print_r($myArray);
//$mySerialized=Serialized($myArray); // case sensitive এখানে দেখা যাচ্ছে ফাংশন নেম কেস-সেনসেটিভ, Serialized লিখলে error আসতেছে Call to undefined function Serialized()
//$mySerialized=serialize($myArray);
//echo($mySerialized);
// Output: a:3:{s:4:"name";s:5:"habib";s:3:"age";i:25;s:4:"dept";s:4:"Math";}
// আউটপুট দেখে যদিও কিছু বোঝা গেল না, আশা করি ভবিষ্যতে কোন দিন বুঝতে পারবো

//***********************************************************
//              006-9. json_encode
//***********************************************************
// ***  json অনেক ইউজ হয়
//$myArray=['name'=>'habib', 'age'=>25, 'dept'=>'Math'];
//print_r($myArray);
//$myJson=json_encode($myArray);
//print_r($myJson);
// ***  Output: {"name":"habib","age":25,"dept":"Math"}


?>
