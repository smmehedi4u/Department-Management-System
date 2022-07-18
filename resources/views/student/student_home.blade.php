<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($today_class)
                    <div class="relative overflow-x-auto mb-5 shadow-md sm:rounded-lg">
                        <table class="w-full mb-5 text-sm text-left text-gray-500 ">
                            <caption><strong> Today Class </strong></caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">

                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Teacher
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Subject
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Day
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Start
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        End
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($today_class as $routine)
                                <tr class="bg-white border-b  ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                       {{ $routine->teacher_name }}
                                    </th>
                                    <td class="px-6 py-4">
                                    {{ $routine->sub_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                    {{ $routine->day }}
                                    </td>
                                    <td class="px-6 py-4">
                                    {{ $routine->from_time }}
                                    </td>
                                    <td class="px-6 py-4">
                                    {{ $routine->to_time }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        @endif
                        @if ($next_day_class)
                        <hr>

                        <div class="relative overflow-x-auto mb-5 shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <caption><strong>Next Day Class</strong></caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Teacher
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Subject
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Day
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Start
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        End
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($next_day_class as $routine)
                                <tr class="bg-white border-b  ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                       {{ $routine->teacher_name }}
                                    </th>
                                    <td class="px-6 py-4">
                                    {{ $routine->sub_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                    {{ $routine->day }}
                                    </td>
                                    <td class="px-6 py-4">
                                    {{ $routine->from_time }}
                                    </td>
                                    <td class="px-6 py-4">
                                    {{ $routine->to_time }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        @endif
                        @if ($pending_task)

                        <hr>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <caption><strong>Pending Task</strong></caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Subject
                                    </th>
                                    <th>Task</th>
                                    <th scope="col" class="px-6 py-3">
                                        Last Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pending_task as $pt)
                                <tr class="bg-white border-b  ">
                                    <td class="px-6 py-4">
                                    {{ $pt->sub_name }}
                                    </td>
                                    <td>{{ $pt->details }}</td>
                                    <td class="px-6 py-4">
                                    {{ $pt->end_date }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
