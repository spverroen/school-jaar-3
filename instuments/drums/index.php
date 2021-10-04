<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./index.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Drums</title>
</head>
<body onload="onstart()">
    <div class="h-screen select-none flex flex-col">
        <div class="flex flex-col flex-grow">
            <div class="flex justify-center text-4xl py-24">Drums</div>
            <div class="flex flex-row justify-center items-center mb-8">
                <span class="mr-64 h-16 w-48 border-8 border-black flex justify-center items-center bg-black" style="border-radius: 50%"><span class="text-3xl bg-gray-300 px-3 rounded-full">5</span></span>
                <span class="ml-64 h-16 w-48 border-8 border-black flex justify-center items-center bg-black" style="border-radius: 50%"><span class="text-3xl bg-gray-300 px-3 rounded-full">6</span></span>
            </div>
            <div class="flex flex-row justify-center items-center">
                <span class="mr-8 h-48 w-48 bg-white rounded-full border-8 border-black flex justify-center items-center"><span class="text-3xl bg-gray-300 px-5 py-2 rounded-full">2</span></span>
                <span class="ml-8 h-48 w-48 bg-white rounded-full border-8 border-black flex justify-center items-center"><span class="text-3xl bg-gray-300 px-5 py-2 rounded-full">3</span></span>
            </div>
            <div class="flex flex-row justify-center items-center">
                <span class="mr-32 h-48 w-48 bg-white rounded-full border-8 border-black flex justify-center items-center"><span class="text-3xl bg-gray-300 px-5 py-2 rounded-full">1</span></span>
                <span class="ml-32 h-48 w-48 bg-white rounded-full border-8 border-black flex justify-center items-center"><span class="text-3xl bg-gray-300 px-5 py-2 rounded-full">4</span></span>
            </div>
            <div class="flex flex-row justify-center items-center mt-8">
                <span>You can press the numbers 1-6 on your keyboard!</span>
            </div>
        </div>
        <div class="flex flex-col justify-center my-16 justify-center items-center">
            <span>Pick your color here! </span>
            <input class="border-transparent w-24 h-24" type="color" onchange="background()" id="color">
        </div>
    </div>
</body>
</html>