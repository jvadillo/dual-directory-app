@extends('layouts.app')

@section('cabecera-section')
Editar empresa
@endsection

@section('content')

<!-- Se ha utilizado como base el siguiente layout: https://tailwindui.com/components/application-ui/forms/form-layouts -->



<div class=" flex justify-center mx-auto py-6 max-w-5xl">
  <div class="mt-5 md:mt-0 md:w-2/3">
    <div class="px-4 py-4 sm:px-0">
      <h3 class="text-lg font-medium leading-6 text-gray-900">Editar usuario</h3>
      <p class="mt-1 text-sm text-gray-600">
        Utiliza este formulario para modificar todos los datos del usuario.
      </p>
    </div>
    <form action="{{ route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-6">
              <label for="name" class="block text-sm font-medium text-gray-700">ID</label>
              <input type="text" disabled="true" name="name" id="name" value="{{ $user->id }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-6">
              <label for="name" class="block text-sm font-medium text-gray-700">Fecha de alta</label>
              <input type="text" disabled="true" name="name" id="name" value="{{ $user->created_at }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-6">
              <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
              <input type="text" name="name" id="name" value="{{ $user->name }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-6">
              <label for="name" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="text" name="name" id="name" value="{{ $user->email }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-6">
              <label for="name" class="block text-sm font-medium text-gray-700">Rol</label>
              <input type="text" name="name" id="name" value="{{ $user->role }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Guardar
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection

@section('body-scripts')

@endsection