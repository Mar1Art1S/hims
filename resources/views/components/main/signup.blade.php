<section class="bg-gray-200">
    <div class="p-4 md:p-12 lg:px-16 lg:py-16">
        <div class="mx-auto w-full text-center">
            <h2 class="text-4xl font-r700 text-gray-900 md:text-3xl">
                {{__('Підпишіться на наші новини')}}
            </h2>
        </div>

        <div class="mx-auto mt-4 max-w-xl">
            <form action="#" class="sm:flex sm:gap-4 sm:flex-col ">
                <div class="sm:flex-1">
                    <label class="sr-only">Email</label>
                    <input type="email" placeholder="Email address"
                           class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-300 shadow-sm transition focus:border-white focus:outline-none focus:ring focus:ring-amber-400" />
                </div>

                <button type="submit"
                        class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-amber-400 px-5 py-3 text-white transition focus:outline-none focus:ring focus:ring-blue-800 sm:mt-0 sm:w-auto">
                    <span class="text-sm font-r500">{{__('Підписатися')}}</span>

                    <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</section>
