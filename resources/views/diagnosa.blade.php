@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-8 bg-indigo-50 border-b border-indigo-100">
            <h1 class="text-2xl font-bold text-indigo-900">Mulai Diagnosa</h1>
            <p class="text-indigo-700">Pilih tingkat keyakinan Anda terhadap gejala yang muncul saat ini.</p>
        </div>

        @php
        // Definisi warna untuk tiap bobot
        $levels = [
        '0' => ['label' => 'Tidak', 'color' => 'peer-checked:bg-slate-500 peer-checked:border-slate-500'],
        '0.2' => ['label' => 'Kurang Yakin', 'color' => 'peer-checked:bg-orange-400 peer-checked:border-orange-400'],
        '0.4' => ['label' => 'Ragu-ragu', 'color' => 'peer-checked:bg-amber-400 peer-checked:border-amber-400'],
        '0.6' => ['label' => 'Yakin', 'color' => 'peer-checked:bg-emerald-500 peer-checked:border-emerald-500'],
        '1' => ['label' => 'Sangat Yakin', 'color' => 'peer-checked:bg-indigo-600 peer-checked:border-indigo-600'],
        ];
        @endphp
        <form action="/diagnosa" method="POST" class="p-8">
            @csrf
            <div class="space-y-6">
                @foreach($gejala as $index => $g)
                <div class="p-5 rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition-all">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-1">
                                <span class="px-2 py-1 bg-indigo-100 text-indigo-700 text-xs font-bold rounded-md uppercase tracking-wider">{{ $g->kode }}</span>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-800">{{ $g->nama }}</h3>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            @foreach($levels as $value => $data)
                            <label class="relative flex-1 min-w-[100px] cursor-pointer group">
                                <input type="radio" name="gejala[{{ $g->id }}]" value="{{ $value }}" class="hidden peer" {{ $value == 0 ? 'checked' : '' }}>
                                <div class="text-center px-3 py-2 rounded-xl border-2 border-slate-100 bg-slate-50 text-slate-500 transition-all peer-checked:text-white {{ $data['color'] }} group-hover:border-slate-300 flex flex-col justify-center">
                                    <!-- Label -->
                                    <div class="text-xs font-bold leading-tight min-h-[2.5em] flex items-center justify-center">
                                        {{ $data['label'] }}
                                    </div>
                                    <!-- CF -->
                                    <div class="text-[10px] opacity-70 font-normal mt-0.5">
                                        CF: {{ $value }}
                                    </div>
                                </div>

                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-10 flex justify-center">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-10 py-4 rounded-xl font-bold shadow-lg shadow-indigo-200 transition-all flex items-center gap-2">
                    <i class="fas fa-search"></i> Analisis Gangguan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection