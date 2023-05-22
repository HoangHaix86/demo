@extends('Dashboard.layout')
@section('main')
    <div class="p-4">
        <form action="{{ route('dashboard.explores.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="grid gap-4">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tiêu đề</label>
                    <input type="text" id="title" name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div>
                    <label for="thumbnail"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thumbnail</label>
                    <input accept="image/*" type="file" name="thumbnail" id="thumbnail" hidden>
                    <label for="thumbnail"
                        class="mt-2 inline-block py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border-2 border-dashed border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
                        Thêm ảnh
                    </label>
                </div>
                <div>
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nội
                        dung</label>
                    <textarea name="content" id="content"></textarea>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700
                    hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                    font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Tạo
                    mới</button>
            </div>

        </form>
    </div>
    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                ckfinder: {
                    uploadUrl: '{{ route('dashboard.ckeditor.upload') . '?_token=' . csrf_token() }}'
                }
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        function insertAfter(newNode, existingNode) {
            existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
        }
        let thumb = document.getElementById('thumbnail');
        thumb.onchange = (e) => {
            // remove pre element
            let pre = document.querySelector('.img-preview');
            if (pre) {
                pre.remove();
            }

            // create img element
            let img = document.createElement('img');
            img.src = URL.createObjectURL(e.target.files[0]);
            img.classList.add('object-cover', 'h-[200px]', 'rounded-lg', 'img-preview');
            insertAfter(img, thumb);
        }
    </script>
@endsection
