@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4">
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Log Riwayat Diagnosa User</h1>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200">
                    <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Waktu</th>
                    <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Hasil Diagnosa</th>
                    <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500 text-center">Skor</th>
                    <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Gejala yang Dipilih</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($riwayat as $r)
                <tr>
                    <td class="px-6 py-4 text-sm text-slate-500 italic">
                        {{ $r->created_at->format('d M Y, H:i') }}
                    </td>
                    <td class="px-6 py-4 font-bold text-indigo-600 text-sm">
                        {{ $r->hasil_gangguan }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-bold">
                            {{ $r->skor_persen }}%
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-wrap gap-1">
                            @foreach($r->data_gejala as $g)
                            <span class="text-[10px] bg-slate-100 px-2 py-0.5 rounded text-slate-500 border border-slate-200" title="{{ $g['nama'] }}">
                                {{ $g['kode'] }} ({{ $g['nilaicf'] }})
                            </span>
                            @endforeach
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection