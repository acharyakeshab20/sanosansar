<x-app-layout>
    Order Details
    @if($OrderDetails->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>Sku</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Order number</th>
                    <th>Created Date</th>
                    <th>Shipping City</th>
                    <th>State</th>
                    <th>Address To Delivered</th>
                </tr>
            </thead>
            <tbody>
                @foreach($OrderDetails as $ord)
                        <tr>
                            <td> {{ $ord->sku }} </td>
                            <td>{{ $ord->name }}</td>
                            <td>{{ $ord->Buyer }}</td>
                            <td>{{ $ord->email }}</td>
                            <td>{{ $ord->order_number }}</td>
                            <td>{{ $ord->created_at }}</td>
                            <td>{{ $ord->city }}</td>
                            <td>{{ $ord->state }}</td>
                            <td>{{ $ord->home_address }}</td>
                        </tr>
{{--                    <tr>--}}
{{--                        <td>{{ $ord->products->sku }}</td>--}}
{{--                    </tr>--}}
                @endforeach
            </tbody>
        </table>
    @else
        djndkj
    @endif
</x-app-layout>
