<x-app-layout>
        @if($product->isNotEmpty())
                @foreach($product as $P)
                    {{ $P->sku }}
                    {{ $P->name }}
                    {{ $P->created_at }}
               @endforeach
        @else

        @endif
</x-app-layout>
