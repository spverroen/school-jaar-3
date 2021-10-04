<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./index.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Piano</title>
</head>
<body onload="onstart()">
    <div class="h-screen select-none flex flex-col" id="main">
        <div class="flex flex-col flex-grow">
            <div class="flex justify-center text-4xl py-24">Piano</div>
            <div class="flex flex-row justify-center items-center">
                <?php 
                $str = "a";
                for($i=0;$i<5;$i++) {
                    $number = 3;
                    for($y=0;$y<3;$y++) { ?>
                        <div class="w-12 h-48 border-2 border-collapse border-white rounded shadow bg-white hover:bg-gray-100 flex justify-center items-center text-2xl transform hover:scale-95" onclick="playAudio('<?php echo $str . $number ?>')"><span><?php echo $str . $number ?></span></div>
                        <div class="w-12 h-48 border-2 border-collapse border-white rounded shadow bg-white hover:bg-gray-100 flex justify-center items-center text-2xl transform hover:scale-95" onclick="playAudio('<?php echo $str . '-' . $number ?>')"><span><?php echo $str . '-' . $number ?></span></div>
                        <?php $number++;
                    }
                    if($str == "d" || $str == "a") {
                        ++$str;
                        ++$str; 
                    } else {
                        ++$str;
                    }
                } ?>
            </div>
        </div>
        <div class="flex flex-col justify-center my-16 justify-center items-center">
            <span>Pick your color here! </span>
            <input class="border-transparent w-24 h-24" type="color" onchange="background()" id="color">
        </div>
    </div>
</body>
</html>