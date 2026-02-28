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
<body class="overflow-hidden">
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
                    <a href="login.php">SIGN IN</a>
                </div>
            </div>
        </nav>

        <!-- KNOWLEDGE -->
        <div class="p-6 absolute flex flex-row transform translate-y-[-400px] h-screen">
           <div class="flex flex-col">
                <div class="text-[120px] font-bold leading-none tracking-tight" style="font-family: Antonio;">
                    <h1 class="text-white">PRIDE. PASSION.</h1>
                    <h1 class="text-white">PERFORM.</h1>
                </div>
                <div class="mt-10 tracking-tight leading-none font-semibold text-[20px]" style="font-family: Geist;">
                    <h1 class="text-white">WHERE PASSION MEETS COMPETITION.</h1>
                    <h1 class="text-white">EXPERIENCE UM INTRAMURALS.</h1>
                </div>
           </div>
           <!-- LOGIN FORM -->
            <div class="flex flex-col bg-[#373737] bg-opacity-70 border border-white rounded-[20px] w-[35rem] h-[500px] transform translate-x-[180px] translate-y-[-150px]">
                <form action="registration-process.php" method="POST">
                    <div class="p-4 flex flex-row w-full text-center items-center justify-center">
                    <h1 class="text-white text-[33px] font-bold" style="font-family: Geist;">CREATE ACCOUNT</h1>
                </div>
                <!-- INPUT FIELD -->
                <div class="p-3 flex flex-col transform gap-4">
                    <?php if (isset($_SESSION['register_success'])): ?>
                        <script>
                            alert("<?php echo $_SESSION['register_success']; ?>");
                            window.location.href = "login.php";
                        </script>
                        <?php unset($_SESSION['register_success']); ?>
                    <?php endif; ?>
                    <div class="flex flex-col">
                        <label for="FIRST NAME:" class="text-white">FIRST NAME:</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" class="w-full h-10 p-3 rounded-[7px] bg-[#A9A9A9] bg-opacity-70 text-white" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="LAST NAME:" class="text-white">LAST NAME:</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" class="w-full h-10 p-3 rounded-[7px] bg-[#A9A9A9] bg-opacity-70 text-white" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="EMAIL ADDRESS:" class="text-white">EMAIL ADDRESS:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" class="w-full h-10 p-3 rounded-[7px] bg-[#A9A9A9] bg-opacity-70 text-white" required>
                    </div>
                    <div class="flex flex-col items-start justify-start">
                        <label for="PASSWORD:" class="text-white">PASSWORD:</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" class="w-full h-10 p-3 rounded-[7px] bg-[#A9A9A9] bg-opacity-70 text-white" required>
                        <div class="flex flex-row items-center justify-center gap-2">
                            <input type="checkbox" class="mt-1">
                            <label for="terms" class="text-white">I agree to the</label>
                            <label for="Terms and Conditions" class="underline text-[#F7BF24]">Terms and Conditions</label>
                        </div>
                    </div>
                    <button class="bg-[#F7BF24] w-full h-10 rounded-[7px] text-[19px] font-bold" style="font-family: Geist;">
                        CREATE ACCOUNT
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>