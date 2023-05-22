@extends('Dashboard.layout')
@section('main')
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    <form action="{{ route('dashboard.accommodations.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="grid gap-4 p-4">
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tiêu đề <span
                        class="text-red-600">(*)</span></label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required>
                @error('title')
                    <p class="text-red-600"><i>{{ $message }}</i></p>
                @enderror
            </div>
            <div class="grid gap-4 md:grid md:grid-cols-3 md:gap-4">
                <div>
                    <label for="room_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số
                        phòng <span class="text-red-600">(*)</span></label>
                    <input type="text" name="room_number" id="room_number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 required">
                    @error('room_number')
                        <p class="text-red-600"><i>{{ $message }}</i></p>
                    @enderror
                </div>
                <div>
                    <label for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diện
                        tích <span class="text-red-600">(*)</span></label>
                    <input type="text" name="area" id="area"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 required">
                    @error('area')
                        <p class="text-red-600"><i>{{ $message }}</i></p>
                    @enderror
                </div>
                <div>
                    <label for="bed_size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kích thước
                        giường <span class="text-red-600">(*)</span></label>
                    <input type="text" name="bed_size" id="bed_size"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 required">
                    @error('bed_size')
                        <p class="text-red-600"><i>{{ $message }}</i></p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Địa chỉ <span
                        class="text-red-600">(*)</span></label>
                <input type="text" name="address" id="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 required">
                @error('address')
                    <p class="text-red-600"><i>{{ $message }}</i></p>
                @enderror
            </div>
            <div>
                <label for="images" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hình ảnh <span
                        class="text-red-600">(*)</span></label>
                <input accept="image/*" type="file" name="images[]" id="images" multiple hidden>
                <div class="flex gap-4 flex-wrap" id="preview">
                    {{-- <img src="https://picsum.photos/200/300" alt="" class="w-[200px] h-[300px] object-cover rounded-lg"> --}}
                    <label for="images" id="preview-demo"
                        class="w-[200px] h-[300px] rounded-lg bg-gray-300 flex items-center justify-center">
                        <p class="select-none font-bold">Thêm ảnh</p>
                    </label>
                </div>
                @error('images')
                    <p class="text-red-600"><i>{{ $message }}</i></p>
                @enderror
            </div>

            <div>
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nội dung <span
                        class="text-red-600">(*)</span></label>
                <textarea name="content" id="content" class="w-full"></textarea>
            </div>
            <div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Upload</button>
            </div>
        </div>
    </form>
    <script src="{{ asset('ckeditor4/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
    <script>
        let preview = document.getElementById('preview');
        let images = document.getElementById('images');
        let previewDemo = document.getElementById('preview-demo');
        images.onchange = (e) => {
            for (let i = 0; i < e.target.files.length; i++) {
                let im = document.createElement('img');
                im.src = URL.createObjectURL(e.target.files[i]);
                im.classList.add('w-[200px]', 'h-[300px]', 'object-cover', 'rounded-lg');
                preview.insertBefore(im, previewDemo);
                if (i > 10) break
            }
        }
    </script>
@endsection
