<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <table class="content-center w-full border-collapse table-auto">
        <caption class="caption-top">
            Grade Data
        </caption>
        <thead class="">
            <tr>
                <th class="w-auto p-2 text-left border border-slate-600">No</th>
                <th class="w-auto p-2 text-left border border-slate-600">Grade</th>
                <th class="w-auto p-2 text-left border border-slate-600">Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
                <tr class="">
                    <td class="p-2 text-left border border-slate-600">{{ $grade->id }}</td>
                    <td class="p-2 text-left border border-slate-600">{{ $grade->name }}</td>
                    <td class="p-2 text-left border border-slate-600">{{ $grade->department->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
