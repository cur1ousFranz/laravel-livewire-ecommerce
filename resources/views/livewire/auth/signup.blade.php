@php
    $hasError = $errors->any() || empty($this->email) || empty($this->contactNumber) || empty($this->password) || empty($this->password_confirmation) || $this->password != $this->password_confirmation ? true : false;
@endphp

<section>
    <div class="container flex flex-col-reverse space-x-6 py-6 mx-auto lg:flex-row lg:justify-center">
        <div class="hidden w-1/2 lg:flex lg:justify-center ">
            <img src="{{ asset('storage/illustration-1.png') }}" alt="">
        </div>

        <div class="flex justify-center lg:w-1/2 ">
            <div class="space-y-3 w-8/12 border-blue-200 rounded-xl bg-gray-100 px-8 py-6">
                <h1 class="text-2xl px-3">Sign up</h1>
                <form class="py-4 space-y-4" wire:submit.prevent="store">
                    <x-form.error error="email"/>
                    <div class="flex rounded-full px-4 bg-white border border-gray-200">
                        <svg class="w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                          </svg>
                        <x-form.input wire:model.debounce.500ms="email" name="Email" error="email"/>
                    </div>

                    <x-form.error error="contactNumber"/>
                    <div class="flex rounded-full px-4 bg-white border border-gray-200">
                        <svg class="w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                          </svg>

                        <x-form.input wire:model.debounce.500ms="contactNumber" name="Contact Number" type="tel" error="contactNumber"/>
                    </div>

                    <x-form.error error="password"/>
                    <div class="flex rounded-full px-4 bg-white border border-gray-200">
                        <svg class="w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                          </svg>

                        <x-form.input wire:model.debounce.500ms="password" name="Password" type="password"
                        error="password"/>
                    </div>

                    <x-form.error error="password_confirmation"/>
                    <div class="flex rounded-full px-4 bg-white border border-gray-200">
                        <svg class="w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                          </svg>

                          <x-form.input wire:model.debounce.500ms="password_confirmation" name="Confirm Password" type="password" error="password_confirmation"/>
                    </div>
                    <x-form.button :disable="$hasError">
                        {{ __('Proceed') }}
                    </x-form.button>
                    <hr>
                    <div class="flex justify-center">
                        <p class="text-gray-800">Already have an account? <a class="text-blue-500" href="{{ route('signin') }}">Signin</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>

    window.addEventListener('stored', (e) => {
    Swal.fire({
        title : e.detail.title,
        icon : e.detail.icon,
        iconColor : e.detail.iconColor,
        timer : 3000,
        toast : true,
        position : 'top-right',
        timerProgressBar : true,
        showConfirmButton : false,
        });
    });

</script>
