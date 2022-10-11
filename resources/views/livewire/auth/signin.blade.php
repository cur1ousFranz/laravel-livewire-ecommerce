@php
    $hasError = $errors->any() || empty($this->email) ||  empty($this->password) ? true : false;
@endphp

<section>
    <div class="flex flex-col-reverse mx-auto space-x-6 py-6 items-center w-10/12 lg:flex-row lg:justify-center">
        <div class="hidden w-1/2 lg:flex lg:justify-center ">
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
        </div>

        <div class="flex justify-center w-full lg:w-1/2">
            <div class="space-y-3 w-8/12 border-blue-200 rounded-xl bg-gray-100 px-8 py-6">
                <h1 class="text-2xl px-3">Sign in</h1>
                <form class="py-4 space-y-4" wire:submit.prevent="store">
                    <x-form.error error="email"/>
                    @if (session()->has('error'))
                        <p class="text-sm text-red-500 px-3">{{ __('Invalid credentials!') }}</p>
                    @endif
                    <div class="flex rounded-full px-4 bg-white border border-gray-200">
                        <svg class="w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                          </svg>
                        <x-form.input wire:model.debounce.500ms="email" name="Email" error="email"/>
                    </div>

                    <x-form.error error="password"/>
                    <div class="flex rounded-full px-4 bg-white border border-gray-200">
                        <svg class="w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                          </svg>

                        <x-form.input wire:model.debounce.500ms="password" name="Password" type="password" error="password"/>
                    </div>
                    <x-form.button :disable="$hasError">
                        {{ __('Proceed') }}
                    </x-form.button>
                    <hr>
                    <div class="flex justify-center">
                        <p class="text-gray-800">Don't have an account? <a class="text-blue-500" href="{{ route('signup') }}">Signup</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

