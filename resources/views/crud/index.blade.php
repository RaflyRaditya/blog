@extends('layout')
@section('content')
<div class="bg-red-100">
    <div class="max-w-7xl mx--auto bg-white flex flex-col px-10 min-h-screen py-10 gap-10">
</div>
<table>
    <tr>
        <th class="px-4 py-2 border">No</th>
        <th class="px-4 py-2 border">Judul</th>
        <th class="px-4 py-2 border">Konten</th>
        <th class="px-4 py-2 border">Aksi</th>
    </tr>
    @@forelse ($konten as $index => $item)
    <tr>

        <th class="px-4 py-2 border">{{ $index + 1 }}</th>
        <th class="px-4 py-2 border">{{ $item->Judul}}</th>
        <th class="px-4 py-2 border">{{ $item->konten}}</th>
        <th class="px-4 py-2 border">
            <div>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </div>
        </th>
            
        @empty
    </tr>

    <tr>
        <th colspan="12" class="px-4 py-2 border">Tidak Ada Konten</th>
    </tr>
    @endforelse
</table>
    
@endsection