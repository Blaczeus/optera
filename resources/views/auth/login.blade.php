<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login" class="flex flex-col gap-2">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

        <div class="flex justify-center">
            <x-forms.button class="w-[60%] mt-5">Log In</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
