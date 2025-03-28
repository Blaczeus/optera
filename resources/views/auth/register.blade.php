<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data" class="flex flex-col gap-2">
        <x-forms.input label="Name" name="name" placeholder="John Doe" />
        <x-forms.input label="Email" name="email" type="email" placeholder="johndoe@gmail.com" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.input label="Employer Logo" name="logo" type="file" />

        <div class="flex justify-center">
            <x-forms.button class="w-[60%] mt-5">Create Account</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
