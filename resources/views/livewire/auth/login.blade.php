<div class="min-h-screen flex flex-col items-center justify-center bg-gray-300">
    <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-md w-full max-w-md">
        <div class="font-medium self-center text-xl sm:text-2xl uppercase text-gray-800">Login To Your Account</div>
        @if (session()->has('message'))
            <div id="message" class="bg-red-100 border mt-5 border-red-400 text-red-700 px-4 py-3 rounded relative"
                role="alert">
                <span class="block sm:inline font-medium"> {{ session('message') }}</span>
                <span onclick="$('#message').hide();" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        @endif
        <div class="mt-5">
            <form wire:submit.prevent="login">

                <div class="flex flex-col mb-6">
                    <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">E-Mail
                        Address</label>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>

                        <input id="email" type="email" wire:model.defer="email"
                            class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                            placeholder="E-Mail Address" />
                    </div>
                </div>

                <div class="flex flex-col mb-6">
                    <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Password</label>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <span>
                                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </div>

                        <input id="password" type="password" wire:model.defer="password"
                            class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                            placeholder="Password" />
                    </div>
                </div>

                <div class="flex items-center mb-6 -mt-4">
                    <div class="flex ml-auto">
                        <a href="#" class="inline-flex text-xs sm:text-sm text-blue-500 hover:text-blue-700">Forgot Your
                            Password?</a>
                    </div>
                </div>

                <div class="flex w-full">
                    <button type="submit"
                        class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-green-600 hover:bg-green-700 rounded py-2 w-full transition duration-150 ease-in">
                        <span class="mr-2 uppercase">Login</span>
                        <span>
                            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
        <div class="flex justify-center items-center mt-6">
            <a href="#" target="_blank"
                class="inline-flex items-center font-bold text-gray-500 hover:text-gray-700 text-xs text-center">
                <span>
                    <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </span>
                <span class="ml-2">You don't have an account?</span>
            </a>
        </div>
    </div>
</div>
