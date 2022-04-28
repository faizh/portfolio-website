<section id="resume">
    <div class="flex flex-wrap mt-10">
        <div class="container">
            <div class="w-full px-4 flex flex-wrap justify-center">
                <div class="mb-12 p-4 max-w-lg lg:w-1/2">
                    <h2 class="font-semibold text-primary text-xl mb-3 text-center lg:text-left">{{ $resume_title_1 }}</h2>
                    <p class="dark:text-white">{{ $resume_desc_1 }}</p>
                    
                    <div class="timeline relative">
                        <div class="bg-slate-600 absolute w-1 h-2/3 ml-9 mt-14">
    
                        </div>

                        @foreach ($resume_data_1 as $resume_1)
                        <?php $resume_1 = (object) $resume_1 ?>
                            <div class="flex flex-wrap mt-10 relative items-center">
                                <div class="rounded-full bg-slate-600 w-[80px] h-[80px] flex justify-center items-center absolute">
                                    <h3 class="font-semibold text-white">{{ $resume_1->year }}</h3>
                                </div>
                                <div class="ml-28">
                                    <h2 class="font-semibold text-base text-dark dark:text-white">{{ $resume_1->status_name }}</h2>
                                <p class="text-sm text-secondary dark:text-secondary_dark">{{ $resume_1->desc_status }}</p>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>

                <div class="mb-12 p-4 max-w-lg lg:w-1/2">
                    <h2 class="font-semibold text-primary text-xl mb-3 text-center lg:text-left">{{ $resume_title_2 }}</h2>
                    <p class="dark:text-white">{{ $resume_desc_2 }}</p>
                    
                    <div class="timeline relative">
                        <div class="bg-slate-600 absolute w-1 h-2/3 ml-9 mt-14">
    
                        </div>

                        @foreach ($resume_data_2 as $resume_2)
                        <?php $resume_2 = (object) $resume_2; ?>
                            <div class="flex flex-wrap mt-10 relative items-center">
                                <div class="rounded-full bg-slate-600 w-[80px] h-[80px] flex justify-center items-center absolute">
                                    <h3 class="font-semibold text-white">{{ $resume_2->year }}</h3>
                                </div>
                                <div class="ml-28">
                                    <h2 class="font-semibold text-base text-dark dark:text-white">{{ $resume_2->status_name }}</h2>
                                    <span class="text-xs text-secondary dark:text-secondary_dark">{{ $resume_2->sec_status_name }}</span>
                                <p class="text-sm text-secondary dark:text-secondary_dark">{{ $resume_2->desc_status }}</p>
                                </div>
                            </div>
                        @endforeach
                    
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>