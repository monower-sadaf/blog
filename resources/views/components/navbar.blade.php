<nav class=" bg-rosetaupe">
    <div class="container mx-auto flex justify-between lg:justify-normal items-center space-x-4 p-2">
        <img class="w-16 border border-paledogwood rounded-full" src="{{ asset('logo.jpg') }}" alt="Logo">
        <x-menu />
        <div class="lg:hidden">
            <x-side-panel />
        </div>
    </div>
</nav>