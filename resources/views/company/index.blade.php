@extends('layouts.app')

@section('cabecera-section')
Listado de empresas
@endsection

@section('content')

<div class="h-full bg-gray-100 p-5 container xl:px-24 py-6 mx-auto">

  <!-- BUSCADOR -->
  <div class="mx-auto mt-3 mb-8 bg-white shadow-lg border rounded-md lg:w-96 focus-within:ring ring-primary focus-within:border-blue-300">
    <form action="/search" class="flex flex-wrap justify-between md:flex-row">
      <input id="search-input" value="" type="search" name="query" placeholder="Buscar empresa por nombre..." class="flex-1 p-2 m-1 text-gray-700 placeholder-gray-400 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0">
      <button class="flex justify-center w-full p-2 m-1 text-white transition-colors duration-200 transform rounded-md bg-blue-200 lg:w-auto hover:bg-blue-300 focus:outline-none focus:bg-blue-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
      </button>
    </form>
  </div>
  <!-- FIN BUSCADOR -->
  <!-- CARD GRID -->
  <div id="card-grid" class="flex flex-wrap">

  @foreach($companies as $company)
    <!-- INICIO CARD -->
    <div class="card lg:w-1/3 p-2">
      <div class="rounded overflow-hidden shadow-lg bg-white transform transition duration-500 ease-in-out scale-100  hover:scale-105 hover:-translate-y-4 hover:shadow-2xl">
        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/image/{{ $company->image}}" alt="Sunset in the mountains">
        <div class="px-6 pt-2 pb-2">
          <div class="pt-2 pb-1">
          <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2"># {{ $company->category->name }}</span>
        </div>
          <div class="card-title font-bold text-xl mb-2">{{ $company->name }}</div>
          <p class="text-gray-700 text-base">
          {{ \Illuminate\Support\Str::limit($company->short_description, 150, $end='...') }}
          </p>
        </div>
        <div class="mt-2 mb-4 mx-6 text-center">
          <a href="{{ route('company.show', $company->id)}}" class="py-2 px-3 w-full text-white bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline inline-block">Más Información <svg class="-mr-1 mb-1 h-4 w-4 inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
        </div>
      </div>
    </div>
    <!-- FIN CARD -->

    @endforeach

  </div>
  <!-- FIN GRID -->
</div>

@endsection

@section('body-scripts')
<script>
// Add listener to search input:
const searchInput = document.getElementById("search-input");
searchInput.addEventListener("keyup",searchCards);

function searchCards(){
  console.log("Typed: "+this.value);
  let input = this.value;
  filter(this.value.toUpperCase());
}

function filter(input) {
  const cardContainer = document.getElementById("card-grid");
  const cards = cardContainer.getElementsByClassName("card");
  console.log(cards);

  for (let i = 0; i < cards.length; i++) {
    let title = cards[i].querySelector(".card-title");
    console.log(title.innerText.toUpperCase());
    if (title && title.innerText.toUpperCase().indexOf(input) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
}
</script>
@endsection