<div>
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            @if ($modelId)
            {{ __(ucwords("Edit ".$name)) }}
            @else
            {{ __(ucwords("Buat ".$name)) }}
            @endif
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="{{ $action }}">
            <div class="mt-4">
                <x-jet-label for="title" value="{{ __('Judul') }}" />
                <x-jet-input id="title" class="mt-1 w-full in-title" type="text" wire:model.debounce.800ms="title" />
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">{{ route('notice.index')."/" }}</span>
                    </div>
                    <input id="slug" type="text" class="form-control in-link" placeholder="tautan" wire:model="slug">
                </div>
                @error('slug') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="content" value="{{ __('Konten') }}" />
                <div class="rounded-md shadow-sm">
                    <div class="mt-1 bg-white">
                        <div class="body-content" wire:ignore>
                            <trix-editor
                                class="trix-content"
                                x-ref="trix"
                                wire:model.debounce.100000ms="content"
                                wire:key="trix-content-unique-key"
                            ></trix-editor>
                        </div>
                    </div>
                </div>
                @error('content') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <div class="form-group">
                    <x-jet-label for="tag" value="{{ __('Tag') }}" />
                    <x-select2 model="postTags" :options="$postOptionTags" :selected="$postTags" title=""></x-select2>
                    @error('tag') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="form-group">
                <x-jet-label for="publish" value="Terbitkan {{ __($name) }}" />
                <label class="mt-2">
                  <span class="custom-switch-description">Status publikasi</span>
                  <input id="publish" type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" wire:model="publish">
                  <span class="custom-switch-indicator"></span>
                </label>
              </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')">
                {{ __('Tutup') }}
            </x-jet-secondary-button>
            @if ($modelId)
                <x-jet-button class="ml-2" wire:loading.attr="disabled">
                    {{ __('Perbarui') }}
                </x-jet-button>
            @else
            <input type="submit" class="ml-2 btn btn-success shadow-none px-4" wire:loading.attr="disabled"
                value="{{ __( strtoupper($button['submit_text']) ) }}">
            @endif
            </form>
        </x-slot>
    </x-jet-dialog-modal>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
