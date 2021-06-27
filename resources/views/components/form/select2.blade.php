<div class="form-group" wire:ignore>
    @if($title != '')
        <label for="{{$model}}">{{$title}}</label>
    @endif
    <select id="{{$model}}" class="form-control select2 block" multiple="" style="width:100%;">
        @for($i=0;$i<count($options) ;$i++)
            <option value="{{$options[$i]['value']}}" {{ $isSelected($options[$i]['value']) ? 'selected="selected"' : '' }}>
                {{$options[$i]['title']}}
            </option>
        @endfor
    </select>
    <script>
        document.addEventListener('livewire:load', function () {
            let data;
            $('#{{$model}}').select2();
            $('#{{$model}}').on('change', function (e) {
                data = $('#{{$model}}').select2("val");
            @this.set('{{$model}}', data);
            })

        });
    </script>
</div>
