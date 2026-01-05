<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Gangguan;
use App\Models\BasisPengetahuan;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();
        return view('diagnosa', compact('gejala'));
    }

    public function proses(Request $request)
    {
        $inputGejala = array_filter($request->gejala, fn($v) => $v > 0);
        $daftarGangguan = Gangguan::all();
        $hasil = [];

        foreach ($daftarGangguan as $gangguan) {
            $rules = BasisPengetahuan::where('gangguan_id', $gangguan->id)
                ->whereIn('gejala_id', array_keys($inputGejala))->get();

            $cfCombine = 0;
            foreach ($rules as $key => $rule) {
                $cfUser = $inputGejala[$rule->gejala_id];
                $cfHE = $rule->cf_pakar * $cfUser;

                if ($key == 0) {
                    $cfCombine = $cfHE;
                } else {
                    $cfCombine = $cfCombine + ($cfHE * (1 - $cfCombine));
                }
            }

            if ($cfCombine > 0) {
                $hasil[] = [
                    'nama' => $gangguan->nama,
                    'definisi' => $gangguan->definisi,
                    'skor' => round($cfCombine, 4) * 100
                ];
            }
        }

        usort($hasil, fn($a, $b) => $b['skor'] <=> $a['skor']);
        return view('hasil', compact('hasil'));
    }
}
