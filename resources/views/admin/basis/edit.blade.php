@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mb-6">
        <a href="{{ route('basis.index') }}" class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center gap-2 text-sm transition-colors">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-6 border-b border-slate-100 bg-slate-50/50">
            <h1 class="text-xl font-bold text-slate-800">Edit Nilai Kepastian Pakar</h1>
            <p class="text-sm text-slate-500 mt-1">Sesuaikan bobot keyakinan untuk aturan diagnosa ini.</p>
        </div>

        <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="p-4 bg-indigo-50 rounded-xl border border-indigo-100">
                    <span class="text-[10px] font-bold text-indigo-600 uppercase tracking-widest block mb-1">Gangguan</span>
                    <h3 class="text-sm font-bold text-slate-800 leading-tight">{{ $basisPengetahuan->gangguan->nama }}</h3>
                    <p class="text-xs text-indigo-500 font-mono mt-1">{{ $basisPengetahuan->gangguan->kode }}</p>
                </div>
                <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-1">Gejala</span>
                    <h3 class="text-sm font-medium text-slate-700 leading-tight">{{ $basisPengetahuan->gejala->nama }}</h3>
                    <p class="text-xs text-slate-400 font-mono mt-1">{{ $basisPengetahuan->gejala->kode }}</p>
                </div>
            </div>

            <form action="{{ route('basis.update', $basisPengetahuan) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-8">
                    <label for="cf_pakar" class="block text-sm font-bold text-slate-700 mb-2">
                        Nilai Certainty Factor (CF) Pakar
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            step="0.01"
                            min="0"
                            max="1"
                            name="cf_pakar"
                            id="cf_pakar"
                            value="{{ $basisPengetahuan->cf_pakar }}"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all outline-none text-lg font-semibold text-slate-800"
                            placeholder="0.00"
                            required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400 text-xs">
                            Rentang 0 - 1.0
                        </div>
                    </div>
                    <p class="mt-3 text-xs text-slate-500 leading-relaxed italic">
                        *Nilai ini menunjukkan seberapa besar keyakinan seorang pakar bahwa gejala tersebut merujuk pada gangguan ini.
                    </p>
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-xl shadow-lg shadow-indigo-100 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-save"></i> Simpan Perubahan
                    </button>
                    <a href="{{ route('basis.index') }}" class="px-6 py-3 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold rounded-xl transition-all">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection