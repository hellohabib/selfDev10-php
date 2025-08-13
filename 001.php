
<?php
//********************************************
//              001. Starting
//********************************************

/*<<== এই কমেন্ট উঠায় দিয়ে প্রাক্টিস করতে হবে
echo "Bismillah\n";
echo "Starting in the name of Almighty Allah\n";
এই কমেন্ট উঠায় দিয়ে প্রাক্টিস করতে হবে ==>> */


//********************************************
//              002. Variables
//********************************************
/* 
---------------------------------
Variable naming Rule:
---------------------------------
01. Variable name must start with $ sign
02. Number can't come first like $122name
03. PHP Reserve words can't be used as variable name
*/
/*<<== এই কমেন্ট উঠায় দিয়ে প্রাক্টিস করতে হবে
$my_name_is_in_this_variable=" Hello Habib"; 
echo $my_name_is_in_this_variable;
এই কমেন্ট উঠায় দিয়ে প্রাক্টিস করতে হবে ==>> */
/*  
---------------------------------
Variable naming best practices:
---------------------------------
01. Snake-Case: is used in most of the cases. 
    Example:
        $my_name_is_in_this_variable
02. Camel-Case: is used for "Method" name. 
    Example:
        $myNameIsInThisVariable
03. Pascal-Case: is used for "Class" name
    Example:
        $MyNameIsInThisVariable
*/

//********************************************
//              003. Constant
//********************************************
/*
কন্সট্যান্ট এর ভ্যালু কখনো চেঞ্জ হবে না।
কন্সট্যান্ট ডিক্লিয়ার করার জন্য নিচের ফাংশন ব্যবহার করতে হবেঃ
define("CONSTANT_NAME",23);
এখানে CONSTANT_NAME হল কন্সট্যান্ট এর নাম যা ইচ্ছা মত দেওয়া যাবে এবং 23 হল কন্সট্যান্ট ভ্যালু যা কখনো চেঞ্জ করা যাবে না।
 */
/*<<== এই কমেন্ট উঠায় দিয়ে প্রাক্টিস করতে হবে
define("pi", 3.1416);
echo pi;
এই কমেন্ট উঠায় দিয়ে প্রাক্টিস করতে হবে ==>> */

//********************************************
//              004. Expression Vs Statement
//********************************************
/*
$x=25;
** এখানে $x এবং 25 হল এক্সপ্রেশন এবং পুরা $x=25; লাইনটা হল স্টেট্মেন্ট।
** সকল স্টেটমেন্ট সেমিকোলোন (;) দিয়ে শেষ হয়।
*/

//********************************************
//              005. Data-Types
//********************************************
/*
01. Scalar Type
    Integer         ==>> $id = 502;
    Float/Double    ==>> $price = 45.50;
    String          ==>> $full_name = "Hello Habib"; 
    Boolean         ==>> $is_regular = true;
02. Compound Type
    Array
    Object
03. Special Type
    Null 
    Resource
*/

///*<<== এই কমেন্ট উঠায় দিয়ে প্রাক্টিস করতে হবে
//*****     Intiger Data Type
//$age=25;
//*****     Float / Double Data Type
//$price=25.39;
//*****     String Data Type
//$name="Hello Habib";
//*****     Boolean Data Type
//$is_regular=true;
//এই কমেন্ট উঠায় দিয়ে প্রাক্টিস করতে হবে ==>> */


//********************************************
//              006. Operator
//********************************************


//********      Assignment Operator =
//********      Assignment Operator Complex += , -= , *= , /= 
//  $n1=10;
//  $n2=5;
//********      Aritmetic Operator + , - , * , / , %
//********      Aritmetic Operator - Addition +
//********      Aritmetic Operator - Subtruction -
//********      Aritmetic Operator - Multiplicaiton *
//********      Aritmetic Operator - Division /
//********      Aritmetic Operator - Modulas %
// $n2="10";
// $equal= $n1==$n2;
// echo $equal;
?>