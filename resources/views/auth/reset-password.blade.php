<x-guest-layout>
    <div class="row justify-content-center my-auto">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-transparent shadow-none border-0">
                <div class="card-body">
                    <div class="py-3">
                        <div class="text-center">
                            <p class="text-muted mt-2">Complete your password reset.</p>
                        </div>
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                           <div class="form-floating form-floating-custom mb-3">
                                <x-text-input id="email" type="email" name="email" :value="old('email', $request->email)" required  autocomplete="username" />
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
                                                required autocomplete="new-password" />
                                <x-input-label for="password" :value="__('Password')" />

                                <div class="form-floating-icon">
                                    <i class="uil uil-padlock"></i>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-floating form-floating-custom mb-3">
                                <x-text-input id="password_confirmation" 
                                                type="password"
                                                name="password_confirmation"
                                                required autocomplete="new-password" />
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <div class="form-floating-icon">
                                    <i class="uil uil-padlock"></i>
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Reset Password') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end row -->
</x-guest-layout>
