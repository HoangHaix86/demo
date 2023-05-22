@extends('Dashboard.layout')
@section('main')
    <div class="p-4">
        <div class="grid gap-4">
            <div class="flex justify-end items-center">
                <a href="{{ route('dashboard.gallery.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800
                    focus:ring-4 focus:ring-blue-300 font-medium
                    rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                    Thêm mới hình ảnh
                </a>
            </div>
        </div>
        <div class="flex gap-2 flex-wrap mx-auto" id="preview">
            @if ($galleries)
                @foreach ($galleries as $item)
                    <div class="w-[200px] h-[200px]">
                        <img loading="lazy" src="{{ asset('storage/' . $item->path) }}" alt=""
                            class="w-full h-full object-cover rounded-lg" />
                    </div>
                    {{-- <form action="{{ route('gallery.destroy', ['gallery' => $item->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Delete</button>
                    </form> --}}
                @endforeach
            @endif
        </div>
    </div>


@endsection
