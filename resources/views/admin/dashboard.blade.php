<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{ Auth::guard('admin')->user()->name }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <x-primary-button>
                        Delete
                    </x-primary-button>
                    <x-secondary-button>
                        Submit
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="py-12 ">--}}
{{--        <div class="container mx-auto bg-gray-50 py-6 px-6 rounded">--}}
{{--            <div class="grid grid-col-3 divide-amber-50">--}}
{{--                <div class="bg-indigo-50">--}}
{{--                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolor fuga nemo vel voluptate. Ab adipisci beatae dolores dolorum ea facilis fuga, harum id, inventore itaque provident ratione ullam voluptatem!--}}
{{--                </div>--}}
{{--                <div>keshab</div>--}}
{{--            </div>--}}
{{--            <div class="grid grid-cols-3 divide-amber-100">--}}
{{--                <div class="bg-red-600 rounded">--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est id repellendus sit voluptas. Ab, architecto aspernatur consequuntur cumque deserunt dolore eum incidunt magni minus non perspiciatis saepe suscipit? Nisi, sapiente?--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid consequatur deleniti esse facilis fugiat ipsam magnam molestiae nam nemo nulla officia omnis praesentium, quia, quidem sequi totam ut veniam!keshab--}}
{{--                </div>--}}
{{--                <div class="bg-green-300">ram</div>--}}
{{--                <div class="bg-pink-600">hari</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto">--}}
{{--            kesjn--}}
{{--        </div>--}}
{{--        <div class="max-w-7xl mx-auto bg-red-200 py-8 px-8 rounded-bl-lg">--}}
{{--            Ram--}}
{{--        </div>--}}
{{--        <div class="max-w-7xl mx-auto rounded">--}}
{{--            <div class="grid grid-cols-3 divide-amber-100">--}}
{{--                <div class="bg-red-600 rounded">--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est id repellendus sit voluptas. Ab, architecto aspernatur consequuntur cumque deserunt dolore eum incidunt magni minus non perspiciatis saepe suscipit? Nisi, sapiente?--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid consequatur deleniti esse facilis fugiat ipsam magnam molestiae nam nemo nulla officia omnis praesentium, quia, quidem sequi totam ut veniam!keshab--}}
{{--                </div>--}}
{{--                <div class="bg-green-300">ram</div>--}}
{{--                <div class="bg-pink-600">hari</div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
</x-admin-layout>
