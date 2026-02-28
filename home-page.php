<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UM INTRAMURALS SPORTS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&family=Geist:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
    <div>
        <!-- bg image -->
        <img src="/assets/background.png" alt="" class="w-full h-screen object-cover">

        <!-- navigation -->
        <nav class="absolute top-0 left-0 w-full flex items-center justify-between p-6">
            <div class="flex flex-row items-center gap-3">
                <img src="/assets/umlogo.png" alt="UM Logo">
                <div class="flex flex-col text-white m-0 leading-none">
                    <h1 class="text-[14px] m-0 italic" style="font-family: 'Geist';">UNIVERSITY OF MINDANAO</h1>
                    <h1 class="font-bold text-[32px] m-0" style="font-family: 'Antonio';">INTRAMURALS SPORTS</h1>
                </div>
            </div>
            <div class="flex flex-row gap-[120px] items-center text-center text-white text-[16px]" style="font-family: 'Geist', sans-serif;">
                <div class="flex row gap-2">
                    <img src="/assets/↵.svg" alt="">
                    <a href="login.php">HOME</a>
                </div>
                <div class="flex row gap-2">
                    <img src="/assets/↵.svg" alt="">
                    <a href="#">ABOUT US</a>
                </div>
                <div class="flex row gap-2 border border-white rounded-[7px] px-2 py-1">
                    <img src="/assets/↵.svg" alt="">
                    <a href="register.php">CREATE ACCOUNT</a>
                </div>
            </div>
        </nav>

        
    </div>
</body>
</html>