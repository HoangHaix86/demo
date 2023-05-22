@extends('Dashboard.layout')
@section('main')
    <div class="p-4">
        <form action="{{ route('dashboard.gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="gird gap-4">
                <div class="text-center">
                    <label for="images"
                        class="inline-block text-black focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 border-dashed border-2">Chọn
                        hình ảnh</label>
                    <input accept="image/*" type="file" name="images[]" id="images" multiple hidden>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Tải
                        lên</button>
                </div>
            </div>
        </form>
        <div class="flex gap-2 flex-wrap mx-auto" id="preview"></div>
    </div>
    <script>
        let images = document.getElementById('images');
        let preview = document.getElementById('preview');
        images.onchange = (e) => {
            preview.innerHTML = '';
            for (let i = 0; i < images.files.length; i++) {
                let div = document.createElement('div');
                div.classList.add('w-[200px]', 'h-[200px]', 'rounded-lg');
                let im = document.createElement('img');
                im.src = URL.createObjectURL(images.files[i]);
                im.classList.add('h-full', 'w-full', 'object-cover', 'rounded-lg');
                div.appendChild(im);
                preview.appendChild(div);
                if (i > 10) break
            }
        }
    </script>
@endsection
