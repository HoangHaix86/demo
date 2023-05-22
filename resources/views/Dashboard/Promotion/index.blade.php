@extends('Dashboard.layout')
@section('main')
    <div class="p-4">
        <div class="flex justify-end">
            <a href="{{ route('dashboard.promotions.create') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Tạo
                mới
            </a>
        </div>
        <table class="w-full">
            <thead class="bg-white shadow-lg">
                <tr>
                    <th align="left" class="py-2 px-4">Tiêu đề</th>
                    <th class="py-2 px-4">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @if ($promotions)
                    @foreach ($promotions as $item)
                        <tr class="border-b">
                            <td class="py-2 px-4">{{ $item->title }}</td>
                            <td class="flex gap-4 items-center justify-center py-2 px-4">
                                <a href="{{ route('dashboard.promotions.edit', ['promotion' => $item->id]) }}"
                                    class="text-blue-600 font-bold">Edit</a>
                                <form action="{{ route('dashboard.promotions.destroy', ['promotion' => $item->id]) }}" method="post">
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
    </div>

@endsection
