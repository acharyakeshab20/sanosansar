<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::guard('admin')->user()->name }} || {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="container mx-auto max-w-6xl bg-white p-10 mt-6 rounded-3xl">
            <div class="grid grid-cols-2 grid rows-2 gap-4">

                @if(!empty($studnet->image))
                    @foreach($studnet->image as $img)

                        {{--                    @if($img->extension = 'pdf')--}}
                        {{--                    <embed src="{{ url('image/admin/'.$img) }}">--}}
                        {{--                    <a href="{{ url('image/admin/'.$img) }}">--}}
                        {{--                        PDF FILE--}}
                        {{--                    </a>--}}
                        <a href="{{ url('image/admin/'.$img) }}" target="_blank">{{ url('image/admin/'.$img) }}</a>
                        {{--                        <embed src="{{ url('image/admin/'.$img-) }}">--}}
                        {{--                    </a>--}}
                        {{--                    <iframe src="{{ url('/image/admin/'.$img) }}#toolbar=0" width="100%" height="300px"></iframe>--}}
                        {{--                         <iframe src="{{ url('image/admin/'.$img) }}"></iframe>--}}
                        {{--                    @elseif($img->extension = 'png')--}}
                        {{--                        <img src="{{ url('/image/admin/'.$img) }}" alt="user image" width="500" height="500">--}}
                        {{--                    @endif--}}
                    @endforeach
                @else
                        <div class="container mx-auto max-w-6xl">
                            <h2 class="text-center">File Not found</h2>
                        </div>
                @endif
            </div>
    </div>
</x-admin-layout>
