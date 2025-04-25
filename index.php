<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Campaigning Tool</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script>
        tailwind.config = {
            darkMode: 'class', // enables class-based dark mode
            theme: {
                extend: {
                    colors: {
                        primary: '#075E54',
                        secondary: '#000000',
                        btn: '#242424',
                        darkBg: '#121212',
                        lightBg: '#ffffff' // light mode bg
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                    }
                }
            }
        }
    </script>

    <!-- ✅ Load custom fonts (optional) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-lightBg text-black dark:bg-darkBg dark:text-white transition-colors duration-300  ">
    <nav class="flex h-[64px] pl-[50px] pr-[50px] border-b-2 border-[#353131] items-center">
        <div class="left-side flex items-center justify-between  w-[60%]">
            <div class="h4">Campaigning Tool</div>
            <div class="list-nav flex items-center gap-5">
                <span class="font-[500] text-[15.2px]">
                    <a href="#product">Product
                    <i class="ri-arrow-down-s-line"></i>
                    </a>
                </span>
                <span class="font-[500] text-[15.2px]">
                    <a href="#Features">Features
                    <i class="ri-arrow-down-s-line"></i>

                    </a>
                </span>
                <span class="font-[500] text-[15.2px]">
                    <a href="#Enterprise">Enterprise</a>
                </span>
                <span class="font-[500] text-[15.2px]">
                    <a href="#Pricing">Pricing</a>
                </span>
                <span class="font-[500] text-[15.2px]">
                    <a href="#Docs">Docs</a>
                </span>
                <span class="font-[500] text-[15.2px]">
                    <a href="#Contact">Contact</a>
                </span>
            </div>


        </div>
        <div class="right-side">

        </div>
    </nav>


<script src="./js/index.js"></script>

</body>

</html>