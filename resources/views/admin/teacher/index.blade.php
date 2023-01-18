<x-admin-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::guard('admin')->user()->name }} || {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <table class="table-auto table-fixed">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Field</th>
                <th>Shift</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $teacher as $teachers)
                <tr>
                    <td>{{ $teachers->name }}</td>
                    <td>{{ $teachers->phone }}</td>
                    <td>{{ $teachers->email }}</td>
                    <td>{{ $teachers->address }}</td>
                    <td>{{ $teachers->filed }}</td>
                    <td>{{ $teachers->shift }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('admin.teacher.index') }}" method="post">
        <x-text-input type="date" ></x-text-input>
    </form>
</x-admin-layout>
