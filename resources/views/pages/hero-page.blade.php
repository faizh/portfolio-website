<section id="home" class="pt-36">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-dark font-semibold text-base mb-5 lg:text-lg dark:text-white">{{ $welcome_text }}</h1>
                <div class="flex flex-wrap">
                    <div class="static-txt text-2xl block ml-1 md:hidden dark:text-white">{{ $greeting_text }} </div>
                    <div class="wrapper inline-flex items-center w-full">
                        <div class="block text-2xl hidden md:block md:mr-3 dark:text-white">{{ $greeting_text }}</div>
                        <ul class="dynamic-txts">

                            @foreach ($dynamic_text as $text)
                                <li><span class="text-primary font-semibold">{{ $text->attribute_value }}</span></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <p class="text-sm text-secondary mb-10 lg:text-base dark:text-secondary_dark">{{ $motto }}</p>
                <a href="{{ $resume_src }}" class="text-sm font-semibold text-white bg-primary px-5 py-3 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">{{ $resume_text }}</a>
            </div>

            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="mt-10 relative lg:mt-0 lg:right-0">
                    <img src="{{ asset( $photo_src ) }}" alt="Faiz Hermawan" class="max-w-full mx-auto">
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