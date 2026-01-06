@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800 tracking-tight">Management Basis Pengetahuan</h1>
            <p class="text-sm text-slate-500 mt-1">Kelola relasi antara gejala, gangguan, dan bobot Certainty Factor (CF).</p>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200">
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Gangguan</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Gejala</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 text-center">CF Pakar</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($basis as $item)
                    <tr class="hover:bg-slate-50/80 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold text-slate-800">{{ $item->gangguan->nama }}</span>
                                <span class="text-[10px] text-indigo-500 font-bold uppercase tracking-tighter">{{ $item->gangguan->kode }}</span>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-sm text-slate-600 leading-relaxed">
                            <div class="flex items-start gap-2">
                                <span class="bg-slate-100 text-slate-500 text-[10px] px-1.5 py-0.5 rounded font-bold mt-0.5">{{ $item->gejala->kode }}</span>
                                <span>{{ $item->gejala->nama }}</span>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100 italic">
                                {{ number_format($item->cf_pakar, 1) }}
                            </span>
                        </td>

                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end items-center">
                                <a href="{{ route('basis.edit', $item) }}" class="p-2 text-indigo-600 hover:bg-indigo-50 rounded-lg transition-colors" title="Edit Data">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 bg-slate-50 border-t border-slate-200">
            <span class="text-xs text-slate-500 font-medium italic">Total {{ count($basis) }} Aturan Pengetahuan terdaftar dalam sistem.</span>
        </div>
    </div>
</div>
@endsection