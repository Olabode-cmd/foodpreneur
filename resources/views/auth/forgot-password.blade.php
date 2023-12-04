<x-guest-layout>
    <div class="row justify-content-center my-auto">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-transparent shadow-none border-0">
                <div class="card-body">
                    <div class="py-3">
                       
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <div class="text-center">
                            <h5 class="mb-0">Forgot Password</h5>
                            <p class="text-muted mt-2">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
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

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Email Password Reset Link') }}
                                </x-primary-button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end row -->
</x-guest-layout>
