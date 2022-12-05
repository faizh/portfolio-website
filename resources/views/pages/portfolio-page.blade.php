<section id="portfolios" class="pt-20 pb-20 bg-slate-100 dark:bg-slate-800">
    <div class="container">
        <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-primary text-lg">{{ $portfolio_attr->title }}</h4>
            <p class="dark:text-white">{{ $portfolio_attr->desc }}</p>
        </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
        @for ($i = 0; $i < count($portfolio_attr->portfolio_name); $i++)
            <div class="mb-12 p-4 md:w-1/2">
                <a href="{{ $portfolio_attr->portfolio_link[$i]->attribute_value }}" target="_blank">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset( $portfolio_attr->portfolio_src[$i]->attribute_value) }}" alt="$portfolio_attr->portfolio_name[$i]->attribute_value" width="full">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">{{ $portfolio_attr->portfolio_name[$i]->attribute_value }}</h3>
                    <p class="text-sm text-secondary dark:text-secondary_dark">{{ $portfolio_attr->portfolio_desc[$i]->attribute_value }}</p>
                </a>
            </div>
        @endfor        
        </div>
    </div>
</section>