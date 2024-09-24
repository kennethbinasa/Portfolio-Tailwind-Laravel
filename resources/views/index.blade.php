<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="output.css">
    <link rel="icon" type="image/png" href="../images/icon.png">
    @vite('resources/css/app.css')
</head>
<body class="bg-pattern bg-fixed bg-opacity-100">
    <header class="top-0 z-0 drop-shadow-2xl">
        <nav class="container flex justify-between w-full md:justify center md:items-center items-center py-4 mt-4 sm:mt-12">
            <div class="py-1 uppercase"><h1 class="text-meat font-extrabold text-normal tracking-widemax font-montserrat text-center">KENNETH BINASA</h1></div>
                <ul class="hidden lg:flex lg:flex-1 justify-end items-center gap-12 tracking-widemax text-bright-gray text-center font-bold font-lato uppercase text-xs">
                    <li class="cursor-pointer hover:text-meat "><a href="#home" class="target:text-fire">Home</a></li>
                    <li class="cursor-pointer hover:text-meat"><a href="#about me">About Me</a></li>
                    <li class="cursor-pointer hover:text-meat"><a href="#skills">Skills</a></li>
                    <li class="cursor-pointer hover:text-meat"><a href="#projects">Projects</a></li>
                    <li class="cursor-pointer hover:text-meat"><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="lg:hidden flex flex-1 flex-row items-center justify-end gap-5">
                <button class="bg-meat text-raisin border-2 border-meat p-2 rounded-full text-lato uppercase hover:rotate-90 hover:transition hover:1000ms hover:bg-raisin hover:text-lake hover:border-lake"><a href="index_white.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-5 w-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>                                               
                </a></button>
                <button class="lg:hidden flex menu-button text-bright-gray" onclick="toggleSidebar()">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>                          
                    </a>
                </button>
            </div>            
        </nav>
        <ul class="hidden md:sidebar sidebar md:flex-row flex-col p-10 md:justify-center md:items-center items-center gap-10 tracking-widemax text-bright-gray text-center font-bold font-lato uppercase text-xs">
            <li class="cursor-pointer hover:text-meat "><a href="#home">Home</a></li>
            <li class="cursor-pointer hover:text-meat"><a href="#about me">About Me</a></li>
            <li class="cursor-pointer hover:text-meat"><a href="#skills">Skills</a></li>
            <li class="cursor-pointer hover:text-meat"><a href="#projects">Projects</a></li>
            <li class="cursor-pointer hover:text-meat"><a href="#contact">Contact</a></li>
        </ul>
        <script>
            function showSidebar()
            {
              const sidebar = document.querySelector('.sidebar')
              sidebar.style.display = 'flex'
            }
            function hideSidebar()
            {
              const sidebar = document.querySelector('.sidebar')
              sidebar.style.display = 'none'
            }

            function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            if (sidebar.style.display === 'flex') 
            {
                hideSidebar();
            } 
            else 
            {
                showSidebar();
            }
            }
        </script>
    </header>
    
    <section id="home" class="relative bg-raisin bg-hero bg-cover bg-center bg-blend-multiply bg-opacity-100 lg:p-48 px-5 py-36 bg-fixed">
        <div class="container lg:text-center text-meat lg:text-8xl md:text-6xl text-5xl font-extrabold lg:items-center lg:justify-center text-center font-montserrat lg:pb-5 pb-2">
            KENNETH CARL BINASA
        </div>
        <div class="container text-center lg:text-4xl text-2xl font-normal items-center uppercase font-montserrat lg:pb-5 pb-2 text-bright-gray">
            Aspiring <span class="hover:transition hover:300ms hover:text-meat">Data</span> Engineer
        </div>
        <div class="container flex flex-1 flex-row lg:gap-7 gap-5 pt-5 justify-center">
            <div class="bg-transparent border-2 border-bright-gray flex flex-row font-montserrat font-bold items-center justify-center p-3 lg:rounded-2xl rounded-xl h-full text-bright-gray hover:text-lake hover:border-lake">
                    <a href="https://www.facebook.com/knnthbnsa">
                        <button class="lg:w-10 lg:h-10 w-5 h-5 flex items-center justify-center relative overflow-hidden group">
                        <svg class="relative z-10 lg:w-12 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" fill="currentColor">
                        <path
                            d="M46.4927 38.6403L47.7973 30.3588H39.7611V24.9759C39.7611 22.7114 40.883 20.4987 44.4706 20.4987H48.1756V13.4465C46.018 13.1028 43.8378 12.9168 41.6527 12.8901C35.0385 12.8901 30.7204 16.8626 30.7204 24.0442V30.3588H23.3887V38.6403H30.7204V58.671H39.7611V38.6403H46.4927Z"
                            fill="" />
                        </svg>
                    </a>
                </button>              
            </div> 
            <div class="bg-transparent border-2 border-bright-gray flex flex-row font-montserrat font-bold items-center justify-center p-3 lg:rounded-2xl rounded-xl h-full text-bright-gray  hover:text-lake hover:border-lake">
                <a href="https://www.linkedin.com/in/kennethbinasa/">
                    <button class="lg:w-10 lg:h-10 w-5 h-5 flex items-center justify-center relative overflow-hidden  group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-8">
                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                            </path>
                        </svg>
                    </button>           
                </a>   
            </div>
            <div class="bg-transparent border-2 border-bright-gray flex flex-row font-montserrat font-bold items-center justify-center p-3 lg:rounded-2xl rounded-xl h-full text-bright-gray  hover:text-lake hover:border-lake">
                <a href="https://github.com/kennethbinasa">
                    <button class="lg:w-10 lg:h-10 w-5 h-5  flex items-center justify-center relative overflow-hidden  group">
                        <svg fill="currentColor" class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path
                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                        </svg>
                    </button>  
                </a>            
            </div>

            <div class="bg-transparent border-2 border-bright-gray flex flex-row font-montserrat font-bold items-center justify-center p-3 lg:rounded-2xl rounded-xl h-full text-bright-gray  hover:text-lake hover:border-lake">
                <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=kennethbinasa17@gmail.com">
                    <button class="lg:w-10 lg:h-10 w-5 h-5 flex items-center justify-center relative overflow-hidden  group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 72 72" class="relative">
                            <path
                                d="M11.9362 56.1235H20.4189V35.5227L8.30078 26.434V52.4881C8.30078 54.4997 9.93067 56.1235 11.9362 56.1235Z"
                                fill="currentColor" />
                            <path
                                d="M49.5025 56.1235H57.9853C59.9969 56.1235 61.6207 54.4936 61.6207 52.4881V26.434L49.5025 35.5227"
                                fill="currentColor" />
                            <path
                                d="M49.5025 19.7693V35.5227L61.6207 26.434V21.587C61.6207 17.0912 56.4887 14.5282 52.8956 17.2245"
                                fill="currentColor" />
                            <path d="M20.4189 35.5227V19.769L34.9607 30.6754L49.5025 19.7693V35.5227L34.9607 46.429"
                                fill="currentColor" />
                            <path
                                d="M8.30078 21.587V26.434L20.4189 35.5227V19.769L17.0259 17.2245C13.4268 14.5282 8.30078 17.0912 8.30078 21.587Z"
                                fill="currentColor" />
                        </svg>
                    </button>  
                </a>            
            </div>   
            
        </div>
    </section>

    <section id="about me" class="relative p-10">
        <div class="container flex flex-col-reverse lg:flex-row bg-gradient-to-l from-onyx to-raisin shadow-2xl p-10 rounded-2xl  text-bright-gray items-center lg:gap-12 gap-2 mt-14 lg:mt-28 hover:origin-center hover:scale-105 hover:transition hover:300ms">
            <div class="flex flex-1 flex-col items-center lg:p-10 p-0 lg:items-start">
                <div class="flex flex-1 flex-row items-center justify-center lg:mb-6">
                    <div class="bg-meat lg:flex md:flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-xl h-full text-raisin hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>                      
                    </div>  
                    <h2 class="text-meat uppercase font-montserrat font-extrabold text-3xl md:text-4 tracking-wide lg:text-5xl text-center lg:text-left lg:pl-5 md:pl-5">
                        About Me
                    </h2>
                </div>
                
                <p class="text-bright-gray font-lato lg:text-lg  text-normal lg:py-0 py-5 tracking-tight lg:text-justify md:text-center text-justify mb-6">
                    Hi! I am Kenneth, a driven third-year Computer Engineering student and UIP Inc. intern 
                    with a strong foundation in Python programming, mathematics, and design software. Eager 
                    to apply my skills to real-world projects, I am ready to contribute to innovative solutions.
                </p>
                <div class="flex flex-1 flex-col lg:flex-row lg:justify-start items-center justify-center lg:gap-8 gap-4">
                    <a href="./resume.pdf">
                        <button class="bg-meat hover:bg-transparent border-2 border-meat flex flex-row drop-shadow-2xl px-7 py-5 rounded-2xl h-full lg:text-lg text-sm text-normal font-montserrat  uppercase font-bold text-raisin hover:text-meat">My Resume</button>                    
                    </a>
                    <a href="./resume.pdf" download>
                        <button class="bg-raisin border-2 border-lake text-lake hover:bg-lake hover:border-lake hover:text-onyx flex flex-row px-7 py-5 drop-shadow-2xl gap-1 rounded-2xl lg:h-full h-3/4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>                
                            <div class="lg:text-lg text-sm font-montserrat uppercase font-bold">Download CV</div>
                        </button>  
                    </a>  
                </div>
            </div>
            <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 drop-shadow-2xl z-10 ">
                <img class="w-3/4 h-3/4 md:w-3/4 lg:w-full lg:h-full rounded-2xl" src="/images/about.jpeg" alt="" />
            </div>
        </div>
        <div class="container flex flex-1 flex-col items-center md:w-full lg:w-full lg:items-start bg-gradient-to-l from-onyx to-raisin shadow-2xl mt-10 p-10 rounded-2xl hover:scale-105 hover:transition hover:300ms">
            <div class="flex flex-1 lg:flex-row flex-col items-center justify-center gap-10">
                <div class="flex flex-1 flex-col gap-2 lg:w-1/2 w-full">
                    <div class="flex flex-row lg:justify-start justify-center items-center pb-6">
                        <div class="bg-meat lg:flex md:flex flex-row hidden font-montserrat font-bold items-center justify-center p-3 rounded-2xl h-full text-raisin">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                            </svg>                                                                           
                        </div>  
                        <h2 class="text-meat uppercase font-montserrat font-extrabold text-3xl md:text-4 tracking-wide lg:text-5xl text-center lg:text-left lg:pl-5 md:pl-5">
                            Education
                        </h2>
                    </div>
                    <ol class="relative border-s border-bright-gray dark:border-meat justify-center items-center ml-5">                  
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-bright-gray dark:border-meat dark:bg-meat"></div>
                            <time class="mb-1 lg:text-xl text-normal font-normal font-montserrat leading-none text-gray-400 dark:text-meat">October 2022 – Ongoing</time>
                            <h3 class="lg:text-xl text-normal font-bold font-montserrat text-onyx dark:text-bright-gray">Bachelor of Science in Computer Engineering</h3>
                            <p class="mb-4 lg:text-xl text-normal font-normal font-montserrat text-gray-500 dark:text-gray-400">Polytechnic University of the Philippines – Sta.Mesa, Manila.</p>
                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-bright-gray dark:border-meat dark:bg-onyx"></div>
                            <time class="mb-1 lg:text-xl text-normal font-normal font-montserrat leading-none text-gray-400 dark:text-meat">August 2020 – May 2022</time>
                            <h3 class="lg:text-xl text-normal font-bold font-montserrat text-onyx dark:text-bright-gray">Science, Technology, Engineering and Mathematics (STEM)</h3>
                            <p class="mb-4 lg:text-xl text-normal font-normal font-montserrat text-gray-500 dark:text-gray-400">Our Lady of Perpetual Succor College</p>
                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-bright-gray dark:border-meat dark:bg-onyx"></div>
                            <time class="mb-1 lg:text-xl text-normal font-normal font-montserrat leading-none text-gray-400 dark:text-meat">June 2016 – May 2020</time>
                            <h3 class="lg:text-xl text-normal font-bold font-montserrat text-onyx dark:text-bright-gray">Junior High School</h3>
                            <p class="mb-4 lg:text-xl text-normal font-normal font-montserrat text-gray-500 dark:text-gray-400">Our Lady of Perpetual Succor College</p>
                        </li>
                    </ol>
                </div>
                <div class="lg:w-1/2 w-full">
                    <div class="flex flex-row pt-8 ">
                        <h2 class="text-meat uppercase font-montserrat font-extrabold md:text-4 tracking-wide lg:text-4xl text-2xl text-center lg:text-left mb-6">
                            Relevant Courseworks
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-start pb-5">
                        <div class="bg-onyx hover:rotate-180 hover:transition hover:1000ms flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:size-6 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                            </svg>                                                                          
                        </div>  
                        <h2 class="text-bright-gray uppercase font-montserrat font-extrabold text-normal md:text-4 tracking-wide lg:text-xl text-center lg:text-left pl-5">
                            Programming Logic and Design
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-start pb-5">
                        <div class="bg-onyx hover:rotate-180 hover:transition hover:1000ms flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:size-6 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                            </svg>                                                                          
                        </div>  
                        <h2 class="text-bright-gray uppercase font-montserrat font-extrabold text-normal md:text-4 tracking-wide lg:text-xl text-center lg:text-left pl-5">
                            Object-Oriented Programming
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-start pb-5">
                        <div class="bg-onyx hover:rotate-180 hover:transition hover:1000ms flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:size-6 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                            </svg>                                                                             
                        </div>  
                        <h2 class="text-bright-gray uppercase font-montserrat font-extrabold text-normal md:text-4 tracking-wide lg:text-xl text-center lg:text-left pl-5">
                            Engineering Data Analysis
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-start pb-5">
                        <div class="bg-onyx hover:rotate-180 hover:transition hover:1000ms flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:size-6 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                            </svg>                                                                            
                        </div>  
                        <h2 class="text-bright-gray uppercase font-montserrat font-extrabold text-normal md:text-4 tracking-wide lg:text-xl text-center lg:text-left pl-5">
                            Data Structures and Algorithms
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-start pb-5">
                        <div class="bg-onyx hover:rotate-180 hover:transition hover:1000ms flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:size-6 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>                                                                          
                        </div>  
                        <h2 class="text-bright-gray uppercase font-montserrat font-extrabold text-normal md:text-4 tracking-wide lg:text-xl text-center lg:text-left pl-5">
                            Operating Systems
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-start pb-5">
                        <div class="bg-onyx hover:rotate-180 hover:transition hover:1000ms flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full lg:h-full h-1/4 text-bright-gray shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:size-6 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>                                                                            
                        </div>  
                        <h2 class="text-bright-gray uppercase font-montserrat font-extrabold text-normal md:text-4 tracking-wide lg:text-xl text-center lg:text-left pl-5">
                            Computer-Aided Drafting
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-start pb-5">
                        <div class="bg-onyx hover:rotate-180 hover:transition hover:1000ms flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full lg:h-full h-1/4 text-bright-gray shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:size-6 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                            </svg>                                                                                 
                        </div>  
                        <h2 class="text-bright-gray uppercase font-montserrat font-extrabold text-normal md:text-4 tracking-wide lg:text-xl text-center lg:text-left pl-5">
                            Fundamentals of Electrical Circuits
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-start pb-5">
                        <div class="bg-onyx hover:rotate-180 hover:transition hover:1000ms flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full lg:h-full h-1/4 text-bright-gray shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:size-6 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                            </svg>                                                                           
                        </div>  
                        <h2 class="text-bright-gray uppercase font-montserrat font-extrabold text-normal md:text-4 tracking-wide lg:text-xl text-center lg:text-left pl-5">
                            Fundamentals of Electronic Circuits
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex flex-col-reverse lg:flex-row bg-gradient-to-l from-onyx to-raisin shadow-2xl p-10 rounded-2xl mt-10 text-bright-gray items-center lg:gap-12 gap-2 hover:origin-center hover:scale-105 hover:transition hover:300ms">
            <div class="flex flex-1 flex-col">
                <div class="flex flex-1 flex-row items-center justify-center lg:mb-6">
                    <div class="bg-meat lg:flex md:flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-xl h-full text-raisin hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                        </svg>
                    </div>  
                    <h2 class="text-meat uppercase font-montserrat font-extrabold text-3xl md:text-4 tracking-wide lg:text-5xl text-center lg:text-left lg:pl-5 md:pl-5">
                        Experience
                    </h2>
                </div>
                <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 drop-shadow-2xl z-10 ">
                    <ol class="relative border-s border-bright-gray dark:border-meat justify-center items-center">                  
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-bright-gray dark:border-meat dark:bg-meat"></div>
                            <time class="mb-1 lg:text-xl text-normal font-normal font-montserrat leading-none text-gray-400 dark:text-meat">August 2024 - September 2024</time>
                            <h3 class="lg:text-xl text-normal font-bold font-montserrat text-onyx dark:text-bright-gray">Web Development Intern</h3>
                            <p class="mb-4 lg:text-xl text-normal font-normal font-montserrat text-gray-500 dark:text-gray-400">Unified Internship Program Inc.</p>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="flex flex-1 flex-col gap-2 items-center lg:p-10 p-0 lg:items-start">                
                <p class="text-bright-gray uppercase font-montserrat font-extrabold text-normal md:text-4 tracking-wide lg:text-xl text-center lg:text-left">
                    Contributed for UIP's Attendance Tracker Website with its Mockup and Development
                    
                </p>
                <ul class="list-disc text-bright-gray font-lato lg:text-lg  text-normal lg:py-0 py-5 tracking-tight lg:text-justify md:text-center text-justify mb-6 pl-4">
                    <li>Mockup for the Manage User in the Admin Side</li>
                    <li>Developed the Front-end for the Sign-up Page</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section id="skills" class="relative p-10">
        <div class="container flex flex-col lg:flex-row  text-bright-gray items-center gap-12 my-14 lg:my-28">
            <div class="flex flex-1 flex-col items-center md:w-full w-full lg:items-start pb-10 bg-gradient-to-l from-onyx to-raisin shadow-2xl p-10 rounded-2xl hover:scale-105 hover:transition hover:300ms">
                <div class="flex flex-row items-center lg:pb-10 pb-5">
                    <div class="bg-meat lg:flex md:flex flex-row hidden font-montserrat font-bold items-center justify-center p-3 rounded-xl h-full text-raisin">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008Z" />
                        </svg>                                                                      
                    </div>  
                    <h2 class="text-meat uppercase font-montserrat font-extrabold text-3xl md:text-4 tracking-wide lg:text-5xl text-center lg:text-left lg:pl-5 md:pl-5">
                        Skills
                    </h2>
                </div>
                
                <div class="flex flex-1 lg:flex-row flex-col items-center justify-center w-full lg:gap-10 gap-2 ">
                    <div class="lg:w-1/2 w-full flex flex-1 flex-col gap-2">
                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto lg:flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg class="w-6" viewBox="0 0 128 128">
                                    <path fill="currentColor" d="M49.33 62h29.159C86.606 62 93 55.132 93 46.981V19.183c0-7.912-6.632-13.856-14.555-15.176-5.014-.835-10.195-1.215-15.187-1.191-4.99.023-9.612.448-13.805 1.191C37.098 6.188 35 10.758 35 19.183V30h29v4H23.776c-8.484 0-15.914 5.108-18.237 14.811-2.681 11.12-2.8 17.919 0 29.53C7.614 86.983 12.569 93 21.054 93H31V79.952C31 70.315 39.428 62 49.33 62zm-1.838-39.11c-3.026 0-5.478-2.479-5.478-5.545 0-3.079 2.451-5.581 5.478-5.581 3.015 0 5.479 2.502 5.479 5.581-.001 3.066-2.465 5.545-5.479 5.545zm74.789 25.921C120.183 40.363 116.178 34 107.682 34H97v12.981C97 57.031 88.206 65 78.489 65H49.33C41.342 65 35 72.326 35 80.326v27.8c0 7.91 6.745 12.564 14.462 14.834 9.242 2.717 17.994 3.208 29.051 0C85.862 120.831 93 116.549 93 108.126V97H64v-4h43.682c8.484 0 11.647-5.776 14.599-14.66 3.047-9.145 2.916-17.799 0-29.529zm-41.955 55.606c3.027 0 5.479 2.479 5.479 5.547 0 3.076-2.451 5.579-5.479 5.579-3.015 0-5.478-2.502-5.478-5.579 0-3.068 2.463-5.547 5.478-5.547z"></path>
                                </svg>                                                                           
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>Python</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-lake h-2.5 rounded-full mb-4" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg class="w-6" viewBox="0 0 128 128">
                                    <path fill="currentColor" d="M117.5 33.5l.3-.2c-.6-1.1-1.5-2.1-2.4-2.6L67.1 2.9c-.8-.5-1.9-.7-3.1-.7-1.2 0-2.3.3-3.1.7l-48 27.9c-1.7 1-2.9 3.5-2.9 5.4v55.7c0 1.1.2 2.3.9 3.4l-.2.1c.5.8 1.2 1.5 1.9 1.9l48.2 27.9c.8.5 1.9.7 3.1.7 1.2 0 2.3-.3 3.1-.7l48-27.9c1.7-1 2.9-3.5 2.9-5.4V36.1c.1-.8 0-1.7-.4-2.6zM64 88.5c9.1 0 17.1-5 21.3-12.4l12.9 7.6c-6.8 11.8-19.6 19.8-34.2 19.8-21.8 0-39.5-17.7-39.5-39.5S42.2 24.5 64 24.5c14.7 0 27.5 8.1 34.3 20l-13 7.5C81.1 44.5 73.1 39.5 64 39.5c-13.5 0-24.5 11-24.5 24.5s11 24.5 24.5 24.5z"></path>
                                </svg>                                                                           
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>C</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-lake h-2.5 rounded-full mb-4" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg class="w-6" viewBox="0 0 128 128">
                                    <path fill="currentColor" d="M9.032 2l10.005 112.093 44.896 12.401 45.02-12.387L118.968 2H9.032zm89.126 26.539l-.627 7.172L97.255 39H44.59l1.257 14h50.156l-.336 3.471-3.233 36.119-.238 2.27L64 102.609v.002l-.034.018-28.177-7.423L33.876 74h13.815l.979 10.919L63.957 89H64v-.546l15.355-3.875L80.959 67H33.261l-3.383-38.117L29.549 25h68.939l-.33 3.539z"></path>
                                </svg>                                                                          
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>HTML and CSS</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-lake h-2.5 rounded-full mb-4" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="currentColor" viewBox="0 0 50 50">
                                    <path d="M 25 12 C 18.507813 12 12.621094 13.359375 8.273438 15.628906 C 3.925781 17.898438 1 21.167969 1 25 C 1 28.832031 3.925781 32.101563 8.273438 34.371094 C 12.621094 36.640625 18.507813 38 25 38 C 31.492188 38 37.378906 36.640625 41.726563 34.371094 C 46.074219 32.101563 49 28.832031 49 25 C 49 21.167969 46.074219 17.898438 41.726563 15.628906 C 37.378906 13.359375 31.492188 12 25 12 Z M 25 14 C 31.210938 14 36.824219 15.324219 40.800781 17.402344 C 44.777344 19.476563 47 22.203125 47 25 C 47 27.796875 44.777344 30.523438 40.800781 32.597656 C 36.824219 34.675781 31.210938 36 25 36 C 18.789063 36 13.175781 34.675781 9.199219 32.597656 C 5.222656 30.523438 3 27.796875 3 25 C 3 22.203125 5.222656 19.476563 9.199219 17.402344 C 13.175781 15.324219 18.789063 14 25 14 Z M 22.507813 16 L 20 28 L 22.625 28 L 23.890625 22 L 25.988281 22 C 26.65625 22 27.101563 22.109375 27.308594 22.332031 C 27.511719 22.554688 27.554688 22.976563 27.4375 23.582031 L 26.480469 28 L 29.144531 28 L 30.183594 23.222656 C 30.40625 22.078125 30.238281 21.238281 29.683594 20.726563 C 29.117188 20.207031 28.121094 20 26.636719 20 L 24.296875 20 L 25.128906 16 Z M 11 20 L 8.972656 31 L 11.617188 31 L 12.144531 28 L 13.792969 28 C 17.238281 28 19.113281 27.203125 19.8125 24.246094 C 20.414063 21.703125 18.875 20 16.332031 20 Z M 32 20 L 29.972656 31 L 32.617188 31 L 33.144531 28 L 34.792969 28 C 38.238281 28 40.113281 27.203125 40.8125 24.246094 C 41.414063 21.703125 39.875 20 37.332031 20 Z M 13.273438 22 L 15.332031 22 C 17.042969 22 17.402344 22.769531 17.3125 23.625 C 17.082031 25.832031 15.707031 26 14.230469 26 L 12.515625 26 Z M 34.273438 22 L 36.332031 22 C 38.042969 22 38.402344 22.769531 38.3125 23.625 C 38.082031 25.832031 36.707031 26 35.230469 26 L 33.515625 26 Z"></path>
                                </svg>                                                                        
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>PHP</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-lake h-2.5 rounded-full mb-4" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M64.004 25.602c-17.067 0-27.73 8.53-32 25.597 6.398-8.531 13.867-11.73 22.398-9.597 4.871 1.214 8.352 4.746 12.207 8.66C72.883 56.629 80.145 64 96.004 64c17.066 0 27.73-8.531 32-25.602-6.399 8.536-13.867 11.735-22.399 9.602-4.87-1.215-8.347-4.746-12.207-8.66-6.27-6.367-13.53-13.738-29.394-13.738zM32.004 64c-17.066 0-27.73 8.531-32 25.602C6.402 81.066 13.87 77.867 22.402 80c4.871 1.215 8.352 4.746 12.207 8.66 6.274 6.367 13.536 13.738 29.395 13.738 17.066 0 27.73-8.53 32-25.597-6.399 8.531-13.867 11.73-22.399 9.597-4.87-1.214-8.347-4.746-12.207-8.66C55.128 71.371 47.868 64 32.004 64zm0 0" fill="currentColor"/></svg>
                                                                          
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>Tailwind CSS</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-lake h-2.5 rounded-full mb-4" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg class="w-6" viewBox="0 0 128 128">
                                    <path fill="currentColor" d="M64 14.6465v.002c-35.346 0-64 19.1902-64 42.8632 0 20.764 22.0464 38.0766 51.3164 42.0176v-12.83c-15.55-4.89-26.166-14.6943-26.166-25.9923 0-16.183 21.7795-29.3027 48.6465-29.3027 26.866 0 46.6914 8.9748 46.6914 29.3027 0 10.486-5.2715 17.9507-14.0645 22.7207 1.204.908 2.2184 2.073 2.9024 3.42l.3886.6543C121.0248 79.772 128 69.1888 128 57.5098c0-23.672-28.654-42.8633-64-42.8633zM52.7363 41.2637v72.084l21.834-.0098-.0039-28.2188h5.8613c1.199 0 1.7167.3481 2.9297 1.3301 1.454 1.177 3.8164 5.2383 3.8164 5.2383l11.5371 21.666 24.6739-.0097-15.2657-25.7403a8.388 8.388 0 0 0-1.4199-2.041c-.974-1.036-2.3255-1.8227-3.1055-2.2188-2.249-1.1375-6.12-2.3076-6.123-2.3085 0 0 19.08-1.4151 19.08-20.4141 0-18.999-19.9706-19.3574-19.9706-19.3574H52.7363zm22.0176 15.627 13.2188.0077s6.123-.3302 6.123 6.0098c0 6.216-6.123 6.2344-6.123 6.2344l-13.2247.0039.006-12.2559zm9.3457 32.6366c-2.612.257-5.3213.411-8.1133.463l.002 9.6288a88.362 88.362 0 0 0 12.4746-2.4902l-.502-.9414c-.68-1.268-1.3472-2.5426-2.0332-3.8066a41.01 41.01 0 0 0-1.828-2.8516v-.002z"></path>
                                </svg>                                                                         
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>R</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-lake h-2.5 rounded-full mb-4" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 w-full flex flex-1 flex-col gap-2">
                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 50 50">
                                    <path fill="currentColor" d="M 23.8125 3.007813 L 6.898438 34.386719 L 19.292969 29.074219 Z M 26.1875 3.007813 L 29.929688 24.515625 L 36.292969 21.785156 Z M 25 7.84375 L 21.484375 28.132813 L 28.042969 25.324219 Z M 37.246094 23.550781 L 30.28125 26.535156 L 32.449219 39 L 45.59375 39 Z M 28.390625 27.347656 L 21.078125 30.484375 L 19.597656 39 L 30.421875 39 Z M 18.882813 31.421875 L 10.101563 35.1875 L 10.421875 39 L 17.566406 39 Z M 8.164063 36.015625 L 5.367188 37.214844 L 4.40625 39 L 8.414063 39 Z M 4.53125 41 L 9.03125 46.398438 L 8.578125 41 Z M 10.589844 41 L 11.101563 47.167969 L 16.03125 47.871094 L 17.222656 41 Z M 32.796875 41 L 33.988281 47.871094 L 39.171875 47.128906 L 38.152344 41 Z M 40.179688 41 L 41.0625 46.285156 L 45.46875 41 Z"></path>
                                </svg>                                                                       
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>AutoCAD</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-fire h-2.5 rounded-full mb-4" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6" viewBox="0 0 30 30">
                                    <path fill="currentColor" d="M10 29L10 29c-2.209 0-4-1.791-4-4l0 0c0-2.209 1.791-4 4-4h2.857C13.488 21 14 21.512 14 22.143V25C14 27.209 12.209 29 10 29zM20 9h-2.857C16.512 9 16 8.488 16 7.857V2.143C16 1.512 16.512 1 17.143 1H20c2.209 0 4 1.791 4 4l0 0C24 7.209 22.209 9 20 9zM10 1h2.857C13.488 1 14 1.512 14 2.143v5.714C14 8.488 13.488 9 12.857 9H10C7.791 9 6 7.209 6 5l0 0C6 2.791 7.791 1 10 1zM10 11h2.857C13.488 11 14 11.512 14 12.143v5.714C14 18.488 13.488 19 12.857 19H10c-2.209 0-4-1.791-4-4l0 0C6 12.791 7.791 11 10 11zM20 11A4 4 0 1020 19 4 4 0 1020 11z"></path>
                                </svg>                                                                       
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>Figma</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-fire h-2.5 rounded-full mb-4" style="width: 40%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                  </svg>
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>SketchUp</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-fire h-2.5 rounded-full mb-4" style="width: 35%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-1 flex-row items-center justify-center gap-5">
                            <div class="bg-onyx w-auto flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-full h-full text-bright-gray shadow-xl">
                                <svg class="w-6" viewBox="0 0 128 128">
                                    <path fill="currentColor" d="M22.666 1.6C10.133 1.6 0 11.734 0 24.268v79.464C0 116.266 10.133 126.4 22.666 126.4h82.668c12.533 0 22.666-10.134 22.666-22.668V24.268C128 11.734 117.867 1.6 105.334 1.6H22.666zm23.201 31.734c4.373 0 8 .532 10.986 1.652A19.05 19.05 0 0 1 64 39.361a16.976 16.976 0 0 1 3.894 6.079c.8 2.24 1.225 4.533 1.225 6.933 0 4.587-1.066 8.373-3.2 11.36-2.132 2.986-5.118 5.227-8.585 6.507-3.627 1.334-7.627 1.813-12 1.813-1.28 0-2.135 0-2.668-.053-.533-.053-1.28-.053-2.293-.053v17.12c.053.373-.213.694-.586.747H29.44c-.426 0-.638-.215-.638-.695V34.24c0-.373.16-.588.533-.588.907 0 1.76 0 2.986-.052 1.28-.054 2.613-.052 4.053-.106 1.44-.053 2.987-.054 4.64-.107 1.654-.054 3.254-.053 4.854-.053zm1.19 10.504a18.68 18.68 0 0 0-.817.002c-1.386 0-2.613.001-3.627.055-1.066-.054-1.812-.001-2.185.052v17.92c.746.054 1.438.106 2.078.106h2.828c2.08 0 4.16-.32 6.133-.96 1.707-.48 3.2-1.494 4.373-2.827 1.12-1.334 1.654-3.146 1.654-5.493a8.776 8.776 0 0 0-1.226-4.746c-.907-1.386-2.188-2.454-3.735-3.04-1.727-.7-3.576-1.033-5.476-1.07zm44.73 2.723c2.187 0 4.427.158 6.613.478 1.6.213 3.146.642 4.586 1.229.214.053.427.265.533.478.054.213.108.427.108.64v8.694a.655.655 0 0 1-.266.533c-.48.107-.747.107-.96 0-1.6-.853-3.308-1.439-5.122-1.812-1.973-.427-3.946-.695-5.972-.695-1.067-.054-2.188.108-3.201.374-.694.16-1.28.534-1.653 1.067-.266.427-.426.96-.426 1.44s.214.96.534 1.386c.48.587 1.119 1.068 1.812 1.442a48.8 48.8 0 0 0 3.787 1.757c2.88.96 5.653 2.295 8.213 3.895 1.76 1.12 3.2 2.614 4.213 4.427a11.509 11.509 0 0 1 1.228 5.493 12.412 12.412 0 0 1-2.082 7.093 13.362 13.362 0 0 1-5.972 4.746c-2.614 1.12-5.814 1.707-9.654 1.707-2.454 0-4.852-.213-7.252-.693a21.51 21.51 0 0 1-5.44-1.707c-.373-.213-.641-.587-.588-1.014V78.24c0-.16.053-.374.213-.48.16-.107.32-.052.48.054a22.83 22.83 0 0 0 6.614 2.614c2.027.533 4.161.799 6.295.799 2.026 0 3.466-.267 4.426-.747.853-.373 1.439-1.28 1.439-2.24 0-.746-.426-1.441-1.28-2.135-.853-.693-2.613-1.492-5.226-2.505a32.638 32.638 0 0 1-7.574-3.84 13.81 13.81 0 0 1-4.053-4.533 11.44 11.44 0 0 1-1.226-5.44c0-2.293.639-4.48 1.812-6.453 1.333-2.133 3.308-3.84 5.602-4.906 2.506-1.28 5.652-1.867 9.44-1.867z"></path>
                                </svg>
                            </div>
                            <div class="w-5/6">
                                <div class="font-montserrat mb-2 text-bright-gray">
                                    <h3>Adobe Photoshop</h3>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-onyx">
                                    <div class="bg-fire h-2.5 rounded-full mb-4" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="container relative p-10 py-10 mb-14 lg:mb-28">
        <div class="flex flex-row items-center lg:justify-start justify-center">
            <div class="bg-meat lg:flex md:flex flex-row hidden font-montserrat font-bold items-center justify-center p-3 rounded-xl h-full text-raisin">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>                  
            </div>  
            <h2 class="text-meat uppercase font-montserrat font-extrabold text-3xl md:text-4 tracking-wide lg:text-5xl text-center lg:text-left lg:pl-5 md:pl-5">
                Projects
            </h2>
        </div>
        <div class="flex flex-1 gap-9 flex-col">
            <div class="flex flex-1 gap-9 items-center justify-center lg:flex-row flex-col-reverse md:flex-col-reverse mt-10 hover:scale-105 hover:transition hover:300ms">
                <div class="bg-onyx shadow-2xl flex flex-1 gap-10 lg:flex-row md:flex-col flex-col font-montserrat p-9 items-center justify-center rounded-2xl w-full h-full">
                    <div class="flex flex-1 flex-col gap-2 lg:items-start items-center">
                        <h3 class="font-bold text-meat lg:text-justify text-center text-2xl">Address Book</h3>
                        <p class="lg:text-normal text-sm lg:p-0 pt-2 pb-5 justify-normal lg:text-justify md:text-center text-justify text-bright-gray lg:mb-3">Developed an address book application using Python to  practice fundamental
                            programming concepts like data structures, functions, and file handling and implementing a graphical user interface
                            (GUI) using Python's Tkinter library.</p>
                        <a href="https://github.com/kennethbinasa/OOP-Final-Project-Python">
                            <button class="bg-transparent flex flex-1 gap-3 flex-row font-montserrat font-bold items-center justify-center text-bright-gray hover:text-lake">
                                <div class="border-2 py-3 px-8 flex flex-1 flex-row rounded-xl items-center justify-center gap-3  hover:border-lake">
                                    <svg fill="currentColor" class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                        <path
                                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                    </svg>
                                    <h2 class="text-normal">GitHub</h2>
                                </div>
                            </button>
                        </a>
                    </div>
                    <div class="flex flex-1 flex-col gap-1 items-center justify-center">
                        <img class="rounded-xl lg:w-full md:w-3/4 w-full" src="/images/address.png" alt="">
                    </div>
                </div>  
            </div>
            <div class="flex flex-1 gap-9 items-center justify-center flex-row hover:scale-105 hover:transition hover:300ms">
                <div class="flex flex-1 gap-9 items-center justify-center flex-row">
                    <div class="bg-onyx shadow-2xl flex flex-1 gap-10 items-center justify-center lg:flex-row md:flex-col flex-col font-montserrat p-9 rounded-2xl w-full h-full">
                        <div class="flex flex-1 flex-col lg:items-start items-center gap-2">
                            <h3 class="font-bold text-meat justify-start lg:text-justify text-center text-2xl">Repository of DSA Activities</h3>
                            <p class="lg:text-normal text-sm lg:p-0 pt-2 pb-5 justify-normal lg:text-justify md:text-center text-justify text-bright-gray lg:mb-3">Developed a comprehensive suite of programs to explore and implement fundamental data structures such as arrays, stacks, queues, trees, and graphs, as well as core algorithms like traversal techniques within the Turbo C programming environment.</p>
                            <a href="https://github.com/kennethbinasa/DSA-Final-Project-Turbo-C-">
                                <button class="bg-transparent flex flex-1 gap-3 flex-row font-montserrat font-bold items-center justify-center text-bright-gray hover:text-lake">
                                    <div class="border-2 py-3 px-8 flex flex-1 flex-row rounded-xl items-center justify-center gap-3  hover:border-lake">
                                        <svg fill="currentColor" class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                            <path
                                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                        </svg>
                                        <h2 class="text-normal">GitHub</h2>
                                    </div>
                                </button>
                            </a>
                        </div> 
                        <div class="flex flex-1 flex-col gap-1 items-center justify-center">
                            <img class="rounded-xl lg:w-full md:w-3/4 w-full" src="/images/repo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>  
                
            <div class="flex flex-1 gap-9 items-center justify-center flex-row hover:scale-105 hover:transition hover:300ms">
                <div class="bg-onyx shadow-2xl flex flex-1 lg:flex-row md:flex-col flex-col font-montserrat p-9 items-center justify-center rounded-2xl gap-9 w-full h-full">
                    <div class="flex flex-1 flex-col gap-1 lg:items-start items-center">
                        <h3 class="font-bold text-meat lg:text-justify text-center text-2xl">Computer-Aided Drafting Plates</h3> 
                        <p class="lg:text-normal text-sm lg:p-0 pt-2 pb-5 justify-normal 
                        lg:text-justify md:text-center text-justify text-bright-gray lg:mb-3">Leveraged AutoCAD 2024 to develop a comprehensive library of technical drawings encompassing 2D orthographic, 3D isometric, and perspective views across a diverse range of engineering disciplines.</p>
                        <a href="https://drive.google.com/drive/folders/1d7WD404qyInHN8HF76nDQoUvya6czAMm?usp=drive_link">
                            <button class="bg-transparent flex flex-1 gap-3 flex-row font-montserrat font-bold items-center justify-center text-bright-gray hover:text-lake">
                                <div class="border-2 py-3 px-8 flex flex-1 flex-row rounded-xl items-center justify-center gap-3  hover:border-lake">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 bg-transparent" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />                                  
                                    </svg>
                                <h2 class="text-normal">GDrive</h2>
                                </div>
                            </button>
                        </a>
                    </div>
                    <div class="flex flex-1 flex-col gap-1 items-center justify-center">
                        <img class="rounded-xl lg:w-full md:w-3/4 w-full" src="/images/plate.jpg" alt="">
                    </div>
                </div>  
            </div>
        </div>
    </section>

    <section id="contact" class="container relative items-center justify-center">
        <div class="bg-gradient-to-l from-onyx to-raisin rounded-2xl shadow-2xl lg:p-10 m:p-10 py-10 px-5 lg:m-24 md:m-5 m-0 ">
            <div class="flex flex-row items-center justify-center lg:p-0 pb-5">
                <div class="bg-meat lg:flex flex-row hidden font-montserrat font-bold items-center justify-center p-3 rounded-xl h-full text-raisin">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>                  
                </div>  
                <h2 class="text-meat uppercase font-montserrat font-extrabold text-3xl md:text-4 tracking-wide lg:text-5xl text-center lg:text-left lg:pl-5">
                    Contact
                </h2>
            </div>
            <div class="flex flex-1 lg:flex-row md:flex-col-reverse flex-col-reverse items-center justify-center w-full lg:gap-0 gap-10">
                <form class="flex flex-col font-lato lg:p-10 p-1 gap-2 lg:w-full w-full" action="https://api.web3forms.com/submit" method="POST">
                    <input type="hidden" name="access_key" value="bcd49e97-6cd5-4dec-8184-9bdbdcab5591">
                    <label class="text-bright-gray uppercase font-semibold lg:text-sm text-xs sm:text-base" for="name">Name</label>
                    <input class="py-3 px-4 text-raisin text-xs sm:text-base lg:rounded-2xl rounded-xl outline-none border-1 border-solid border-white focus:border-meat placeholder:text-[#202124] md:text-sm lg:text-base" type="text" name="name" id="name" placeholder="Enter your name" required="">
                    <label class="text-bright-gray pt-3 font-semibold lg:text-sm text-xs uppercase sm:text-base" for="email">Email</label>
                    <input class="py-3 px-4 text-raisin text-xs sm:text-base lg:rounded-2xl rounded-xl outline-none border-1 border-solid border-white focus:border-meat placeholder:text-[#202124] md:text-sm lg:text-base" type="email" name="email" id="email" placeholder="Enter your email" required="">
                    <label class="text-bright-gray pt-3 font-semibold lg:text-sm text-xs uppercase sm:text-base" for="message">Message</label>
                    <textarea class="h-[130px] md:h-[115px] lg:h-[138px] py-3 px-4 text-bright-gray text-xs sm:text-base lg:rounded-2xl rounded-xl outline-none border-1 border-solid border-white focus:border-meat placeholder:text-[#202124] md:text-sm lg:text-base" name="message" id="message" placeholder="Enter your message" required=""></textarea>
                    <button type="submit" class="my-3 uppercase hover:bg-transparent hover:border-lake hover:text-lake border border-solid border-meat py-2 w-full mx-auto bg-meat text-raisin lg:rounded-2xl rounded-xl text-sm sm:text-sm md:text-base outline-none border-non">
                    Submit
                    </button>
                </form>
                <div class="container items-center justify-center">
                    <div class="container flex flex-1 flex-col lg:gap-5 gap-3 lg:items-start md:items-center justify-center ">
                        <div class="md:flex md:flex-1 md:flex-row md:gap-10 lg:flex lg:flex-1 lg:flex-col flex flex-1 flex-col lg:items-start lg:gap-5 gap-3 items-start justify-start">
                            <div class="items-center justify-center flex flex-1 flex-row">
                                <div class="bg-transparent border-2 border-bright-gray flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-xl h-full text-bright-gray hover:text-lake hover:border-lake">
                                        <a href="https://www.facebook.com/knnthbnsa">
                                            <button class="lg:w-6 lg:h-6 w-4 h-4 flex items-center justify-center relative overflow-hidden  group">
                                            <svg class="relative z-10 w-6 lg:w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" fill="currentColor">
                                            <path
                                                d="M46.4927 38.6403L47.7973 30.3588H39.7611V24.9759C39.7611 22.7114 40.883 20.4987 44.4706 20.4987H48.1756V13.4465C46.018 13.1028 43.8378 12.9168 41.6527 12.8901C35.0385 12.8901 30.7204 16.8626 30.7204 24.0442V30.3588H23.3887V38.6403H30.7204V58.671H39.7611V38.6403H46.4927Z"
                                                fill="" />
                                            </svg>
                                        </a>
                                    </button>              
                                </div>
                                <h3 class="font-lato lg:text-start text-center text-bright-gray lg:text-xl md:text-normal text-sm lg:pl-5 pl-3">Kenneth Carl Estuaria Binasa</h3> 
                            </div>
                            <div class="flex flex-1 flex-row items-center justify-center">
                                <div class="bg-transparent border-2 border-bright-gray flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-xl h-full text-bright-gray  hover:text-lake hover:border-lake">
                                    <a href="https://www.linkedin.com/in/kennethbinasa/">
                                        <button class="lg:w-6 lg:h-6 w-4 h-4 flex items-center justify-center relative overflow-hidden group">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="relative w-6 lg:w-8">
                                                <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                                </path>
                                            </svg>
                                        </button>           
                                    </a>   
                                </div>
                                <h3 class="font-lato lg:text-start text-center text-bright-gray lg:text-xl text-normal lg:pl-5 pl-3">Kenneth Carl Binasa</h3>
                            </div>
                        </div>
                        <div class="md:flex md:flex-1 md:flex-row md:gap-10 lg:flex lg:flex-1 lg:flex-col flex flex-1 flex-col lg:items-start lg:gap-5 gap-3 items-start justify-start">
                            <div class="flex flex-1 flex-row items-center justify-center">
                                <div class="bg-transparent border-2 border-bright-gray flex flex-row font-montserrat font-bold items-center justify-center p-3 rounded-xl h-full text-bright-gray hover:text-lake hover:border-lake">
                                    <a href="tel:+639054148351">
                                        <button class="lg:w-6 lg:h-6 w-4 h-4 flex items-center justify-center relative overflow-hidden  group">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="relative w-5 lg:w-7">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                            </svg>
                                        </button>  
                                    </a>            
                                </div>
                                <h3 class="font-lato lg:text-start text-center text-bright-gray lg:text-xl text-normal lg:pl-5 pl-3">(+63)9054148351</h3>
                            </div>
                            <div class="flex flex-1 flex-row">
                                <div class="bg-transparent border-2 border-bright-gray flex flex-row font-montserrat font-bold items-end justify-center p-3 rounded-xl h-full text-bright-gray  hover:text-lake hover:border-lake">
                                    <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=kennethbinasa17@gmail.com">
                                        <button class="lg:w-6 lg:h-6 w-4 h-4 flex items-center justify-center relative overflow-hidden  group">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10" viewBox="0 0 72 72" class="relative">
                                                <path
                                                    d="M11.9362 56.1235H20.4189V35.5227L8.30078 26.434V52.4881C8.30078 54.4997 9.93067 56.1235 11.9362 56.1235Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M49.5025 56.1235H57.9853C59.9969 56.1235 61.6207 54.4936 61.6207 52.4881V26.434L49.5025 35.5227"
                                                    fill="currentColor" />
                                                <path
                                                    d="M49.5025 19.7693V35.5227L61.6207 26.434V21.587C61.6207 17.0912 56.4887 14.5282 52.8956 17.2245"
                                                    fill="currentColor" />
                                                <path d="M20.4189 35.5227V19.769L34.9607 30.6754L49.5025 19.7693V35.5227L34.9607 46.429"
                                                    fill="currentColor" />
                                                <path
                                                    d="M8.30078 21.587V26.434L20.4189 35.5227V19.769L17.0259 17.2245C13.4268 14.5282 8.30078 17.0912 8.30078 21.587Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>  
                                    </a>            
                                </div>
                                <h3 class="font-lato text-start gap-5 text-bright-gray lg:text-xl md:text-normal text-sm pt-3 lg:pl-5 pl-3">kennethbinasa17@gmail.com</h3>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="flex flex-1 flex-row justify-center items-center bg-meat">
        <div class="items-center justify-start p-5 text-raisin">
            <h4 class="container text-normal font-lato justify-start">© 2024 - All Rights Reserved</h4>
        </div>
    </footer>
    <script src="\node_modules\flowbite\dist\flowbite.min.js"></script>
</body>
</html>
