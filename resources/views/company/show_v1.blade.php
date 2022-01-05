@extends('layouts.app')

@section('cabecera-section')
Detalle de la empresa {{ $company->name }}
@endsection

@section('content')
<div class=" flex justify-center mx-auto py-6 max-w-5xl">
  <div class="bg-white shadow-lg overflow-hidden sm:rounded-lg">
    <div class="relative px-4 py-12 sm:px-6 bg-gradient-to-r from-blue-600 to-green-500 text-center text-white">
      @can('update-company',$company)
      <a href="http://dualdirectory.test/companies/{{ $company->id }}/edit" class="absolute top-5 right-5 inline-flex items-center py-1 px-3 focus:outline-none rounded text-base text-blue-500 bg-white hover:bg-blue-700 hover:text-white ">Editar
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
        </svg>
      </a>
      @endcan
      <h3 class="text-2xl font-bold leading-7 sm:text-3xl sm:truncate text-white">
      {{ $company->name }}
      </h3>
      <p class="mt-2 text-white text-center mt-4">
        <!-- Heroicon name: solid/location-marker -->
        <svg class="flex-shrink-0 mb-1 mr-1 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
        </svg>
        <span class="">{{ $company->location }}</span>
      </p>
    </div>
    <div class="border-t border-gray-200">
      <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Descripción breve
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
          {{ $company->short_description }}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Imagen
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
          <img src="/image/{{ $company->image }}" width="500px">
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Página web
          </dt>
          <dd class="mt-1 text-sm sm:mt-0 sm:col-span-3">
            <a target="_blank" href="http://{{ $company->website }}" class="text-blue-600 hover:underline">{{ $company->website }} <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline mb-1"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></a>
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Linkedin
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
            <a target="_blank" href="http://{{ $company->linkedin }}" class="text-blue-600 hover:underline">{{ $company->linkedin }} <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline mb-1"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></a>
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Categoria
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
              <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">{{ $company->category->name }}</span>
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Email
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
          {{ $company->email }}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Perfil
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
          {!! nl2br($company->offer) !!}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
          Proyectos y actividades
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
          
          {!! nl2br($company->offer) !!}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Presentación
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
              <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                <div class="w-0 flex-1 flex items-center">
                  <!-- Heroicon name: solid/paper-clip -->
                  <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                  </svg>
                  <span class="ml-2 flex-1 w-0 truncate">
                  {{ $company->presentation }}
                  </span>
                </div>
                <div class="ml-4 flex-shrink-0">
                  <a href="/presentations/{{ $company->presentation }}" target="_blank" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Descargar
                  </a>
                </div>
              </li>
            </ul>
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Video
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3">
            <a target="_blank" href="http://{{ $company->video_url }}" class="text-blue-600 hover:underline">{{ $company->video_url }} <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline mb-1"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></a>
          </dd>
        </div>
      </dl>
    </div>
  </div>
</div>
@endsection