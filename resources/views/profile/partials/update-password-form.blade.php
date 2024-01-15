<section>
    <header>
        <h2 class="text_sub-title">
            {{ __('Update Password') }}
        </h2>

        <p class="text_sub">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-text-input id="update_password_current_password" placeholder="Old Password" name="current_password" type="password" class="input_text-field" autocomplete="current-password" />
        </div>

        <div>
            <x-text-input id="update_password_password" placeholder="New Password" name="password" type="password" class="input_text-field" autocomplete="new-password" />
        </div>

        <div>
            <x-text-input id="update_password_password_confirmation" placeholder="Repeat Password" name="password_confirmation" type="password" class="input_text-field" autocomplete="new-password" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="input_button">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                class="text_success-text"
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
            <x-input-error :messages="$errors->updatePassword->get('current_password')" />
            <x-input-error :messages="$errors->updatePassword->get('password')" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>
    </form>
</section>
