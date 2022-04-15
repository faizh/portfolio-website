<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>

    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat">
    <style>
      body {
        font-family: 'Montserrat', sans-serif;
      }
    </style>
</head>
<body class="bg-white dark:bg-slate-900">

    <!-- header start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-semibold text-primary text-lg block py-6">faizhermawan</a>
                </div>
                
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 shadow-lg rounded-lg max-w-[170px] w-full right-4 top-full lg:block lg:max-w-full lg:static lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-sm text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-sm text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">About</a>
                            </li>
                            <li class="group">
                                <a href="#portfolios" class="text-sm text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Projects</a>
                            </li>
                            <li class="group">
                                <a href="#resume" class="text-sm text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Resume</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- light => to light theme -->
                    <button class="hidden mr-12 lg:mr-0 lg:float-right dark:block dark:animate-pulse" onclick="changeThemes('light')">
                        <svg role="img" class="fill-current dark:text-white" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="color-scheme-light"><path d="M12 18c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6zm0-10c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0-4a1 1 0 0 1-1-1V1a1 1 0 0 1 2 0v2a1 1 0 0 1-1 1zm0 20a1 1 0 0 1-1-1v-2a1 1 0 1 1 2 0v2a1 1 0 0 1-1 1zM5.64 6.64a.997.997 0 0 1-.707-.293l-1.42-1.42a.999.999 0 1 1 1.414-1.414l1.42 1.42A.999.999 0 0 1 5.64 6.64zm14.139 14.139a.997.997 0 0 1-.707-.293l-1.42-1.42a.999.999 0 1 1 1.414-1.414l1.42 1.42a.999.999 0 0 1-.707 1.707zM3 13H1a1 1 0 1 1 0-2h2a1 1 0 0 1 0 2zm20 0h-2a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2zM4.22 20.779a.999.999 0 0 1-.707-1.707l1.42-1.42a.999.999 0 1 1 1.414 1.414l-1.42 1.42a.993.993 0 0 1-.707.293zM18.359 6.64a.999.999 0 0 1-.707-1.707l1.42-1.42a.999.999 0 1 1 1.414 1.414l-1.42 1.42a.997.997 0 0 1-.707.293z"></path></svg>
                    </button>

                    <!-- moon => to dark theme -->
                    <button class="mr-12 animate-pulse dark:hidden lg:mr-0 lg:float-right" onclick="changeThemes('dark')">
                        <svg role="img" class="fill-current dark:text-white" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="color-scheme-dark"><path d="M12.048 21.963c-.308 0-.618-.015-.93-.043-2.66-.246-5.064-1.513-6.771-3.567s-2.512-4.651-2.266-7.311a10.004 10.004 0 0 1 9.038-9.038 1 1 0 0 1 .896 1.589 6.008 6.008 0 0 0 1.258 8.392c2.078 1.536 5.055 1.536 7.133 0a1 1 0 0 1 1.591.896 9.951 9.951 0 0 1-9.949 9.082zM9.315 4.438a8.006 8.006 0 0 0-5.244 6.787 7.954 7.954 0 0 0 1.813 5.849 7.95 7.95 0 0 0 5.417 2.854 7.95 7.95 0 0 0 8.266-5.243 8.01 8.01 0 0 1-2.729.476 7.946 7.946 0 0 1-4.755-1.565C9.174 11.443 8.145 7.68 9.315 4.438z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- hero section start -->
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-dark font-semibold text-base mb-5 lg:text-lg dark:text-white">Welcome to My Portofolio Website!</h1>
                    <div class="flex flex-wrap">
                        <div class="static-txt text-2xl block ml-1 md:hidden dark:text-white">Hey I'm </div>
                        <div class="wrapper inline-flex items-center w-full">
                            <div class="block text-2xl hidden md:block md:mr-3 dark:text-white">Hey, I'm</div>
                            <ul class="dynamic-txts">
                                <li><span class="text-primary font-semibold">Faiz Hermawan</span></li>
                                <li><span class="text-primary font-semibold">Web Developer</span></li>
                                <li><span class="text-primary font-semibold">Mobile Developer</span></li>
                                <li><span class="text-primary font-semibold">Freelancer</span></li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-sm text-secondary mb-10 lg:text-base dark:text-secondary_dark">Building an excelent product is a must. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima architecto sequi ullam corrupti repudiandae praesentium!</p>
                    <a href="#" class="text-sm font-semibold text-white bg-primary px-5 py-3 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Get My Resume</a>
                </div>

                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="mt-10 relative lg:mt-0 lg:right-0">
                        <img src="{{ asset('assets/img/my-photo.png') }}" alt="Faiz Hermawan" class="max-w-full mx-auto">
                        <span class="absolute -bottom-10 -z-10 left-1/2 -translate-x-1/2 md:scale-125 lg:scale-150 lg:-translate-y-10">
                            <svg width="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ffc200" d="M48.1,-61C61.2,-56.6,69.9,-41.1,74.4,-24.8C78.8,-8.5,79,8.6,71.8,21C64.6,33.5,50.1,41.2,36.9,52.3C23.7,63.4,11.9,77.9,-1.4,79.8C-14.7,81.8,-29.5,71.3,-41.7,59.9C-53.9,48.5,-63.6,36.2,-69.7,21.7C-75.7,7.2,-78,-9.5,-67.8,-16.1C-57.5,-22.8,-34.6,-19.4,-21.2,-23.7C-7.8,-28,-3.9,-39.9,6.8,-49.2C17.5,-58.6,35,-65.4,48.1,-61Z" transform="translate(100 110) scale(0.7)" />
                              </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- about section start -->
    <section id="about" class="pt-36 pb-30">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-semibold text-primary text-lg mb-2 lg:text-xl">About Me</h4>
                    <h2 class="font-semibold text-dark text-lg mb-2 max-w-md lg:text-xl dark:text-white">A little stories about Who I Am!</h2>
                    <p class="text-sm text-secondary max-w-lg lg:text-base dark:text-secondary_dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium consectetur tempore voluptates eveniet et odio officiis. Sunt distinctio fuga ipsam?</p>
                </div>

                <div class="w-full px-4 lg:w-1/2 lg:pt-10">
                    <h3 class="font-semibold text-dark text-lg mb-2 max-w-md lg:text-xl dark:text-white">Let's Connect!</h3>
                    <p class="text-sm text-secondary max-w-lg mb-5 lg:text-base dark:text-secondary_dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, odio.</p>
                    <div class="flex items-center mb-10">
                        <!-- Instagram -->
                        <a href="https://instagram.com/faizhermawan_/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white duration-200 ease-in-out">
                            <svg role="img" class="fill-current dark:text-white" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>

                        <!-- Twitter -->
                        <a href="https://twitter.com/faizhermawan_/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white duration-200 ease-in-out">
                            <svg role="img" width="20" class="fill-current dark:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/faiz.hermawan.77/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white duration-200 ease-in-out">
                            <svg role="img" width="20" class="fill-current dark:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>

                        <!-- Github -->
                        <a href="https://github.com/faizh/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white duration-200 ease-in-out">
                            <svg role="img" width="20" class="fill-current dark:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- portfolio section start -->
    <section id="portfolios" class="pt-20 pb-20 bg-slate-100 dark:bg-slate-800">
         <div class="container">
             <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-primary text-lg">Portfolio</h4>
                    <p class="dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus facere neque sequi harum recusandae hic vero dolore sunt tenetur commodi?</p>
                </div>
             </div>

             <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{ asset('assets/img/portfolio/flyme.jpg') }}" alt="Silsilah Bugis" width="full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">FlyMe</h3>
                        <p class="text-sm text-secondary dark:text-secondary_dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae totam vitae dolor deserunt ex accusamus quo?</p>
                </div>

                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{ asset('assets/img/portfolio/histudent.jpg') }}" alt="Silsilah Bugis" width="full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">HiStudent</h3>
                        <p class="text-sm text-secondary dark:text-secondary_dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae totam vitae dolor deserunt ex accusamus quo?</p>
                </div>

                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{ asset('assets/img/portfolio/silsilah.jpg') }}" alt="Silsilah Bugis" width="full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Silsilah Bugis Makassar</h3>
                        <p class="text-sm text-secondary dark:text-secondary_dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae totam vitae dolor deserunt ex accusamus quo?</p>
                </div>
                
             </div>
         </div>
    </section>
    <!-- portfolio section end -->

    <!-- resume section start -->
    <section id="resume">
        <div class="flex flex-wrap">
            <div class="container">
                <div class="w-full px-4 flex flex-wrap justify-center">
                    <div class="mb-12 p-4 max-w-lg lg:w-1/2">
                        <h2 class="font-semibold text-primary text-xl mb-3 text-center lg:text-left">Experiences</h2>
                        <p class="dark:text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae in libero cum, ducimus distinctio officia totam!</p>
                        
                        <div class="timeline relative">
                            <div class="bg-slate-600 absolute w-1 h-2/3 ml-9 mt-14">
        
                            </div>
                            
                            <div class="flex flex-wrap mt-10 relative items-center">
                                <div class="rounded-full bg-slate-600 w-[80px] h-[80px] flex justify-center items-center absolute">
                                    <h3 class="font-semibold text-white">2020</h3>
                                </div>
                                <div class="ml-28">
                                    <h2 class="font-semibold text-base text-dark dark:text-white">Web Developer</h2>
                                <p class="text-sm text-secondary dark:text-secondary_dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, excepturi.</p>
                                </div>
                            </div>
        
                            <div class="flex flex-wrap mt-10 relative items-center">
                                <div class="rounded-full bg-slate-600 w-[80px] h-[80px] flex justify-center items-center absolute">
                                    <h3 class="font-semibold text-white">2020</h3>
                                </div>
                                <div class="ml-28">
                                    <h2 class="font-semibold text-base text-dark dark:text-white">Mobile Developer</h2>
                                <p class="text-sm text-secondary dark:text-secondary_dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, excepturi.</p>
                                </div>
                            </div>
    
                            <div class="flex flex-wrap mt-10 relative items-center">
                                <div class="rounded-full bg-slate-600 w-[80px] h-[80px] flex justify-center items-center absolute">
                                    <h3 class="font-semibold text-white">2020</h3>
                                </div>
                                <div class="ml-28">
                                    <h2 class="font-semibold text-base text-dark dark:text-white">Fullstack Developer</h2>
                                <p class="text-sm text-secondary dark:text-secondary_dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, eum. Possimus quod quia minima enim commodi consequatur, quis eligendi. Doloremque.</p>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="mb-12 p-4 max-w-lg lg:w-1/2">
                        <h2 class="font-semibold text-primary text-xl mb-3 text-center lg:text-left">Educations</h2>
                        <p class="dark:text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae in libero cum, ducimus distinctio officia totam!</p>
                        
                        <div class="timeline relative">
                            <div class="bg-slate-600 absolute w-1 h-2/3 ml-9 mt-14">
        
                            </div>
                            
                            <div class="flex flex-wrap mt-10 relative items-center">
                                <div class="rounded-full bg-slate-600 w-[80px] h-[80px] flex justify-center items-center absolute">
                                    <h3 class="font-semibold text-white">2020</h3>
                                </div>
                                <div class="ml-28">
                                    <h2 class="font-semibold text-base text-dark dark:text-white">Binus University </h2>
                                    <span class="text-xs text-secondary dark:text-secondary_dark">Computer Science</span>
                                <p class="text-sm text-secondary dark:text-secondary_dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, excepturi.</p>
                                </div>
                            </div>
        
                            <div class="flex flex-wrap mt-10 relative items-center">
                                <div class="rounded-full bg-slate-600 w-[80px] h-[80px] flex justify-center items-center absolute">
                                    <h3 class="font-semibold text-white">2016</h3>
                                </div>
                                <div class="ml-28">
                                    <h2 class="font-semibold text-base text-dark dark:text-white">Vocational High School Telkom Purwokerto</h2>
                                    <span class="text-xs text-secondary dark:text-secondary_dark">Software Engineering</span>
                                <p class="text-sm text-secondary dark:text-secondary_dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, excepturi.</p>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- resume section end -->

    <script src="{{ asset('js/script.js') }}"></script>
    <footer>
        <div class="container">
            <div class="w-full px-4">
               <div class="max-w-sm mx-auto text-center mb-16">
                    <h2 class="text-sm text-center justify-center align-middle dark:text-white">Copyright © 2022 faizhermawan . All rights reserved</h2>
               </div>
            </div>
        </div>
    </footer>
</body>
</html>