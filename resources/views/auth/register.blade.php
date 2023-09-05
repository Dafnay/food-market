<x-guest-layout>

    <div class="flex flex-nowrap w-full ">
        <a href="{{  url('/login')}}"  class=" w-8 h-8 bg-DarkSlateGray text-white font-bold text-xl rounded text-center align-content-center px-1 "><</a>
        <div class="pl-5" >
            <h1 class="text-dark font-Poppins text-3xl font-bold">Log In</h1>
            <div>
                <p class="text-gray-300 font-Poppins text-md">Register and eat</p>
            </div>
        </div>
    </div>

<div class=" w-full h-full  md:w-full lg:w-1/2">

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label class="font-Poppins" for="name" :value="__('Name')" />
            <x-text-input id="name" class="mt-2 font-Poppins border border-gray-300 rounded  w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')"  />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label class="font-Poppins " for="email" :value="__('Email')" />
            <x-text-input id="email" class="mt-2 font-Poppins border border-gray-300 rounded  w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="font-Poppins " for="password" :value="__('Password')" />

            <x-text-input id="password" class="mt-2 font-Poppins border border-gray-300 rounded  w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label class="font-Poppins " for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="mt-2 font-Poppins border border-gray-300 rounded  w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- Phone -->
        <div class="mt-4">
            <x-input-label class="font-Poppins " for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="mt-2 font-Poppins border border-gray-300 rounded  w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <!-- Addres -->
        <div class="mt-4">
            <x-input-label class="font-Poppins " for="address" :value="__('Address')" />
            <x-text-input id="address" class="mt-2 font-Poppins border border-gray-300 rounded  w-full" type="text" name="address" :value="old('address')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <!-- House_n -->
        <div class="mt-4">
            <x-input-label class="font-Poppins " for="house_n" :value="__('House_n')" />
            <x-text-input id="house_n" class="mt-2 font-Poppins border border-gray-300 rounded  w-full" type="number" name="house_n" :value="old('house_n')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('house_n')" class="mt-2" />
        </div>
        <!-- City-->
        <div class="mt-4">
            <x-input-label class="font-Poppins " for="city" :value="__('City')" />
            <x-text-input id="city" class="mt-2 font-Poppins border border-gray-300 rounded  w-full" type="text" name="city" :value="old('city')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>
        <!--Id_ROl-->
        <div class="mt-4">
            <x-input-label class="font-Poppins " for="Id_rol" :value="__('Id_rol')" />
            <x-text-input id="id_rol" class="mt-2 font-Poppins border border-gray-300 rounded  w-full" type="text" name="id_rol" :value="old('id_rol')"  />
            <x-input-error :messages="$errors->get('id_rol')" class="mt-2" />
        </div>
        <!--Picture-->
        <div class="mt-4">
            <x-input-label class="font-Poppins " for="picture" :value="__('Picture')" />
            <x-text-input id="picture" class="mt-2 font-Poppins border border-gray-300 rounded  w-full" type="file" name="picture" :value="old('picture')"  />
            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
        </div>





        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

</div>
</x-guest-layout>






