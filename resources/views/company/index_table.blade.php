@extends('layouts.app')

@section('cabecera-section')
Listado de empresas
@endsection

@section('content')
<div class=" flex justify-center mx-auto py-6 max-w-5xl">
    <table class="divide-y divide-gray-300 ">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-2 text-xs text-gray-500">
                    ID
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Categoria
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Nombre
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Descripción breve
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Edit
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Delete
                </th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-300">
            @foreach($companies as $company)
            <tr class="whitespace-nowrap">
                <td class="px-6 py-4 text-sm text-gray-500">
                    {{ $company->id }}
                </td>
                <td class="px-6 py-4"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $company->category->name }}</span></td>
                <td>{{ $company->name }}</td>
                <td>{{ \Illuminate\Support\Str::limit($company->short_description, 50, $end='...') }}</td>
                <td class="px-6 py-4">
                    <a href="{{ route('company.show', $company->id)}}" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection