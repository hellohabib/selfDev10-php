<?php
// PHP Class-9 

// Learning from Youtube Channel: Projukti Plus

// Channel Link:
//  https://www.youtube.com/@projuktiplus

// Video link for this file named "009.php"



//***********************************************************
//              009-1. Double=Quote "" Vs Single-Quote ''
//***********************************************************
$name="Hello Habib";
echo "My name is $name"; echo "\n";// Output: My name is Hello Habib
echo 'My name is $name'; // Output: My name is $name
// সিংগেল-কোট দিলে '' এর মধ্যে যা আছে as it is তাই ই দেখায়। যেমনঃ এখানে ভ্যারিয়েবল $name এর ভ্যালু না দেখিয়ে ডাইরেক্ট ভ্যারিয়েবল নেম টাই দেখিয়েছে। আরো এক্সাম্পেল, ভাল করে ডাবল-কোট " " এবং সিংগেল-কোট ' '  এর মধ্যের আউটপুট খেয়াল করতে হবে।
// মূল কথা হলঃ সবসময় ডাবল-কোট " " ইউজ করাই ভাল
// Example-1
echo "\n\n Example-1 \n ";
echo " My name is \n $name"; echo "\n";
echo ' My name is \n $name'; 
// Example-2
echo "\n\n Example-2 \n ";
echo " My name is \n \t $name"; echo "\n";
echo ' My name is \n \t $name'; echo "\n"; echo "\n";
// Example-3
echo "\n\n Example-3 \n ";
echo " I'm $name"; echo "\n";
//echo 'I'm $name'; // রান ই হবে না, এরর দিবে
echo ' I\'m $name'; 

//***********************************************************
//              009-2. 
//***********************************************************


?>