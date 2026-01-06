@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-6">
        <a href="/diagnosa" class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center gap-2 text-sm">
            <i class="fas fa-arrow-left"></i> Kembali ke Diagnosa
        </a>
    </div>

    @if(count($hasil) > 0)
    <div class="bg-white rounded-2xl shadow-xl border border-indigo-100 overflow-hidden mb-8">
        <div class="bg-indigo-600 p-6 text-center text-white">
            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check-circle text-3xl text-white"></i>
            </div>
            <h2 class="text-sm uppercase tracking-widest font-bold opacity-80">Hasil Diagnosa Terkuat</h2>
            <h1 class="text-3xl font-black mt-1">{{ $hasil[0]['nama'] }}</h1>
        </div>

        <div class="p-8">
            <div class="flex justify-between items-end mb-2">
                <span class="text-slate-500 font-medium">Tingkat Keyakinan</span>
                <span class="text-2xl font-bold text-indigo-600">{{ $hasil[0]['skor'] }}%</span>
            </div>
            <div class="w-full bg-slate-100 rounded-full h-4 mb-8">
                <div class="bg-indigo-600 h-4 rounded-full" style="width: {{ $hasil[0]['skor'] }}%"></div>
            </div>

            <div class="bg-slate-50 rounded-xl p-5 border border-slate-100">
                <h3 class="font-bold text-slate-800 flex items-center gap-2 mb-2">
                    <i class="fas fa-info-circle text-indigo-500"></i> Definisi Masalah
                </h3>
                <p class="text-slate-600 leading-relaxed italic">
                    "{{ $hasil[0]['definisi'] }}"
                </p>
            </div>
        </div>
    </div>

    <div x-data="{ open: false }" class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden mb-6">
        <button @click="open = !open" class="w-full p-4 flex justify-between items-center hover:bg-slate-50 transition-colors">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-slate-100 rounded-lg flex items-center justify-center text-slate-500">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <span class="font-bold text-slate-700 text-sm">Lihat Gejala yang Anda Pilih</span>
                <span class="bg-indigo-100 text-indigo-600 px-2 py-0.5 rounded-md text-[10px] font-bold">{{ count($inputUserTerpilih) }} Gejala</span>
            </div>
            <i class="fas fa-chevron-down text-slate-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''"></i>
        </button>

        <div x-show="open" x-collapse x-cloak class="border-t border-slate-100 p-4 bg-slate-50/50">
            <div class="grid gap-2">
                @foreach($inputUserTerpilih as $item)
                <div class="flex items-center justify-between bg-white p-3 rounded-lg border border-slate-100 shadow-sm">
                    <div class="flex flex-col">
                        <span class="text-[10px] font-bold text-indigo-500">{{ $item['kode'] }}</span>
                        <span class="text-sm text-slate-700 font-medium">{{ $item['nama'] }}</span>
                    </div>
                    <span class="text-[10px] font-bold px-2 py-1 rounded-md
                        {{ $item['nilaicf'] == 1 ? 'bg-indigo-600 text-white' : 'bg-slate-200 text-slate-600' }}">
                        {{ $item['label'] }}
                    </span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @if(count($hasil) > 1)
    <div class="mt-10">
        <h3 class="text-lg font-bold text-slate-800 mb-4 px-2">Kemungkinan Lainnya</h3>
        <div class="grid gap-3">
            @foreach(array_slice($hasil, 1) as $h)
            <div class="bg-white p-4 rounded-xl border border-slate-200 flex justify-between items-center shadow-sm">
                <span class="font-medium text-slate-700">{{ $h['nama'] }}</span>
                <span class="bg-slate-100 px-3 py-1 rounded-lg text-slate-600 font-bold text-sm">{{ $h['skor'] }}%</span>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    @else
    <div class="bg-white rounded-2xl p-12 text-center shadow-sm border border-slate-200">
        <i class="fas fa-question-circle text-6xl text-slate-200 mb-4"></i>
        <h2 class="text-xl font-bold text-slate-800">Tidak Ada Diagnosa</h2>
        <p class="text-slate-500">Gejala yang Anda masukkan tidak cukup untuk menentukan jenis gangguan.</p>
    </div>
    @endif
</div>
@endsection
