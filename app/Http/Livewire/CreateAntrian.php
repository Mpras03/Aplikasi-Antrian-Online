<?php

namespace App\Http\Livewire;

use App\Models\Antrian;
use App\Models\Layanan;
use Livewire\Component;

class CreateAntrian extends Component
{
    public $antrian;
    public $antrianId;
    public $layananOption;
    public $action;
    public $button;

    protected function getRules()
    {

        return [
            'antrian.nama'            => 'required',
            'antrian.nama_perusahaan' => 'required',
            'antrian.nomor_antrian'   => 'required',
            'antrian.layanan_id'      => 'required',
            'antrian.status'          => 'required',
        ];
    }

    public function createAntrian ()
    {
    }

    public function updateAntrian ()
    {
        $this->resetErrorBag();
        $this->validate();
        Antrian::query()
            ->where('id', $this->antrianId)
            ->update([
                "nama" => $this->antrian->nama,
                "nama_perusahaan" => $this->antrian->nama_perusahaan,
                "nomor_antrian" => $this->antrian->nomor_antrian,
                "layanan_id" => $this->antrian->layanan_id,
                "status" => $this->antrian->status,
            ]);
        redirect(route('antrian'));
        $this->emit('saved');
    }

    public function mount ()
    {
        if (!$this->antrian && $this->antrianId) {
            $this->antrian = Antrian::find($this->antrianId);
        }
        $this->layananOption = Layanan::get();
        $this->button = $this->create_button($this->action, "Antrian");
    }

    function create_button ($action, $model)
    {
        $action = str_replace($model, "", $action);

        return [
            'submit_text' => ($action == "update") ? "Perbarui" : "Simpan",
            'submit_response' => ($action == "update") ? "Diperbarui." : "Disimpan.",
            'submit_response_notyf' => ($action == "update") ?
                "Data ".$model." Berhasil diperbarui" : "Data ".$model." Berhasil ditambahkan"
        ];
    }

    public function render()
    {
        return view('livewire.create-antrian');
    }
}
