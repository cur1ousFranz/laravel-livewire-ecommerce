<section id="hero">
    <div class="flex flex-col-reverse mx-auto text-center py-6 items-center w-10/12 md:flex-row md:space-x-32 md:py-12">

        <div class="flex flex-col space-y-8 text-center mb-12">
            <h1 class="uppercase max-w-xl font-roboto font-bold text-4xl md:text-5xl md:text-left">
                {{ __('Enjoy your') }} <br><span class="text-blue-700">{{ __('online shopping') }}</span>
            </h1>

            <p class="hidden max-w-xl font-roboto text-2xl md:flex md:text-left">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, excepturi!
            </p>
            <div class="flex justify-center items-center">
                <button class="px-3 py-2 borded rounded-full bg-blue-700 hover:bg-blue-400 text-white">
                    Get Started
                </button>
            </div>
        </div>

        <div class="flex justify-center">
            <img style="width: 75%" src="{{ asset('storage/hero.png') }}" alt="">
        </div>
    </div>
</section>
