<section id="about" class="pt-36 pb-30">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-1/2">
                <h4 class="font-semibold text-primary text-lg mb-2 lg:text-xl">{{ $about_title }}</h4>
                <h2 class="font-semibold text-dark text-lg mb-2 max-w-md lg:text-xl dark:text-white">{{ $header_1 }}</h2>
                <p class="text-sm text-secondary max-w-lg lg:text-base dark:text-secondary_dark">{{ $desc_1 }}</p>
            </div>

            <div class="w-full px-4 lg:w-1/2 lg:pt-10">
                <h3 class="font-semibold text-dark text-lg mb-2 max-w-md lg:text-xl dark:text-white">{{ $header_2 }}</h3>
                <p class="text-sm text-secondary max-w-lg mb-5 lg:text-base dark:text-secondary_dark">{{ $desc_2 }}</p>
                <div class="flex items-center mb-10">

                    @foreach ($socmed_data as $socmed)
                        <a href="{{ $socmed->socmed_src }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white duration-200 ease-in-out">
                            <svg role="img" class="fill-current dark:text-white" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>{{ $socmed->socmed_name }}</title><path d="{{ $socmed->svg }}"/></svg>
                        </a>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>