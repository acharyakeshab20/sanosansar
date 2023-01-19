<x-app-layout>
    <p></p>
    @if($orders->isNotEmpty())
       <ul>
          @foreach($orders as $order)
              <table>
                  <thead>
                    <tr>
                        <th>Craeted date</th>
                        <th>Updated Date</th>
                        <th>User Id</th>
                        <th>Order number</th>
                        <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <th>{{ $order->created_at }}</th>
                        <th>{{ $order->updated_at }}</th>
                        <th>{{ $order->name }}</th>
                        <th>{{ $order->order_number }}</th>
{{--                        <th>{{ $order->user->name }}</th>--}}
                    </tr>
                  </tbody>
              </table>
           @endforeach
       </ul>
    @else
        no data
    @endif
</x-app-layout>
