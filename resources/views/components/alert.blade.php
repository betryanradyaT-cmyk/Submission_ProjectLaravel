@props(['tipe' => 'info'])

@php
    $warna = ['sukses' => 'green', 'bahaya' => 'red', 'info' => 'blue'][$tipe] ?? 'blue';
@endphp

<div {{ $attributes->merge(['style' => "border:1px solid $warna; color:$warna; padding:8px; margin:8px 0;"]) }}>
    {{ $slot }}
</div>