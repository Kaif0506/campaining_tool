<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Campaigning Tool</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="./src/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css"
    integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>





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

<body class="bg-lightBg text-black dark:bg-darkBg dark:text-white transition-colors duration-300">
<nav class="flex h-[64px] pl-[20px] pr-[20px] sm:pl-[50px] sm:pr-[50px] border-b-2 border-[#353131] w-full items-center justify-between sticky top-0 bg-white z-30 lg:relative">
  
  <div class="left-side flex items-center justify-between lg:w-[65%]">
    <div class="h4 font-bold lg:text-[16px] xl:text-xl">Campaigning Tool</div>
    <div class="list-nav hidden lg:flex lg:gap-3 items-center gap-5 ml-5">
      <span class="font-[500] text-[15.2px]"><a href="#product">Product <i class="ri-arrow-down-s-line"></i></a></span>
      <span class="font-[500] text-[15.2px]"><a href="#Features">Features <i class="ri-arrow-down-s-line"></i></a></span>
      <span class="font-[500] text-[15.2px]"><a href="#Enterprise">Enterprise</a></span>
      <span class="font-[500] text-[15.2px]"><a href="#Pricing">Pricing</a></span>
      <span class="font-[500] text-[15.2px]"><a href="#Docs">Docs</a></span>
      <span class="font-[500] text-[15.2px]"><a href="#Contact">Contact</a></span>
    </div>
  </div>

  <div class="right-side hidden  lg:flex items-center gap-5 lg:w[35%]">
    <div class="flex items-center gap-1 justify-center">
      <i class="ri-github-fill text-[28px]"></i>
      <span class="text-[12px]">77.1K</span>
    </div>
    <div class="sign-in-btn bg-secondary text-white text-center rounded-[6px] py-1 px-3 font-[300] cursor-pointer">
      Sign in
    </div>
    <div class="bg-primary text-white text-center rounded-[6px] py-1 px-3 font-[300] cursor-pointer">
      Start free trial
    </div>

    <!-- Mobile Menu Toggle Button -->
    
  </div>
  <button id="menu-toggle" class="lg:hidden text-2xl ml-2 z-50">
      <i id="menu-icon" class="ri-menu-line"></i>
    </button>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col p-6 gap-4 z-40">
    <span class="font-[500] text-[16px]"><a href="#product">Product <i class="ri-arrow-down-s-line"></i></a></span>
    <span class="font-[500] text-[16px]"><a href="#Features">Features <i class="ri-arrow-down-s-line"></i></a></span>
    <span class="font-[500] text-[16px]"><a href="#Enterprise">Enterprise</a></span>
    <span class="font-[500] text-[16px]"><a href="#Pricing">Pricing</a></span>
    <span class="font-[500] text-[16px]"><a href="#Docs">Docs</a></span>
    <span class="font-[500] text-[16px]"><a href="#Contact">Contact</a></span>

    <div class="flex flex-col gap-3 mt-4">
      <div class="flex items-center gap-2">
        <i class="ri-github-fill text-[24px]"></i>
        <span class="text-[12px]">77.1K</span>
      </div>
      <div class="bg-secondary text-white text-center rounded-[6px] py-2 font-[300] cursor-pointer">Sign in</div>
      <div class="bg-primary text-white text-center rounded-[6px] py-2 font-[300] cursor-pointer">Start free trial</div>
    </div>
  </div>

  <!-- Background overlay -->
  <div id="overlay" class="fixed inset-0 bg-black opacity-30 hidden z-30"></div>
</nav>

  
  <section class="hero section flex justify-center items-center py-8 sm:py-16 px-2 sm:px-4">
    <div class="main w-full max-w-4xl text-center flex flex-col items-center gap-y-6 ">

      <!-- Top Text -->
      <p class="text-[12px] sm:text-[14px] fade-up">Meta Tech Partner · Powered by official WhatsApp API</p>

      <!-- Main Heading -->
      <h1 class="text-2xl sm:text-4xl lg:text-6xl font-bold leading-snug overflow-hidden" data-aos="zoom-out">
        Do smart work with <br>
        <span class="text-primary">the power of WhatsApp</span>
      </h1>

      <!-- Paragraph 1 -->
      <p class="text-[14px] sm:text-[16px] text-gray-700 dark:text-gray-300 max-w-3xl">
        Broadcast, Automate, Engage, Sell - Do Everything with the Smartest WhatsApp Engagement Platform.
      </p>

      <!-- Paragraph 2 -->
      <p class="text-[14px] sm:text-[16px] text-gray-700 dark:text-gray-300 max-w-2xl">
        Sell more with personalised communication on WhatsApp. Automate marketing, sales, service and support by
        WhatsApp Business API.
      </p>

      <!-- Hero Button Group -->
      <div class="hero-button-grp flex flex-col items-center gap-3 mt-4 overflow-hidden">
        <span class="text-[12px] sm:text-[14px] font-medium">Powered by Official WhatsApp APIs ⚡</span>

        <div class="btns flex flex-col sm:flex-row gap-3 mt-3 sm:mt-0 overflow-hidden" data-aos="zoom-out-left">
          <button class="bg-primary py-2 px-6 text-[13px] sm:text-[15px] text-white rounded-[7px] font-[500]">
            Start your project
          </button>
          <button class="bg-secondary py-2 px-6 text-[13px] sm:text-[15px] text-white rounded-[7px] font-[500]">
            Request a demo
          </button>
        </div>
      </div>

      <!-- Small Note -->
      <p class="text-[12px] sm:text-[14px] text-gray-700 dark:text-gray-300 max-w-2xl">
        No credit card required · Cancel anytime. Free for 7 days
      </p>

      <!-- Images (Logo Row) -->
      <div class=" w-[100%] sm:w[70%] gradient-color flex items-center justify-around">
        <img src="./assets/img/Image [h-12] (1).svg" alt="" class="w-[14%]  ">
        <img src="./assets/img/Image [h-12] (2).svg" alt="" class="w-[14%]">
        <img src="./assets/img/Image [h-12] (3).svg" alt="" class="w-[14%]">
        <img src="./assets/img/Image [h-12] (4).svg" alt="" class="w-[14%]">
        <img src="./assets/img/Image [h-12].svg" alt="" class="w-[14%]">
      </div>

      <!-- Trusted Text -->
      <p class="text-[12px] sm:text-[14px] text-gray-700 dark:text-gray-300 max-w-2xl mt-4">
        Trusted by fast-growing companies worldwide
      </p>

    </div>
  </section>











  <section class="section py-8 sm:py-16 px-2 sm:px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

      <!-- First item -->
      <div class="col1 bg-primary text-white h-80 md:col-span-2 flex p-5 justify-between rounded-lg">
        <div class="left w-[60%] flex flex-col justify-between">
          <div class="top">
            <h3><span><i class="ri-bar-chart-horizontal-fill"></i></span> Whatsapp Automation</h3>
            <p class="text-[14px] font-[300] mt-3">
              Automate WhatsApp messages for leads, reminders, and campaigns.
            </p>
          </div>
          <div class="bottom">
            <p class="text-[15px] flex items-center gap-2">
              <i class="ri-check-line text-[20px]"></i> <span>24/7 Availability</span>
            </p>
            <p class="text-[15px] flex items-center gap-2">
              <i class="ri-check-line text-[20px]"></i> <span>Smart Triggers</span>
            </p>
            <p class="text-[15px] flex items-center gap-2">
              <i class="ri-check-line text-[20px]"></i> <span>Bulk Messaging</span>
            </p>
          </div>
        </div>
        <div class="right flex items-center w-[40%] overflow-hidden ">
          <img src="./assets/img/elephant.svg" alt="" class=" object-fill">
        </div>
      </div>

      <!-- Second item -->
      <div class="col3 p-5 bg-primary text-white h-80 flex flex-col justify-between rounded-lg">
        <div class="top">
          <h3><span><i class="ri-lock-star-fill text-white"></i></span> Whatsapp Automation</h3>
          <p class="text-[14px] font-[300] mt-3">
            Manage contact lists, segment users, and control campaigns easily.
          </p>
        </div>
        <div class="bottom grid grid-cols-2 gap-2">
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]">campaigningtool.com</div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]">alex160198</div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]"><span class="blur-sm">alex160198</span></div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]"><span class="blur-sm">alex160198</span></div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]">abc@gmail.com</div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]">momester300</div>
        </div>
      </div>

      <!-- Third item -->
      <div class="col4 p-5 bg-primary text-white h-80 relative overflow-hidden rounded-lg">
        <h3 class="flex gap-2">
          <img src="./assets/img/smartcamp.png" alt="">Smart Campaigns
        </h3>
        <p class="text-[14px] font-[300] mt-3">
          Launch intelligent campaigns with scheduling and branching conditions.
        </p>
        <p class="text-[13px] font-[300] md:mt-2">"Schedule" → "Conditions" → "Send message"</p>
        <div class="center w-full flex justify-center mt-3 lg:mt-2">
          <span class="border-2 rounded-3xl px-5 py-0.5 text-[15px] ">Campaigning Tool</span>
        </div>
        <div class="absolute -bottom-32 right-0 sm:top-12 w-full xl:top-3 overflow-hidden">
          <img src="./assets/img/glove.svg" alt="" class="w-full">
        </div>
      </div>

      <!-- Fourth item -->
      <div class="col5 p-5 bg-primary text-white h-80 flex justify-between flex-col gap-4 rounded-lg">
        <div class="top overflow-hidden">
          <h3><span><i class="ri-book-shelf-line"></i></span> Media Library</h3>
          <p class="text-[14px] font-[300] mt-3">
            Store and send media images, videos, and PDFs with campaigns.
          </p>
        </div>
        <div class="bottom grid grid-cols-4 gap-2">
          <img src="./assets/img/img-vid.svg" alt="" class="h-[90%]">
          <img src="./assets/img/img-vid.svg" alt="" class="h-[90%]">
          <img src="./assets/img/img-vid.svg" alt="" class="h-[90%]">
          <img src="./assets/img/img-vid.svg" alt="" class="h-[90%]">
        </div>
      </div>

      <!-- Fifth item -->
      <div class="col6 p-5 bg-primary text-black h-80 relative overflow-hidden rounded-lg">
        <div class="absolute inset-0 z-10 bg-gradient-to-t from-transparent via-white/20 to-white"></div>
        <img src="./assets/img/Clip path group.png" alt="" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="relative z-20">
          <h3 class="text-xl flex items-center gap-2">
            <span><i class="ri-timer-flash-line text-2xl"></i></span> Real-time Analytics
          </h3>
          <p class="text-[14px] font-[300] mt-3">
            Track open rates, clicks, and user engagement in real time.
          </p>
        </div>
        <img src="./assets/img/arrow.svg" alt="" class="absolute bottom-16 left-20 z-20">
        <img src="./assets/img/button.png" alt="" class="absolute bottom-20 right-28 z-20">
      </div>

      <!-- Sixth item -->
      <div
        class="col7 p-5 bg-primary text-white h-80 relative overflow-hidden rounded-lg flex justify-between flex-col">
        <div class="top">
          <h3 class="flex gap-2">
            <img src="./assets/img/ai_reply.svg" alt="">Smart Campaigns
          </h3>
          <p class="text-[14px] font-[300] mt-3">
            Use AI to auto-suggest responses and save time.
          </p>
        </div>
        <div class="bottom z-20">
          <h3 class="flex gap-2 font-[300]">
            <img src="./assets/img/gpt.svg" alt="">OpenAI
          </h3>
          <h3 class="flex gap-2 font-[300] mt-2">
            <img src="./assets/img/sure_let_me_check.svg" alt="">“Sure, let me check...”
          </h3>
        </div>
        <img src="./assets/img/cube1.svg" class="absolute w-full h-full z-0" alt="">
      </div>

      <!-- Seventh item -->
      <!-- <div class="col8 p-5 bg-primary text-white h-80 relative overflow-hidden rounded-l">
  <h3 class="flex gap-2 font-[300]">
    <img src="./assets/img/data_api.svg" alt="">Data APIs
  </h3>
  <p class="text-[14px] font-[300] mt-3">
    Connect WhatsApp automation into your backend via secure RESTful APIs.
  </p>
  
  <img src="./assets/img/boxes.svg" alt="" 
    class="absolute top-0 left-0 w-full md:top-6 lg:top-[-20px]">
</div> -->

      <div class="p-6 bg-primary text-white rounded-lg h-80  relative overflow-hidden">
        <!-- Heading -->
        <h3 class="flex items-center gap-2 text-lg font-light mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
          </svg>
          Data APIs
        </h3>

        <!-- Paragraph -->
        <p class="text-sm font-light mb-6">
          Connect WhatsApp automation into your backend via secure RESTful APIs.
        </p>

        <!-- Buttons Section -->
        <div class="flex flex-col gap-4">
          <!-- Row 1 -->
          <div class="flex items-center gap-4">
            <button class="flex items-center gap-2 text-white text-xs py-2 px-3 rounded-md border-2">
              <i class="ri-building-line"></i> countries
            </button>
            <button class="flex items-center gap-2 bg-white text-primary text-xs py-2 px-3 rounded-full">
              countries
            </button>
          </div>

          <!-- Row 2 -->
          <div class="flex items-center gap-4">
            <button class="flex items-center gap-2 text-white text-xs py-2 px-3 rounded-md border-2">
              <i class="ri-building-line"></i> continents
            </button>
            <button class="flex items-center gap-2 bg-white text-primary text-xs py-2 px-3 rounded-full">
              continents
            </button>
          </div>

          <!-- Row 3 -->
          <div class="flex items-center gap-4">
            <button class="flex items-center gap-2 text-white text-xs py-2 px-3 rounded-md border-2">
              <i class="ri-building-line"></i> cities
            </button>
            <button class="flex items-center gap-2 bg-white text-primary text-xs py-2 px-3 rounded-full">
              cities
            </button>
          </div>

          <!-- Row 4 -->
          <div class="flex items-center gap-4">
            <button class="flex items-center gap-2  text-white text-xs py-2 px-3 rounded-md border-2">
              <i class="ri-building-line"></i> states
            </button>
            <button class="flex items-center gap-2 bg-white text-primary text-xs py-2 px-3 rounded-full">
              states
            </button>
          </div>

          <!-- Row 5 -->

        </div>
      </div>

    </div>
  </section>






<script src="./js/index.js"></script>
<script>
   AOS.init({
    duration: 1200,  
    easing: 'ease',  
    once: true,      
  });
</script>



</body>

</html>