<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <table class="content-center w-full border-collapse table-auto">
        <caption class="text-black caption-top dark:text-white">
            Department Data
        </caption>
        <thead class="text-black border-b dark:text-white dark:border-gray-700">
            <tr>
                <th class="w-auto p-2 text-left border border-slate-600">No</th>
                <th class="w-auto p-2 text-left border border-slate-600">Department</th>
                <th class="w-auto p-2 text-left border border-slate-600">Department Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
                <tr class="text-black border-b dark:text-white dark:border-gray-700">
                    <td class="p-2 text-left border border-slate-600">{{ $department->id }}</td>
                    <td class="p-2 text-left border border-slate-600">{{ $department->name }}</td>
                    <td class="p-2 text-left border border-slate-600">{{ $department->desc }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
