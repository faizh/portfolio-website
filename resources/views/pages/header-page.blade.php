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
                        @foreach ($nav_menus as $menu)
                            <li class="group">
                                <a href="{{ $menu-> href }}" class="text-sm text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">{{ $menu->display_name }}</a>
                            </li>
                        @endforeach
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