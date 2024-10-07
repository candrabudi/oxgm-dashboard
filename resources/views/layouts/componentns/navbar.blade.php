<div
    class="h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-5 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700 before:content-[''] before:absolute before:h-[65px] before:inset-0 before:top-0 before:mx-7 before:bg-primary/30 before:mt-3 before:rounded-xl before:hidden before:md:block before:dark:bg-darkmode-600/30 after:content-[''] after:absolute after:inset-0 after:h-[65px] after:mx-3 after:bg-primary after:mt-5 after:rounded-xl after:shadow-md after:hidden after:md:block after:dark:bg-darkmode-600">
    <div class="flex h-full items-center">
        <!-- BEGIN: Logo -->
        <a href="#" class="-intro-x hidden md:flex xl:w-[180px]">
            <img class="w-6" src="{{ asset('images/logo.svg') }}" alt="Enigma Tailwind HTML Admin Template">
            <span class="ml-3 text-lg text-white hidden xl:block">
                Enigma
            </span>
        </a>
        <nav aria-label="breadcrumb"
            class="flex h-[45px] md:ml-10 md:border-l border-white/[0.08] dark:border-white/[0.08] mr-auto -intro-x md:pl-6">
            
        </nav>
        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative intro-x mr-4 sm:mr-6">
            <div data-tw-toggle="dropdown" aria-expanded="false"
                class="cursor-pointer relative block text-white/70 outline-none before:absolute before:right-0 before:top-[-2px] before:h-[8px] before:w-[8px] before:rounded-full before:bg-danger before:content-['']">
                <i data-tw-merge="" data-lucide="bell" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i>
            </div>
            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                data-leave="transition-all ease-linear duration-150"
                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge=""
                    class="dropdown-content rounded-md border-transparent bg-white shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-2 w-[280px] p-5 sm:w-[350px]">
                    <div class="mb-5 font-medium">Notifications</div>
                    <div class="cursor-pointer relative flex items-center">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="images/fakers/profile-10.jpg"
                                alt="Midone Tailwind HTML Admin Template">
                            <div
                                class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Kate Winslet
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    01:10 PM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button
                data-tw-toggle="dropdown" aria-expanded="false"
                class="cursor-pointer image-fit zoom-in intro-x block h-8 w-8 scale-110 overflow-hidden rounded-full shadow-lg"><img
                    src="images/fakers/profile-15.jpg" alt="Midone Tailwind HTML Admin Template">
            </button>
            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                data-leave="transition-all ease-linear duration-150"
                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge=""
                    class="dropdown-content rounded-md border-transparent p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 relative mt-px w-56 bg-theme-1/80 text-white before:absolute before:inset-0 before:z-[-1] before:block before:rounded-md before:bg-black">
                    <div class="p-2 font-medium font-normal">
                        <div class="font-medium">{{ Auth::user()->username }}</div>
                        <div class="mt-0.5 text-xs text-white/70 dark:text-slate-500">
                            {{ Auth::user()->role }}
                        </div>
                    </div>
                    <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                    </div>
                    <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                    </div>
                    <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i
                            data-tw-merge="" data-lucide="toggle-right" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Logout</a>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
