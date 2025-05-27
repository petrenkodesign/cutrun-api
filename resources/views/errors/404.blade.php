@extends('layouts.app')

@section('title', 'Cut&Run 404 - Сторінку не знайдено')

@section('content')
<div class="flex flex-col items-center justify-center text-[#333] min-h-[92vh]">
    <img
        src="/img/404.png"
        alt="404 Not Found"
        class="max-w-[300px] mb-5"
    />
    <h1 class="text-3xl font-bold mb-5">Сторінку не знайдено</h1>
    <a
        href="/"
        class="inline-block px-5 py-2.5 bg-[#007acc] hover:bg-[#005f99] !text-white !text-base rounded transition-colors duration-300 no-underline"
    >
        На головну
    </a>
</div>
@endsection