@foreach (session('flash_notification', collect())->toArray() as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else
        <div class="fixed top-0 left-0 right-0">
            <div class="mx-auto max-w-6xl text-center py-5 font-bold bg-white rounded-2xl">
                {!! $message['message'] !!}
            </div>
        </div>
{{--        <div class="alert--}}
{{--                    alert-{{ $message['level'] }}--}}
{{--                    {{ $message['important'] ? 'alert-important' : '' }}"--}}
{{--                    role="alert"--}}
{{--        >--}}
{{--            @if ($message['important'])--}}
{{--                <button type="button"--}}
{{--                        class="close"--}}
{{--                        data-dismiss="alert"--}}
{{--                        aria-hidden="true"--}}
{{--                >&times;</button>--}}
{{--            @endif--}}

{{--            {!! $message['message'] !!}--}}
{{--        </div>--}}

    @endif
@endforeach

{{ session()->forget('flash_notification') }}
