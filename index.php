<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Campaigning Tool</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./output.css" rel="stylesheet">
    <link href="./css/home.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        .scrollbar-hide {
            -ms-overflow-style: none !important;
            /* IE and Edge */
            scrollbar-width: none !important;
            /* Firefox */
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none !important;
            /* Chrome, Safari, Opera */
        }
    </style>
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

<body class="bg-lightBg text-black dark:bg-darkBg dark:text-white transition-colors duration-300 ">
    <section class="px-[50px]">
        <div class="text-white flex justify-center items-center flex-col gap-4 py-[2rem]">
            <p class="text-black font-bold text-[1.5rem] md:text-[35.2px]">Start building in seconds</p>
            <p class="text-black text-[10px] text-center md:text-[15px]">Kickstart your next project with templates built by us and our community.</p>
            <div class="flex justify-center items-center gap-2 my-3">

                <button class="bg-primary rounded-[5px] p-2 md:text-[13.2px] text-[10px] font-bold"> View all examples</button>
                <button class=" flex justify-center items-center  gap-2 md:text-[13.2px] text-[10px] font-bold bg-primary rounded-[5px] p-2"><img src="image/githibicon.png" alt=""><span>Official GitHub library</span></button>
            </div>
        </div>
        <div class="text-white flex justify-center items-center gap-4 flex-wrap">
            <div class="w-[352.44px] h-[300.15px] bg-primary rounded-[.8rem]">
                <div class="flex gap-3 md:py-[2rem] py-[1rem] justify-center items-center">
                    <!-- <img src="image/Vector (1).png" alt="" class="w-[40px] h-[40px]"> -->
                    <i class="ri-nextjs-fill" style="font-size:3rem"></i>
                    <img src="image/Vector (2).png" alt="" class="w-[40px] h-[40px]">
                    <!-- <img src="image/triangle.png" alt=""  class="w-[40px] h-[40px]"> -->
                    <i class="ri-triangle-fill" style="font-size:2.7rem"></i>
                </div>
                <hr>
                <div class="py-[1rem] flex gap-2 flex-col px-4 mt-2">
                    <p class="text-[17px]">Stripe Subscriptions Starter</p>

                    <p class="text-[13.2px]">The all-in-one subscription starter kit for high- performance SaaS applications, powered by Stripe, Supabase, and Vercel. </p>
                    <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
                </div>
            </div>
            <div class="w-[352.44px] h-[300.15px] bg-primary rounded-[.8rem]">
                <div class="flex gap-3 md:py-[2rem] py-[1rem] justify-center items-center">
                    <i class="ri-nextjs-fill" style="font-size:3rem"></i>
                    <i class="ri-triangle-fill" style="font-size:2.7rem"></i>
                </div>
                <hr>
                <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
                    <p class="text-[17px]">Next.js Starter</p>
                    <p class="text-[13.2px]"> A Next.js App Router template configured with cookie-based auth using Supabase, TypeScript and Tailwind CSS.
                    </p>
                    <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
                </div>
            </div>
            <div class="w-[352.44px] h-[300.15px] bg-primary rounded-[.8rem]">
                <div class="flex gap-3 md:py-[2rem] py-[1rem] justify-center items-center">

                    <i class="ri-nextjs-fill" style="font-size:3rem"></i>
                    <i class="ri-openai-fill" style="font-size:3rem"></i>
                    <i class="ri-triangle-fill" style="font-size:2.7rem"></i>
                </div>
                <hr>
                <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
                    <p class="text-[17px]">AI Chatbot</p>
                    <p class="text-[13.2px]"> An open-source AI chatbot app template built with Next.js, the Vercel AI SDK, OpenAI, and Supabase.

                    </p>
                    <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
                </div>
            </div>
            <div class="w-[352.44px] h-[300.15px] bg-primary rounded-[.8rem]">
                <div class="flex gap-3 md:py-[2rem] py-[1rem] justify-center items-center">
                    <img src="image/bird.png" alt="" class="w-[40px] h-[40px]">
                    <i class="ri-nextjs-fill" style="font-size:3rem"></i>

                </div>
                <hr>
                <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
                    <p class="text-[17px]">LangChain + Next.js Starter</p>
                    <p class="text-[13.2px]"> Starter template and example use-cases for LangChain projects in Next.js, including chat, agents, and retrieval.
                    </p>
                    <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
                </div>
            </div>
            <div class="w-[352.44px] h-[300.15px] bg-primary rounded-[.8rem]">
                <div class="flex gap-3 md:py-[1.7rem] py-[1.2rem] justify-center items-center">
                    <!-- <img src="image/flutter.png" alt="" class="w-[40px] h-[40px]"> -->
                    <i class="ri-flutter-fill" style="font-size:2.5rem"></i>

                </div>
                <hr>
                <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
                    <p class="text-[17px]">Flutter User Management</p>
                    <p class="text-[13.2px]"> Get started with Supabase and Flutter by building a user management app with auth, file storage, and database.
                    </p>
                    <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
                </div>
            </div>
            <div class="w-[352.44px] h-[300.15px] bg-primary rounded-[.8rem]">
                <div class="flex gap-3 py-[2rem] justify-center items-center">
                    <img src="image/vector.png" alt="" class="w-[40px] h-[40px]">
                </div>
                <hr>
                <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
                    <p class="text-[17px]">Expo React Native Starter</p>
                    <p class="text-[13.2px]">An extended version of create-t3-turbo implementing authentication on both the web and mobile applications.
                    </p>
                    <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="flex justify-center items-center flex-col md:gap-5 gap-2 my-[2rem] ">
            <div class="flex justify-center items-center flex-col">

                <p class="md:text-[34.2px] text-[1.3rem]">Stay productive and manage your app</p>
                <p class="md:text-[34.2px] text-[1.3rem]"> without leaving the dashboard</p>
            </div>
            <div>
                <button class="bg-primary rounded-[1rem] px-5 py-1 text-white md:text-[13px] text-[10px]">Table Editor</button>
                <button class="bg-primary rounded-[1rem] px-5 py-1 text-white md:text-[13px] text-[10px]">SQL Editor</button>
                <button class="bg-primary rounded-[1rem] px-5 py-1 text-white md:text-[13px] text-[10px]">RLS Policies</button>
            </div>
            <div class="flex justify-center items-center md:gap-3  mt-3 flex-wrap">
                <div class=" flex gap-1 text-primary justify-center items-center w-[100px]">
                    <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Full CRUD</span>
                </div>
                <div class=" flex gap-1 text-primary justify-center items-center w-[150px]">
                    <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Materialized Views</span>
                </div>
                <div class=" flex gap-1 text-primary justify-center items-center w-[150px]">
                    <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Foreign Tables</span>
                </div>
                <div class=" flex gap-1 text-primary justify-center items-center w-[150px]">
                    <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Partitioned Tables</span>
                </div>
                <div class=" flex gap-1 text-primary justify-center items-center w-[200px]">
                    <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Easy as a spreadsheet</span>
                </div>

            </div>
        </div>
        <div class="flex justify-center items-center">
            <img src="image/apiimage.png" class="w-[75%]" alt="">
        </div>
    </section>
    <section class="">
        <div class="flex flex-col justify-center items-center gap-2 md:gap-5 mb-3 mt-3">
            <p class="text-[1.5rem] font-bold md:text-[32px]  ">Join the community</p>
            <p class="md:text-[16px] text-[10px]">Discover what our co mmunity has to say about their Supabase experience.</p>
            <div class="flex gap-2">
                <button class="bg-black flex p-2 rounded-[9px] text-white gap-2 font-bold">GitHub discussions <img src="image/githubicon.png" alt=""></button>
                <button class="bg-black flex p-2 rounded-[9px] text-white gap-2 font-bold">Discord <img src="image/githubicon.png" alt=""></button>
            </div>
        </div>
        <div class="bg-white p-6 scrollbar-hide h-[600px]">

            <div class="overflow-x-auto  scrollbar-hide ">
                <div class="flex flex-nowrap gap-6" style="height: 524px;">
                    <!-- Container has fixed height for 3 rows visually -->

                    <!-- Inner column container -->


                    <!-- Another column -->
                    <div class="flex flex-col gap-6">
                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <!-- <div class="w-8 h-8 bg-gray-400 rounded-full"></div> -->
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">
                                <span>@secondcoluser</span>
                            </div>
                            <p class="text-sm">
                                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur molestiae eaque, reiciendis autem et distinctio veritatis minus iure perferendis iste.
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@secondcoluser2</span>
                            </div>
                            <p class="text-sm">
                                "Shorter card."
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@secondcoluser3</span>
                            </div>
                            <p class="text-sm">
                                "Another card content."
                                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur molestiae eaque, reiciendis autem et distinctio veritatis minus iure perferendis iste.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6">
                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">


                                <span>@thatguy_tex</span>
                            </div>
                            <p class="text-sm">
                                "Working with @supabase has been one of the best dev experiences..."
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@justinjn0dev</span>
                            </div>
                            <p class="text-sm">
                                "Short text card example."Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, illum modi totam libero nulla corporis recusandae aliquid fugit natus provident voluptates magni obcaecati, dolorum, numquam minus quae harum cumque veniam!
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@anotheruser</span>
                            </div>
                            <p class="text-sm">
                                "Another card text."
                            </p>
                        </div>
                    </div>

                    <!-- Another column -->
                    <div class="flex flex-col gap-6">
                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@secondcoluser</span>
                            </div>
                            <p class="text-sm">
                                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, nostrum.
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@secondcoluser2</span>
                            </div>
                            <p class="text-sm">
                                "Shorter card."
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit suscipit veniam, laborum ut quidem quae.
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@secondcoluser3</span>
                            </div>
                            <p class="text-sm">
                                "Another card content."
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed maxime temporibus nam et commodi consectetur nemo reprehenderit quisquam velit,
                                eligendi obcaecati. Magnam ullam repudiandae exercitationem?
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6">
                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@thatguy_tex</span>
                            </div>
                            <p class="text-sm">
                                "Working with @supabase has been one of the best dev experiences..."
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@justinjn0dev</span>
                            </div>
                            <p class="text-sm">
                                "Short text card example."
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias doloremque praesentium molestiae eos reiciendis accusamus obcaecati at sequi dicta tempora?
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@anotheruser</span>
                            </div>
                            <p class="text-sm">
                                "Another card text."
                            </p>
                        </div>
                    </div>

                    <!-- Another column -->


                    <!-- Another column -->
                    <div class="flex flex-col gap-6">
                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@secondcoluser</span>
                            </div>
                            <p class="text-sm">
                                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur molestiae eaque, reiciendis autem et distinctio veritatis minus iure perferendis iste.
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@secondcoluser2</span>
                            </div>
                            <p class="text-sm">
                                "Shorter card."
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
                            <button class="absolute top-2 right-2 text-white text-xl"></button>
                            <div class="flex items-center gap-2 mb-4">
                                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                                <span>@secondcoluser3</span>
                            </div>
                            <p class="text-sm">
                                "Another card content."
                            </p>
                        </div>
                    </div>

                    <!-- Keep adding more columns like above -->
                </div>
            </div>

        </div>
    </section>
    <section 
    
    class=" flex justify-center items-center py-[4rem]">
        <div class="flex justify-center items-center flex-col gap-[1.5rem]">

            <p class="mdtext-[35px] text-[1.5rem] font-bold text-center">Build in a weekend,scale to millions</p>
            <div class="flex gap-2">
                <button class="md:text-[13px ] text-[10px] bg-primary rounded-[6px] border-[#075E54] p-3 text-white font-bold">Start your project</button>
                <button class="text-black border border-black rounded-[6px] p-3 md:text-[13px ] text-[10px] font-bold">Request a demo</button>
            </div>
        </div>
    </section>
    <section class="bg-primary text-white px-[50px]">

        <div class="md:flex  justify-center items-center w-100 py-[3rem] ">
            <div class="md:w-[50%] w-[100%] flex md:justify-end justify-center  md:items-end  items-center ">
                <p class="md:pe-[15%]">We protect your data. <span class="text-[#3ECF8E]">More on Security</span></p>
            </div>
            <div class="flex justify-start md:w-[50%] w-[100%] gap-5 md:pt-0 pt-4 ">

                <div class="flex gap-1 w-[50%]">

                    <i class="ri-check-line"></i>
                    <p class="w-[170px]  "> SOC2 Type 2 Certified</p>
                </div>
                <div class="flex gap-1 w-[50%]">
                    <i class="ri-check-line"></i>


                    <p> HIPAA Compliant</p>

                </div>
            </div>
        </div>
        <div class="h-[.8px] w-full bg-[linear-gradient(to_right,_#4b4a4a,_#000000,_#4b4a4a)]"></div>


        <div class=" flex justify-center items-start py-[3rem] flex-wrap">
            <div class=" w-[100%] md:w-[29%] flex justify-start items-start flex-col  md:gap-5 gap-2 mb-6  ">
                <p class="text-[24px] font-bold ">Campaigning Tool</p>
                <div class="flex justify-center item-center gap-4">
                    <i class="ri-discord-fill" style="font-size:2rem"></i>
                    <i class="ri-github-fill" style="font-size:2rem"></i>
                    <i class="ri-twitter-x-fill" style="font-size:2rem"></i>
                    <i class="ri-youtube-fill" style="font-size:2rem"></i>
                </div>







            </div>
            <div class="w-[100%] md:w-[71%] flex justify-between items-start flex-wrap">

                <div class="flex justify-start items-start flex-col gap-2 md:w-[25%] w-[50%] ">
                    <a class="no-underline">
                        <p class="font-bold">Product</p>
                    </a>
                    <div class="h-[2px] w-[50%] mb-[.6rem] border border-white"></div>

                    <a class="no-underline">
                        <p>Database</p>
                    </a>
                    <a class="no-underline">
                        <p>Auth</p>
                    </a>
                    <a class="no-underline">
                        <p>Functions</p>
                    </a>
                    <a class="no-underline">
                        <p>Realtime</p>
                    </a>
                    <a class="no-underline">
                        <p>Storage</p>
                    </a>
                    <a class="no-underline">
                        <p>Vector</p>
                    </a>
                    <a class="no-underline">
                        <p>Cron</p>
                    </a>
                    <a class="no-underline">
                        <p>Pricing</p>
                    </a>
                    <a class="no-underline">
                        <p>Launch Week</p>
                    </a>
                </div>

                <div class="flex justify-center items-start flex-col gap-2  md:w-[25%] w-[50%] mb-3 ">
                    <a class="no-underline">
                        <p class="font-bold">Resources</p>
                    </a>
                    <div class="h-[2px] w-[50%] mb-[.6rem] border border-white"></div>

                    <a class="no-underline">
                        <p>Support</p>
                    </a>
                    <a class="no-underline">
                        <p>System Status</p>
                    </a>
                    <a class="no-underline">
                        <p>Become a Partner</p>
                    </a>
                    <a class="no-underline">
                        <p>Integrations</p>
                    </a>
                    <a class="no-underline">
                        <p>Brand Assets / Logos</p>
                    </a>
                    <a class="no-underline">
                        <p>Security and</p>
                    </a>
                    <a class="no-underline">
                        <p>Compliance</p>
                    </a>
                    <a class="no-underline">
                        <p>DPA</p>
                    </a>
                    <a class="no-underline">
                        <p>SOC2</p>
                    </a>
                    <a class="no-underline">
                        <p>HIPAA</p>
                    </a>
                </div>

                <div class="flex justify-center items-start flex-col gap-2  md:w-[25%] w-[50%] ">
                    <a class="no-underline">
                        <p class="font-bold">Developers</p>
                    </a>
                    <div class="h-[2px] w-[50%] mb-[.6rem] border border-white"></div>

                    <a class="no-underline">
                        <p>Documentation</p>
                    </a>
                    <a class="no-underline">
                        <p>Changelog</p>
                    </a>
                    <a class="no-underline">
                        <p>Contributing</p>
                    </a>
                    <a class="no-underline">
                        <p>Open Source</p>
                    </a>
                    <a class="no-underline">
                        <p>SupaSquad</p>
                    </a>
                    <a class="no-underline">
                        <p>DevTo</p>
                    </a>
                    <a class="no-underline">
                        <p>RSS</p>
                    </a>
                </div>

                <div class="flex justify-center items-start flex-col gap-2  md:w-[25%] w-[50%] ">
                    <a class="no-underline">
                        <p class="font-bold">Company</p>
                    </a>
                    <div class="h-[2px] w-[50%] mb-[.6rem] border border-white"></div>

                    <a class="no-underline">
                        <p>Blog</p>
                    </a>
                    <a class="no-underline">
                        <p>Customer Stories</p>
                    </a>
                    <a class="no-underline">
                        <p>Careers</p>
                    </a>
                    <a class="no-underline">
                        <p>Company</p>
                    </a>
                    <a class="no-underline">
                        <p>Events & Webinars</p>
                    </a>
                    <a class="no-underline">
                        <p>General Availability</p>
                    </a>
                    <a class="no-underline">
                        <p>Terms of Service</p>
                    </a>
                    <a class="no-underline">
                        <p>Privacy Policy</p>
                    </a>
                    <a class="no-underline">
                        <p>Privacy Settings</p>
                    </a>
                    <a class="no-underline">
                        <p>Acceptable Use Policy</p>
                    </a>
                    <a class="no-underline">
                        <p>Support Policy</p>
                    </a>
                    <a class="no-underline">
                        <p>Service Level Agreement</p>
                    </a>
                    <a class="no-underline">
                        <p>Humans.txt</p>
                    </a>
                    <a class="no-underline">
                        <p>Lawyers.txt</p>
                    </a>
                    <a class="no-underline">
                        <p>Security.txt</p>
                    </a>
                </div>

            </div>

        </div>

        <div class="h-[2px] w-full bg-[white]"></div>
        <div class="flex justify-between my-[2rem] bg-blac pb-[3rem]">
            <p>© Campaigning Tool Inc</p>
            <i class="ri-moon-line"></i>
        </div>
    </section>



    <script>
  AOS.init();
</script>

    <script src="./js/index.js"></script>

</body>

</html>