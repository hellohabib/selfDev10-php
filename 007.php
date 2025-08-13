<?php
// PHP Class-7 

// Learning from Youtube Channel: Projukti Plus

// Channel Link:
//  https://www.youtube.com/@projuktiplus

// Video link for this file named "007.php"



//***********************************************************
//              007-1. Arra Classification 
//***********************************************************
// ***  array()             ==>>    Array
// ***  []                  ==>>    Indexed Array
// ***  ['key'=>'value']    ==>>    Associative Array
// ***  [[],[],[]]          ==>>    2 Dymentional Array/ Nested Array


//***********************************************************
//              007-2. For-Each Loop
//***********************************************************
// ***  For-Each Loop ইউজ করা হয় এরে এর বিভিন্ন অপারেশন চালানোর জন্য
// ***  For-Else Loop লারাভেল এ এই লুপ ইউজ করা হয়
// Indexed Array
/*
$letters=['a','b','c','d'];
foreach($letters as $letter){ // array_name as array_item_name
    echo $letter."\n";
}
*/
// ***  Associative Array
/*
$persons=['name'=>'Habib','city'=>'Khulna','phone'=>123456];
foreach($persons as $key=>$value){
    echo "$key : $value \n";
}
*/

//***********************************************************
//              007-3. Unset - Delete Specific Item from Array
//***********************************************************
/*
$persons=['name'=>'Habib','city'=>'Khulna','phone'=>123456];
print_r($persons);
unset($persons['name']); // name নামক key এর মধ্যে value আছে ওই habib সহ পুরা ফিল্ড টা ডিলিট করে দেয়
print_r($persons);
*/


//***********************************************************
//              007-4. array_filter()
//***********************************************************
// ***  এটা অনেকটা Data Cleaning এর মত। প্রয়োজনীয় ভ্যালু ছাড়া অন্য ভ্যালু বাদ দিয়ে দেয়
/*
$myArray = ['mango','',null,123];
$filetredArray = array_filter($myArray);
print_r($filetredArray);
*/

//***********************************************************
//              007-5. extract() - ফাংশন
//***********************************************************
/*
$name = 'Anis';
echo $name;
echo "\n";
$persons=['name'=>'Habib','city'=>'Khulna','phone'=>123456];
extract($persons); 
// এই extract() ফাংশন এরের প্রতি টা key কে এক এক টা variable এ কনর্ভাট করে। 
// এক্ষেত্রে দেখা যাচ্ছে, $name নামক একটা ভ্যারিয়েবল আগে থেকে ডিক্লিয়ার এবং ভ্যালু এসাইন করা থাকলেও extract() ফাংশন টি চালানোর ঐ $name ভ্যারিয়েবল এর আগের ভ্যালু চেঞ্জ হয়ে এরের মধ্যের key এর ভ্যালু দিয়ে আপডেট হয়েছে। 
echo $name;
echo "\n";
echo $city;
*/

//***********************************************************
//              007-6. array_slice(); - ফাংশন
//***********************************************************
$myArray=range(1,5); // এই রেঞ্জ ফাংশন টি দিয়ে সহজে ১ থেকে ৫ পর্যন্ত নম্বর দিয়ে একটি এরে তৈরী করা হল।
print_r($myArray);
echo "Value of $ myArray[3] is: ".$myArray[3]."\n";
$mySlicedArray=array_slice($myArray,3,2); 
// array_slice() ফাংশন টি একটি এরে কে স্লাইস বা ছোট ভাগে ভাগ করে। 
// ফাংশনটির মোট ৩ টি প্যারামিটার। 
// প্রথম প্যারামিটারঃ যে এরেটি কে আমরা স্লাইস করতে চাই তার নাম।
// দ্বিতীয় প্যারামিটারঃ এরেটির যে আইটেম থেকে স্লাইস শুরু হবে তার ইনডেক্স। এখানে মূল এরের ৩ নম্বর ইনডেক্স $myArray[3]=4 থেকে স্লাইস শুরু করার জন্য বলা হয়েছে। 
// তৃতীয় প্যারামিটারঃ স্লাইসের শুরু থেকে মূল এরের কতগুলা আইটেম নিয়ে স্লাইস হবে সে সংখ্যা। যেমন এখানে মূল এরের ৩ নম্বর ইনডেক্স থেকে শুরু করে ২ টি আইটেম নিয়ে স্লাইস করার জন্য বলা হয়েছে। 
print_r($mySlicedArray);

?>