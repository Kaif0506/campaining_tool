<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Campaigning Tool</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./output.css" rel="stylesheet">


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
    <h2 class="text-4xl font-bold mb-4">arpan</h2>




    <script src="./js/index.js"></script>

</body>

</html>