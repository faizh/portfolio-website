<section id="resume">
    <div class="flex flex-wrap">
        <div class="container">
            <div class="w-full px-4 flex flex-wrap justify-center">
                <div class="mb-12 p-4 max-w-lg lg:w-1/2">
                    <h2 class="font-semibold text-primary text-xl mb-3 text-center lg:text-left">{{ $resume_attr->title_1 }}</h2>
                    <p class="dark:text-white">{{ $resume_attr->desc_1 }}</p>
                    
                    <div class="timeline relative">
                        <div class="bg-slate-600 absolute w-1 h-2/3 ml-9 mt-14">
    
                        </div>

                        @for($i = 0; $i < count($resume_attr->status_1); $i++)
                            <div class="flex flex-wrap mt-10 relative items-center">
                                <div class="rounded-full bg-slate-600 w-[80px] h-[80px] flex justify-center items-center absolute">
                                    <h3 class="font-semibold text-white">{{ $resume_attr->year_1[$i]->attribute_value }}</h3>
                                </div>
                                <div class="ml-28">
                                    <h2 class="font-semibold text-base text-dark dark:text-white">{{ $resume_attr->status_1[$i]->attribute_value }}</h2>
                                <p class="text-sm text-secondary dark:text-secondary_dark">{{ $resume_attr->desc_status_1[$i]->attribute_value }}</p>
                                </div>
                            </div>
                        @endfor

                    </div>

                </div>
                <div class="mb-12 p-4 max-w-lg lg:w-1/2">
                    <h2 class="font-semibold text-primary text-xl mb-3 text-center lg:text-left">{{ $resume_attr->title_2 }}</h2>
                    <p class="dark:text-white">{{ $resume_attr->desc_2 }}</p>
                    
                    <div class="timeline relative">
                        <div class="bg-slate-600 absolute w-1 h-2/3 ml-9 mt-14">
    
                        </div>
                        
                        @for($i = 0; $i < count($resume_attr->status_2); $i++)
                            <div class="flex flex-wrap mt-10 relative items-center">
                                <div class="rounded-full bg-slate-600 w-[80px] h-[80px] flex justify-center items-center absolute">
                                    <h3 class="font-semibold text-white">{{ $resume_attr->year_2[$i]->attribute_value }}</h3>
                                </div>
                                <div class="ml-28">
                                    <h2 class="font-semibold text-base text-dark dark:text-white">{{ $resume_attr->status_2[$i]->attribute_value }}</h2>
                                    <span class="text-xs text-secondary dark:text-secondary_dark">{{ $resume_attr->sec_status_2[$i]->attribute_value }}</span>
                                <p class="text-sm text-secondary dark:text-secondary_dark">{{ $resume_attr->desc_status_2[$i]->attribute_value }}</p>
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>