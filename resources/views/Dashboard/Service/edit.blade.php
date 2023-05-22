@extends('Dashboard.layout')
@section('main')
    <form action="{{ route('dashboard.services.update', ['service' => $service->id]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="grid gap-4 p-4">
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tiêu đề</label>
                <input type="text" id="title" name="title" value="{{ $service->title }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required>
            </div>
            <div>
                <label for="images" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hình ảnh</label>
                <input accept="image/*" type="file" name="images[]" id="images" multiple hidden>
                <div class="flex gap-4 flex-wrap" id="preview">
                    @if ($service->images)
                        @foreach ($service->images as $item)
                            <img src="{{ asset('storage/' . $item) }}" alt=""
                                class="w-[200px] h-[300px] object-cover rounded-lg">
                        @endforeach
                    @endif
                    {{-- <img src="https://picsum.photos/200/300" alt="" class="w-[200px] h-[300px] object-cover rounded-lg"> --}}
                    <label for="images" id="preview-demo"
                        class="w-[200px] h-[300px] rounded-lg bg-gray-300 flex items-center justify-center">
                        <p class="select-none font-bold">Thêm ảnh</p>
                    </label>
                </div>
            </div>

            <div>
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nội
                    dung</label>
                <textarea name="content" id="content">
                    {{ $service->content }}
                </textarea>
            </div>
            <div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Upload</button>
            </div>
        </div>
    </form>
    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {})
            .catch(error => {
                console.error(error);
            });

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
