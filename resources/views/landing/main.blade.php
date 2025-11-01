@extends('layouts.base')

@section('content')
    {{-- Banner / Hero Section --}}
    @include('landing.banner')

    {{-- Layanan Section --}}
    @include('landing.layanan')

    {{-- Tentang Kami Section --}}
    @include('landing.tentangkami')

    {{-- Kursus Section --}}
    @include('landing.kursus')

    {{-- Fun Fact Section --}}
    @include('landing.funfact')

    {{-- Tim Kami Section --}}
    @include('landing.timkami')

    {{-- Testimoni Section --}}
    @include('landing.testimoni')

    {{-- Katalog Section --}}
    @include('landing.katalog')

    {{-- Kontak Section --}}
    @include('landing.kontak')