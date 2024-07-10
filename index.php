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

    
</body>
</html>