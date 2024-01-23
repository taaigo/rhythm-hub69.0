<section>
    <header>
        <h2 class="text_sub-title">
            {{ __('Change about me') }}
        </h2>

        <p class="text_sub">
            {{ __('Tell us something about yourself.') }}
        </p>
    </header>

    <form method="post" action="{{ route("description.update")  }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <textarea cols="35" rows="15" id="update-profile-description" name="description" type="textarea" class="input_text-field"></textarea>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="input_button">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'description-updated')
                <p class="text_success-text">{{ __('Saved.') }}</p>
            @endif
            <x-input-error :messages="$errors->updateDescription->get('description')" />
        </div>
    </form>
</section>
