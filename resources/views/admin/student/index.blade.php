<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::guard('admin')->user()->name }} || {{ __('Dashboard') }}
        </h2>
    </x-slot>

{{--    <div class="max-w-7xl mx-auto bg-gray-200 py-10">--}}
{{--       <div class="grid grid-cols-3 divide-x px-6 gap-6 mb-4">--}}
{{--               <div class="bg-red-600">keshab</div>--}}
{{--               <div class="bg-gray-100">ram</div>--}}
{{--               <div class="bg-pink-600">kk</div>--}}
{{--       </div>--}}
{{--        <div class="grid grid-cols-3 divide-x px-6 gap-6 mb-4">--}}
{{--            <div class="bg-red-600">keshab</div>--}}
{{--            <div class="bg-gray-100">ram</div>--}}
{{--            <div class="bg-pink-600">kk</div>--}}
{{--        </div>--}}
{{--        <div class="grid grid-cols-3 divide-x px-6 gap-6">--}}
{{--            <div class="bg-red-600">keshab</div>--}}
{{--            <div class="bg-gray-100">ram</div>--}}
{{--            <div class="bg-pink-600">kk</div>--}}
{{--        </div>--}}
{{--    </div>--}}
    @if($studnet->isNotEmpty())
        <div class="container mx-auto max-w-7xl">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg pb-3">
                <table class="w-full table-auto text-sm text-left text-gray-500 dark:text-gray-400 mb-3">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                         <tr>
                            <th>Name</th>
                            <th>address</th>
                            <th>Phone</th>
                            <th>Image</th>
                        </tr>
                     </thead>
                     <tbody>
                    @foreach($studnet as $lang)
                        <tr>
                            <td>{{ $lang->name }}</td>
                            <td>{{ $lang->address }}</td>
                            <td>{{ $lang->phone }}</td>
                            <td>
{{--                                @foreach($lang->image as $img)--}}
{{--                                    <embed src="{{ url('/image/admin/'.$img) }}"/>--}}

{{--                                @endforeach--}}
                                <a href="{{ route('admin.student.show',$lang->id) }}">View Data</a>
{{--                                <a href="{{ url('/image/admin/'.$lang->thumbnails) }}" target="_blank"> <span class="bg-black rounded px-4">View File</span> </a>--}}
{{--                                 <img src="{{ url('/image/admin/'.$lang->thumbnails) }}" width="200" height="200">--}}
{{--                                <iframe src="{{ url('/image/admin/'.$lang->thumbnails) }}#toolbar=0" width="100%" height="300px">--}}
{{--                                <a href="{{ url('/image/admin/'.$lang->thumbnails) }}" target="_blank"  class="rounded-full w-20 h-20">PDF File</a>--}}
                            </td>
                        </tr><br>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    @endif
    <div class="container mx-auto max-w-6xl bg-white p-10 mt-6 rounded-3xl">
        <form action="{{ route('admin.student.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-3 grid rows-3 gap-6">
                <div>
                    <x-input-label>Name</x-input-label>
                    <x-text-input class="w-full py-2" placeholder="enter your name" id="name" type="text" name="name"></x-text-input>
                    <x-input-error :messages="$errors->get('name')"></x-input-error>
                    {{--                <x-input-error :messages="$errors->get('name')"></x-input-error>--}}
                </div>
                <div>
                    <x-input-label>Address</x-input-label>
                    <x-text-input class="w-full py-2" placeholder="enter your address" id="address" type="text" name="address"></x-text-input>
                    <x-input-error :messages="$errors->get('address')"></x-input-error>
                </div>
                <div>
                    <x-input-label>Phone</x-input-label>
                    <x-text-input class="w-full py-2" placeholder="enter your Phone" id="phone" type="text" name="phone"></x-text-input>
                    <x-input-error :messages="$errors->get('phone')"></x-input-error>
                </div>
            </div>
            <div class="grid grid-cols-3 grid rows 3 gap-6 ">
                <div></div>
{{--                <div>--}}
{{--                    <x-input-label class="mt-6">Image</x-input-label>--}}
{{--                    <x-text-input class="py-2 w-full" id="image" type="file" name="image[]" multiple></x-text-input>--}}
{{--                    <x-input-error :messages="$errors->get('image')"></x-input-error>--}}
{{--                </div>--}}
                <div>
                    <x-input-label class="mt-6">Image</x-input-label>
                    <x-text-input class="py-2 w-full" id="image" type="file" name="image[]" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" multiple></x-text-input>
                    <x-input-error :messages="$errors->get('image')"></x-input-error>
                </div>
                <div></div>
            </div>
            <div class="grid grid-cols-3 grid-rows-3 gap-6">
                <div></div>
                <div class="row-span-2 col-span-1">
{{--                    <x-secondary-button>--}}
{{--                        {{ __(' Submit') }}--}}
{{--                    </x-secondary-button>--}}
                    <x-primary-button>
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
                <div></div>
            </div>
        </form>
    </div>
</x-admin-layout>
