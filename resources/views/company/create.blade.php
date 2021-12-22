@extends('layouts.app')

@section('cabecera-section')
Crear nueva empresa
@endsection

@section('content')

<!-- Se ha utilizado como base el siguiente layout: https://tailwindui.com/components/application-ui/forms/form-layouts -->



<div class=" flex justify-center mx-auto py-6 max-w-5xl">



  <div class="mt-5 md:mt-0">
    <div class="px-4 py-4 sm:px-0">
      <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
      <p class="mt-1 text-sm text-gray-600">
        Completa el formulario para dar de alta una nueva empresa. Una vez registrada la empresa podrás modificar los campos cuando quieras.
      </p>
    </div>
    <form action="{{ route('company.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="status_id" value="1">

      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
          <div class="grid grid-cols-6 gap-6">

            <div class="col-span-6 sm:col-span-6">
              <label for="name" class="block text-sm font-medium text-gray-700">Nombre de la empresa</label>
              <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-6">
              <label for="short_description" class="block text-sm font-medium text-gray-700">Descripción breve de la empresa (max. 250 caracteres)</label>
              <p class="mt-1 text-sm text-gray-500">
              Esta descripción breve se utilizará en el directorio principal.
              </p>
              <input type="text" name="short_description" id="short_description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="website" class="block text-sm font-medium text-gray-700">
                Página web
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  http://
                </span>
                <input type="text" name="website" id="website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.example.com">
              </div>  
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="linkedin" class="block text-sm font-medium text-gray-700">
                Página de LinkedIn
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  http://
                </span>
                <input type="text" name="linkedin" id="linkedin" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.example.com">
              </div>
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="location" class="block text-sm font-medium text-gray-700">Localización</label>
              <input type="text" name="location" id="location" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="category_id" class="block text-sm font-medium text-gray-700">Tipo de empresa</label>
              <select id="category_id" name="category_id" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="1">Industrial o de producción</option>
                <option value="2">Ingeniería de servicios</option>
                <option value="3">Desarrollo de Software</option>
                <option value="4">Centro tecnológico</option>
                <option value="5">Otro</option>
              </select>
            </div>
            
            <div class="col-span-6 sm:col-span-3 gap-3">
              <label for="email" class="block text-sm font-medium text-gray-700">Email de contacto</label>
              <p class="mt-1 text-sm text-gray-500">
              No se mostrará a los estudiantes.
              </p>
              <input type="email" name="email" id="email" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono de contacto</label>
              <p class="mt-1 text-sm text-gray-500">
              No se mostrará a los estudiantes.
              </p>
              <input type="text" name="phone" id="phone" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

          </div>

          <div>
            <label for="profile" class="block text-sm font-medium text-gray-700">
              Perfil / Descripción de la empresa
            </label>
            <div class="mt-1">
              <textarea id="profile" name="profile" rows="5" class="ckeditor shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Escribe aquí una descripción de la empresa para que los estudiantes puedan conocerla."></textarea>
            </div>
          </div>

          <div>
            <label for="offer" class="block text-sm font-medium text-gray-700">
              Proyectos o actividades que puede realizar el estudiante
            </label>
            <div class="mt-1">
              <textarea id="offer" name="offer" rows="5" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Desribe los tipos de proyectos en los que podrá participar el estudiante, actividades que podrá realizar durante su formación dual, o si lo sabes incluso tecnologías con las que podrá trabajar. De esta forma podrán conocer la empresa mucho mejor."></textarea>
            </div>
          </div>

          <div class="col-span-6 sm:col-span-6">
              <label for="presentation" class="block text-sm font-medium text-gray-700">Presentación</label>
              <input class="block w-full cursor-pointer leading-7 bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none focus:border-transparent text-sm rounded-lg" aria-describedby="user_avatar_help" id="presentation" type="file" name="presentation">
              <p class="mt-1 text-sm text-gray-500" id="user_avatar_help">Puede subir una presentación en formatp PDF o PowerPoint</p>
          </div>

          <div class="col-span-6 sm:col-span-4">
              <label for="video_url" class="block text-sm font-medium text-gray-700">Enlace a vídeo</label>
              <input type="text" name="video_url" id="video_url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-6">
              <label for="image" class="block text-sm font-medium text-gray-700">Foto</label>
              <input class="block w-full cursor-pointer leading-7 bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none focus:border-transparent text-sm rounded-lg" aria-describedby="photo" id="image" name="image" type="file">
              <p class="mt-1 text-sm text-gray-500" id="user_avatar_help">La foto se utilizará en la página principal del directorio de empresas.</p>
          </div>

          <!--
          <div>
            <label class="block text-sm font-medium text-gray-700">
              Photo
            </label>
            <div class="mt-1 flex items-center">
              <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </span>
              <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Change
              </button>
            </div>
          </div>
          
          <div>
            <label class="block text-sm font-medium text-gray-700">
              Foto principal
            </label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
              <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                  <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <span>Upload a file</span>
                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">
                  PNG, JPG, GIF up to 10MB
                </p>
              </div>
            </div>
          </div>
          -->
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