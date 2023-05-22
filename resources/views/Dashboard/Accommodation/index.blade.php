@extends('Dashboard.layout')
@section('main')
    <div class="p-4">
        <div class="flex justify-end">
            <a href="{{ route('dashboard.accommodations.create') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Tạo
                mới
            </a>
        </div>
    </div>
    <table class="w-full">
        <thead class="bg-white shadow-lg">
            <tr>
                <th align="left" class="py-2 px-4">Tiêu đề</th>
                <th class="py-2 px-4">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @if ($accommodations)
                @foreach ($accommodations as $item)
                    <tr class="border-b">
                        <td class="py-2 px-4">{{ $item->title }}</td>
                        <td class="flex gap-4 items-center justify-center py-2 px-4">
                            {{-- Edit --}}
                            <a href="{{ route('dashboard.accommodations.edit', ['accommodation' => $item->id]) }}"
                                class="text-blue-600 font-bold">Chỉnh sửa</a>
                            {{-- Delete --}}
                            <form action="{{ route('dashboard.accommodations.destroy', ['accommodation' => $item->id]) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-600 font-bold">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>


@endsection
