<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <table class="content-center w-full border-collapse table-auto">
        <caption class="text-black caption-top dark:text-white">
            Grade Data
        </caption>
        <thead class="text-black border-b dark:text-white dark:border-gray-700">
            <tr>
                <th class="w-auto p-2 text-left border border-slate-600">No</th>
                <th class="w-auto p-2 text-left border border-slate-600">Grade</th>
                <th class="w-auto p-2 text-left border border-slate-600">Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
                <tr class="text-black border-b dark:text-white dark:border-gray-700">
                    <td class="p-2 text-left border border-slate-600">{{ $grade->id }}</td>
                    <td class="p-2 text-left border border-slate-600">{{ $grade->name }}</td>
                    <td class="p-2 text-left border border-slate-600">{{ $grade->department->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>

