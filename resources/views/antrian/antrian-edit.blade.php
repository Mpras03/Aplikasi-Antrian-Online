<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Antrian') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dasbor</a></div>
            <div class="breadcrumb-item"><a href="#">Antrian</a></div>
            <div class="breadcrumb-item"><a href="{{ route('antrian') }}">Edit Antrian</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-antrian action="updateAntrian" :antrianId="request()->antrianId" />
    </div>
</x-app-layout>
