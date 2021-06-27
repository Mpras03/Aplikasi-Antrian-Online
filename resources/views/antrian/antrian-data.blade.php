<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Antrian') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dasbor</a></div>
            <div class="breadcrumb-item"><a href="#">Antrian</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="antrian" :model="$antrian" />
    </div>
</x-app-layout>
