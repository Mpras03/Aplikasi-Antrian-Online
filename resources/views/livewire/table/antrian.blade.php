<div>
    <x-data-table :data="$data" :model="$antrians">
        <x-slot name="head">
            <tr>
                <th><span wire:click.prevent="sortBy('id')" role="button" href="#">
                    #
                    @include('components.sort-icon', ['field' => 'num'])
                </span></th>
                <th><span wire:click.prevent="sortBy('nama_perusahaan')" role="button" href="#">
                    Nama Perusahaan
                    @include('components.sort-icon', ['field' => 'nama_perusahaan'])
                </span></th>
                <th><span wire:click.prevent="sortBy('layanan_id')" role="button" href="#">
                    Layanan
                    @include('components.sort-icon', ['field' => 'layanan_id'])
                </span></th>
                <th><span wire:click.prevent="sortBy('nomor_antrian')" role="button" href="#">
                    Nomor Antrian
                    @include('components.sort-icon', ['field' => 'nomor_antrian'])
                </span></th>
                <th><span wire:click.prevent="sortBy('status')" role="button" href="#">
                    Status
                    @include('components.sort-icon', ['field' => 'status'])
                </span></th>
                <th><span wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </span></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($antrians as $item)
                <tr x-data="window.__controller.dataTableController({{ $item->id }})">
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $item->nama_perusahaan }}</strong><br/>
                        <small>Diajukan oleh: {{ $item->nama}}</small>
                    </td>
                    <td>{{ $item->layanan->nama_layanan }}</td>
                    <td>{{ $item->nomor_antrian }}</td>
                    <td>
                        @if ($item->status == 0)
                            <span class="badge badge-secondary text-dark">Mengantri</span>
                        @elseif ($item->status == 1)
                            <span class="badge badge-success">Selesai</span>
                        @endif
                    </td>
                    <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="{{ route('antrian.edit',$item->id) }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
