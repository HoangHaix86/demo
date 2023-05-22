@extends('Dashboard.layout')
@section('main')
    <div class="grid gap-8 p-4">
        <form action="{{ route('dashboard.dashboard.uploadImageHome') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="grid gap-4 p-4">
                <div>
                    <h2 class="text-center border-b-2 font-bold text-lg">Hình ảnh trang chủ</h2>
                </div>
                <input type="file" name="images[]" id="images" hidden multiple>
                <div class="text-center">
                    <label for="images" class="rounded-lg border-2 border-dashed px-4 py-2">Chọn hình</label>
                </div>
                <div id="preview" class="flex flex-wrap gap-2">
                    {{-- <img src="https://picsum.photos/200/300" alt="" class="w-56 h-80 rounded-lg object-cover"> --}}
                    @if ($files)
                        @for ($i = 0; $i < count($files); $i++)
                            <img src="{{ asset('storage/' . $files[$i]) }}" alt=""
                                class="w-56 h-80 rounded-lg object-cover" />
                        @endfor
                    @endif
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-500 px-4 py-2 rounded text-white">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {})
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        let preview = document.getElementById('preview');
        let overPreview = document.getElementById('overview-preview');
        let images = document.getElementById('images');
        let image = document.getElementById('image');
        images.onchange = (e) => {
            preview.innerHTML = '';
            for (let i = 0; i < images.files.length; i++) {
                let im = document.createElement('img');
                im.src = URL.createObjectURL(images.files[i]);
                im.classList.add('h-[300px]', 'w-[200px]', 'object-cover', 'rounded-lg');
                preview.appendChild(im);
                if (i > 10) break
            }
        }
        image.onchange = (e) => {
            overPreview.innerHTML = '';
            let im = document.createElement('img');
            im.src = URL.createObjectURL(image.files[0]);
            im.classList.add('h-[300px]', 'w-[200px]', 'object-cover', 'rounded-lg');
            overPreview.appendChild(im);
        }
    </script>
@endsection
