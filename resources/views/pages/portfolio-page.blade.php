<section id="portfolios" class="pt-20 pb-20 bg-slate-100 dark:bg-slate-800">
    <div class="container">
        <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-primary text-lg">{{ $portfolio_title }}</h4>
            <p class="dark:text-white">{{ $portfolio_desc }}</p>
        </div>
        </div>

        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">

            @foreach ($portfolio_data as $portfolio)
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{ asset( $portfolio->portfolio_src ) }}" alt="{{ $portfolio->portfolio_name }}" width="full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">{{ $portfolio->portfolio_name }}</h3>
                        <p class="text-sm text-secondary dark:text-secondary_dark">{{ $portfolio->portfolio_desc }}</p>
                </div>
            @endforeach
        
        </div>
    </div>
</section>