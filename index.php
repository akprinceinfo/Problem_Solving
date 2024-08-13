<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem Solving</title>
</head>
<body>
    <?php 

        // 1. Write a PHP  script to get the PHP version and configuration information.
            // phpinfo();

        // 2. Write a PHP  script to display the following strings.
            // echo "Tomorrow I'll learn PHP global variables." . "\n";
            // echo "This is a bad command : del c:\\*.*" . "\n";

    ?>
    <!-- // 3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document. -->
    <?php  #$var = 'PHP Tutorial'; ?>    
    <h3><?php # echo $var ;?></h3>


    <!-- 4. Create a simple HTML form and accept the user name and display the name through PHP echo statement. -->
    <?php 
        // $name = "";
        // if(isset($_REQUEST['submit'])) {
        //     $name = $_REQUEST['name'];
        // }
    ?>
    <!-- <form action="" method="POST">
        <h2>Please input your name:</h2>
        <input type="text" name="name" id="">
        <input type="submit" name="submit" value="Submit Name">
    </form> -->

    <?php # echo $name ?>

    <!-- 5. Write a PHP  script to get the client IP address. -->
    <?php
        // Check if the IP is from shared internet
        // if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //     $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        // }
        // // Check if the IP is from a proxy
        // elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //     $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        // }
        // // If not from shared internet or proxy, consider it as the remote address
        // else {
        //     $ip_address = $_SERVER['REMOTE_ADDR'];
        // }

        // // Display the determined IP address
        // echo $ip_address;
    ?>

    <!-- 6. Write a simple PHP browser detection -->
    <?php 
        // echo "Your User-Agent is:" . $_SERVER['HTTP_USER_AGENT'];
    ?>

    <!-- 7. Write a PHP script to get the current file name. -->
    

    <?php
        // $current_file_name = basename($_SERVER['PHP_SELF']);
        // echo $current_file_name . "\n";
    ?>


    <pre>
    <?php 
        // if (isset($_POST['btn'])) {
        //     $fName = $_FILES['fileName'];
        //         // var_dump($fName); 
        //         echo $fName['name'];
            
        // }
    ?>
    </pre>

    <!-- <form method="POST" enctype="multipart/form-data" action="">
        <input type="file" name="fileName" id="">
        <input type="submit" value="file Send" name="btn">
    </form> -->

    <!-- 8. Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'. -->


    <?php
        // $url = "https://www.w3resource.com/php-exercises/php-basic-exercises.php";

        // $parsedUrl = parse_url($url);
        
        // echo "Scheme: " . $parsedUrl['scheme'] . "<br>";
        // echo "Host: " . $parsedUrl['host'] . "<br>";
        // echo "Port: " . (isset($parsedUrl['port']) ? $parsedUrl['port'] : 'N/A') . "<br>";
        // echo "Path: " . (isset($parsedUrl['path']) ? $parsedUrl['path'] : 'N/A') . "<br>";
        // echo "Query: " . (isset($parsedUrl['query']) ? $parsedUrl['query'] : 'N/A') . "<br>";
        // echo "Fragment: " . (isset($parsedUrl['fragment']) ? $parsedUrl['fragment'] : 'N/A') . "<br>";
    ?>
        <!-- parse_url এর ব্যবহার
        parse_url ফাংশনটি সাধারণত বিভিন্ন উদ্দেশ্যে ব্যবহৃত হয়:

        URL থেকে নির্দিষ্ট উপাদান বের করতে: উদাহরণস্বরূপ, ডোমেন, প্রোটোকল বা পাথ আলাদা করতে।
        URL এর বিভিন্ন অংশের উপর ভিত্তি করে লজিক প্রয়োগ করতে: যেমন রিডাইরেকশন, বিভিন্ন সাবডোমেনে অ্যাকশন নেওয়া।
        URL এর বৈধতা পরীক্ষা করতে। -->



    <!-- 9. Write a PHP script, which changes the color of the first character of a word. -->
    <?php 

        // $text = "PHP Tutorial"; 
        // // color of first character of the word 
        // $text = preg_replace('/(\b[a-z])/i', 
        // '<span style="color:green;">\1</span>', $text); 
        // // Display the text value 
        // echo $text
    ?>

    <!-- 10. Write a PHP  script, to check whether the page is called from 'https' or 'http'. -->
    <?php
        // function checkProtocol() {
           
        //    if (isset($_SERVER['HTTPS']) == 'true') {
        //      return 'https';
        //    }else{
        //     return 'http';
        //    }
        // }

        // // Usage
        // $protocol = checkProtocol();
        // echo "The page is called using " . $protocol;
    ?>

    <!-- 11. Write a PHP script to redirect a user to a different page . -->
    <?php 
        //header('Location: https://www.w3resource.com/');
    ?>
    
    <!-- 12. Write a simple PHP program to check that emails are valid. -->


    <?php 
        // $email = "";
        // $emailErr = "";

        // if (isset($_REQUEST['send'])) {
        //     $email = $_REQUEST['email'];

        //     if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        //         $emailErr = "Invalid email format";
        //     }else{
        //         $emailErr = "email format";
        //     }
        // }
        // echo $emailErr;
    ?>
    <!-- <form method="POST">
        <input type="text" name="email" id="">
        <input type="submit" value="Send" name="send">
    </form> -->

    <!-- 13. Write a e PHP script to display string, values within a table. -->

    <?php
    //     $name = array("A","B","C");
    //     $money = array("1000$","1200$","1400$");
    // ?>
    <table border="1">
        <!-- <tr>
            <td>Salary od Mr. <?php echo $name[0] ?> is</td>
            <td> <?php echo $money[0] ?></td>
        </tr>
        <tr>
            <td>Salary od Mr. <?php echo $name[1] ?> is</td>
            <td> <?php echo $money[1] ?></td>
        </tr>
        <tr>
            <td>Salary od Mr. <?php echo $name[2] ?> is</td>
            <td> <?php echo $money[2] ?></td>
        </tr> -->

    </table>

    <!-- 14. Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/"). -->
    <?php
        // // Read all lines from the specified URL and store them in an array
        // $all_lines = file('http://www.example.com/');

        // // Iterate through each line in the array
        // foreach ($all_lines as $line_num => $line)
        // {
        //     // Display the line number and the HTML-escaped content of the line
        //     echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br />\n";
        // }
    ?>

    <!-- 15. Write a PHP script to get last modified information of a file. -->

   
    <?php
        // // Get the current file name using basename and $_SERVER['PHP_SELF']
        // $current_file_name = basename($_SERVER['PHP_SELF']);

        // // Get the last modification time of the current file
        // $file_last_modified = filemtime($current_file_name);

        // // Display the last modified time in a human-readable format
        // echo "Last modified " . date("l, dS F, Y, h:i a", $file_last_modified) . "\n";
    ?>

    <!-- 16. Write a PHP script to count number of lines in a file. -->

    <?php 
        // $filePath = "index.php"; 
        // $lines = count(file($filePath)); 
        // echo $lines; 
    ?> 
    <!-- 17. Write a PHP script to print current PHP version. -->

    <?php # echo phpversion() ?>

    <!-- 18. Write a PHP script to delay the program execution for the given number of seconds. -->
    <?php
        // // Output the current time in the 'hour:minute:second' format
        // echo date('h:i:s a') . "\n";

        // // Sleep for 2 seconds
        // sleep(2);

        // // Output the current time again after waking up
        // echo date('h:i:s a')."\n";
    ?>

    <!-- 19. Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers. -->
    
    <?php 
        // $d = 1;
        // while ($d <=5) {
        // echo "A0".$d . "</br>";
        // $d++;
    // }

        // $d = 'A00';
        // // Loop through 5 iterations
        // for ($n = 0; $n < 5; $n++) {
        //     // Increment $d and echo the result
        //     echo ++$d . "\n";
    // }

    ?>

    <!-- 20. Write a PHP script to get the last occurred error. -->
    <?php
        // echo $name;
    ?>
    <pre> 
        <?php # print_r(error_get_last()); ?>
    </pre>

    <!-- 21. Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator. -->
    <?php
        
        // function trinary($input){
        //     $data = $input > 30 ? "Output > 30" : ($input > 20 ? "Output > 20" : ($input > 10 ? "Output > 10" : "Output < 10"));
        //     echo $data . " : " . $input . "\n"  . "<br>";
        // }
        // trinary(20) ;
        // trinary(21) ;
        // trinary(12) ;
        // trinary(4) ;
    ?>

    <!-- 22. Write a PHP script to get the full URL. -->

    <?php
        // $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // echo $full_url . "\n";
    ?>

    <!-- 23. Write a PHP script to compare the PHP version. -->

    <?php 
        // if (version_compare(PHP_VERSION,'7.000')> 0) {
        //     echo 'I am at least PHP version 7.0.0, my version: ' . PHP_VERSION . "\n";
        // }
        // if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
        //     echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . "\n";
        // }
        // if (version_compare(PHP_VERSION, '5.0.0', '<')) {
        //     echo 'I am still PHP 4, my version: ' . PHP_VERSION . "\n";
        // }
    ?>
    <!-- 24. Write a PHP script to get the name of the owner of the current PHP script. -->
    <?php
       // echo 'Current script owner: ' . get_current_user() . "\n";
    ?>
    
    <!-- 25. Write a PHP script to get the document root directory under which the current script is executing, as defined in the server's configuration file. -->

    <?php 
        // $input = getenv("DOCUMENT_ROOT");
        // echo $input;
    ?>

    <!-- 26. Write a PHP script to get the information about the operating system PHP is running on. -->
    <?php 
        //  echo(PHP_OS);
    ?>
    <!-- 27. Write a PHP script to print out all the credits for PHP. -->
    <?php 
        // phpcredits(CREDITS_ALL - CREDITS_FULLPAGE); 
    ?>
    <!-- 28. Write a PHP script to get the directory path used for temporary files. -->
    <?php 
        // $temp_file = tempnam(sys_get_temp_dir(), 'apple');
        // echo $temp_file;
    ?>
    <!-- 29. Write a PHP script to get the names of the functions of a module. -->
    <?php 
        // $json_extension_funcs = get_extension_funcs("JSON");
        // print_r($json_extension_funcs);
        // echo "\n" . "<br>";

        // $xml_extension_funcs = get_extension_funcs("XML");
        // // Print the list of XML extension functions
        // print_r($xml_extension_funcs);
        // echo "\n";
    ?>
    <!-- 30. Write a PHP script to get the time of the last modification of the current page -->
    <?php 
        // $last_modified_time = getlastmod().date("F d Y H:i:s.", getlastmod());
        // echo $last_modified_time;
    ?>
    
    <!-- 31. Write a PHP program to swap two variables. -->
    <?php
        // $a = 5;
        // $b = 10;
        
        // echo "Before swapping: a = $a, b = $b\n";
        
        // // Swap values using a temporary variable
        // $temp = $a;
        // $a = $b;
        // $b = $temp;
        
        // echo "After swapping: a = $a, b = $b\n";

    ?>

    <!-- 32. Write a PHP program to check whether a number is an Armstrong number or not. Return true if the number is Armstrong otherwise return false. -->

    <?php 

    // function armstrongCheck($number){
    //     $sum = 0;  
    //     $x = $number;  
    //     while($x != 0)  
    //     {  
    //         $rem = $x % 10;  
    //         $sum = $sum + $rem*$rem*$rem;  
    //         $x = $x / 10;  
    //     }  
        
    //     // if true then armstrong number
    //     if ($number == $sum)
    //         return 1;
        
    //     // not an armstrong number    
    //     return 0;    
    // }
    
    // // Driver Code
    // $number = 153;
    // $flag = armstrongCheck($number);
    // if ($flag == 1)
    //     echo "armstrong number";
    // else
    //     echo "Not armstrong number"
    
    ?>

    <!-- 33. Write a PHP program to convert word to digit. -->
    <?php
     
        // function wordCheck($word){
        //     $warr = explode(';', $word);

        //     $result = "";

        //     foreach($warr as $value){
        //         switch (trim($value)) {
        //             case 'zero':
        //                 $result .= '0';
        //                 break;
        //             case 'one':
        //                 $result .= '1';
        //                 break;
        //             case 'two':
        //                 $result .= '2';
        //                 break;
        //             case 'three':
        //                 $result .= '3';
        //                 break;
        //             case 'four':
        //                 $result .= '4';
        //                 break;
        //             case 'five':
        //                 $result .= '5';
        //                 break;
        //             case 'six':
        //                 $result .= '6';
        //                 break;
        //             case 'seven':
        //                 $result .= '7';
        //                 break;
        //             case 'eight':
        //                 $result .= '8';
        //                 break;
        //             case 'nine':
        //                 $result .= '9';
        //                 break;    
        //                 }
        //             }
                
        //         return $result;

        // }
        // echo wordCheck("zero;three;five;six;eight;one") . "\n";

    ?>

<!-- 35. Write a PHP program to remove duplicates from a sorted list. -->

    <?php 
    
        //     function removeDuplicates($listData){
        //         $number = array_values(array_unique($listData));
        //         return $number;
        //     }

        //     $nums = array(1, 1, 2, 2, 3, 4,4, 5, 5);
        //    ?>
            <!-- <pre> -->
           <?php
            // print_r(removeDuplicates($nums));
    
    ?>
            <!-- </pre> -->


        <!-- 37. Write a PHP program to compute the sum of the prime numbers less than 100. -->
       
    <?php 

        // $primes = array();
        // $is_prime_no = false;

       
        // for ($i=2; $i < 100; $i++) { 
        //     $is_prime_no = true;

        //     for ($j=2; $j <= ($i/2); $j++) { 
        //         if ($i % $j == 0) {
        //             $is_prime_no = false;
        //             break;
        //         }
        //     }
        //     if ($is_prime_no) {
        //             array_push($primes, $i);
        //         }
        //     if (count($primes) == 100) {
        //         $is_prime_no = false;
        //         break;
        //     }
        // }
        // echo array_sum($primes) . "\n";
    ?>

    <!-- 38. Write a PHP program to valid an email address. -->

    <?php
        // $email = "";
        // $emailErr = "";
        // if(isset($_POST['submit'])) {
        //     $email = $_POST["em"];
        //     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         $emailErr = "Invalid email format";
        //         }else{
        //             echo "Done";
        //         }
        //         echo $emailErr;
        // }
              
    ?>

     <!-- <form method="POST">
        <input type="text" name="em" id="">
        <input type="submit" name="submit" value="Send">
     </form> -->

     <!-- 39. Write a PHP program to get the size of a file. -->
     <?php 
        // echo filesize("abc.php");
     ?>
    <!-- 40. Write a PHP program to calculate the mod of two given integers without using any inbuilt modulus operator. -->
    
    <?php 
        // $a = 5;
        // $b = 11;

        // $c =( $b % $a);
        // echo $c;
    ?>
    <!-- 41. Write a PHP program to print out the multiplication table upto 6*6. -->

    <?php 
    
            // for ($i=1; $i <= 5 ; $i++) { 
            //     for ($j=0; $j <= $i; $j++) { 
            //         echo " 0 ";
            //     }
            //     echo " 1 " ."</br>";
            // }
    
    ?>

   


</body>
</html>