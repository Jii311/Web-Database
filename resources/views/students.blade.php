<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <table class="content-center w-full border-collapse table-auto">
        <caption class="text-black caption-top dark:text-white">
            Student Data
        </caption>
        <thead class="text-black border-b dark:text-white dark:border-gray-700">
            <tr>
                <th class="w-auto p-2 text-left border border-slate-600">No</th>
                <th class="w-auto p-2 text-left border border-slate-600">Name</th>
                <th class="w-auto p-2 text-left border border-slate-600">Grade</th>
                <th class="w-auto p-2 text-left border border-slate-600">Department</th>
                <th class="w-auto p-2 text-left border border-slate-600">Email</th>
                <th class="w-auto p-2 text-left border border-slate-600">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr class="text-black border-b dark:text-white dark:border-gray-700">
                    <th class="p-2 text-left border border-slate-600">{{ $student->id }}</th>
                    <th class="p-2 text-left border border-slate-600">{{ $student->name }}</th>
                    <th class="p-2 text-left border border-slate-600">{{ $student->grade->name }}</th>
                    <th class="p-2 text-left border border-slate-600">{{ $student->department->name }}</th>
                    <th class="p-2 text-left border border-slate-600">{{ $student->email }}</th>
                    <th class="p-2 text-left border border-slate-600">{{ $student->address }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
