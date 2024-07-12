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



</body>
</html>