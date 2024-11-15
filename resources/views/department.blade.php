<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <table class="content-center w-full border-collapse table-auto">
        <caption class="caption-top">
            Department Data
        </caption>
        <thead class="">
            <tr>
                <th class="w-auto p-2 text-left border border-slate-600">No</th>
                <th class="w-auto p-2 text-left border border-slate-600">Department</th>
                <th class="w-auto p-2 text-left border border-slate-600">Department Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
                <tr class="">
                    <td class="p-2 text-left border border-slate-600">{{ $department->id }}</td>
                    <td class="p-2 text-left border border-slate-600">{{ $department->name }}</td>
                    <td class="p-2 text-left border border-slate-600">{{ $department->desc }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
