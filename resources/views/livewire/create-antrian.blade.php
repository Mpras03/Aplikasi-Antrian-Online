<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Antrian') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk mengelola data antrian') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nama_perusahaan" value="{{ __('Nama Perusahaan') }}" />
                <x-jet-input id="nama_perusahaan" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="antrian.nama_perusahaan" />
                <x-jet-input-error for="antrian.nama_perusahaan" class="mt-2" />
            </div>
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nama" value="{{ __('Nama Pendaftar') }}" />
                <x-jet-input id="nama" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="antrian.nama" />
                <x-jet-input-error for="antrian.nama" class="mt-2" />
            </div>
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nama" value="{{ __('Jenis Layanan') }}" />
                <select wire:model.defer="antrian.layanan_id"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full form-control shadow-none">
                    @foreach ($layananOption as $item)
                    <option value="{{ $item->id }}" @if($item->id == $antrian->layanan_id) selected @endif>{{ $item->nama_layanan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nomor_antrian" value="{{ __('Nomor Antrian') }}" />
                <x-jet-input id="nomor_antrian" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="antrian.nomor_antrian" />
                <x-jet-input-error for="antrian.nomor_antrian" class="mt-2" />
            </div>
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="antrian.status" value="{{ __('Status Antrian') }}" />
                <label class="mt-2">
                  <span class="custom-switch-description">Selesai</span>
                  <input id="antrian.status" type="checkbox" name="custom-switch-checkbox" @if($antrian->status == 1) checked @endif class="custom-switch-input" wire:model="antrian.status">
                  <span class="custom-switch-indicator"></span>
                </label>
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
