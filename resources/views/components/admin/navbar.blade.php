<nav class=" bg-rosetaupe">
    <div class="container mx-auto px-2 lg:px-4  flex justify-between lg:justify-normal items-center space-x-4 p-2">
        <img class="w-16 border border-paledogwood rounded-full" src="{{ asset('logo.jpg') }}" alt="Logo">
        <div class="hidden lg:block">
            <x-admin.menu />
        </div>
        <div class="lg:hidden">
            <x-side-panel />
        </div>
    </div>
</nav>