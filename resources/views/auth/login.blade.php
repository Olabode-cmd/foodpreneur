<x-guest-layout>
    <div class="row justify-content-center my-auto">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-transparent shadow-none border-0">
                <div class="card-body">
                    <div class="py-3">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <div class="text-center">
                            <h5 class="mb-0">Welcome Back !</h5>
                            <p class="text-muted mt-2">Sign in to continue to {{ config('app.name') }}.</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}" class="mt-4 pt-2">
                            @csrf
                            <!-- Email Address -->
                            <div class="form-floating form-floating-custom mb-3">
                                <x-text-input id="email" type="email" name="email" :value="old('email')" required  autocomplete="username" />
                                <x-input-label for="email" :value="__('Email')" />
                                <div class="form-floating-icon">
                                    <i class="uil uil-users-alt"></i>
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="form-floating form-floating-custom mb-3">
                                <x-text-input id="password" 
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />
                                <x-input-label for="password" :value="__('Password')" />

                                <div class="form-floating-icon">
                                    <i class="uil uil-padlock"></i>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                
                                <div class="form-check form-check-primary font-size-16 py-1">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember-check">
                                    <div class="float-end">
                                        <a href="{{ route('password.request') }}" class="text-muted text-decoration-underline font-size-14">Forgot your password?</a>
                                    </div>
                                    <label class="form-check-label font-size-14" for="remember-check">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ms-3">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end row -->
</x-guest-layout>
