@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto text-center">
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-12">
        <h1 class="text-4xl font-bold text-indigo-900 mb-6">Selamat Datang di SiPakTernet</h1>
        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
            Sistem Pakar Diagnosa Gangguan Jaringan Internet adalah aplikasi berbasis web yang dirancang untuk membantu Anda mengidentifikasi jenis gangguan jaringan internet berdasarkan gejala yang dialami. Sistem ini menggunakan metode Certainty Factor (CF) untuk menangani tingkat ketidakpastian dalam proses diagnosis.
        </p>
        <p class="text-slate-500 mb-10">
            Dibuat sebagai Tugas Akhir mata kuliah Expert System - Program Studi Sistem Informasi.
        </p>
        <a href="/diagnosa" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-xl font-bold shadow-lg shadow-indigo-200 transition-all inline-flex items-center gap-2">
            <i class="fas fa-search"></i> Mulai Diagnosa
        </a>
    </div>
</div>
@endsection
