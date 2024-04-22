<x-app-layout>
    {{--    {{-- bacground image --}}
    <div "
        class="bg-[url(/public/images/lion.jpg)] bg-center bg-cover overflow-hidden h-[600px]">
    </div>

    {{-- Page Header --}}
    <h1 class=" text-center font-bold mt-12 text-7xl text-[#652b53]">RESOURCES</h1>

    <h3 class=" text-center font-bold mt-6 text-3xl text-[#652b53]">DISCOVER INTERESTING FACTS ABOUT OUR ANIMAL FRIENDS</h3>

    <!-- Top 3 sections -->
    <div class="flex flex-col md:flex-row gap-10 mx-auto md:px-10 w-96 md:w-full py-10 justify-center">
      <div class="bg-white rounded-2xl overflow-hidden max-w-96">
        <div class="overflow-hidden h-96">
          <img class="object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTRWrBGhyR_ycK4u5cutZ_ECBnWrsUWwGaTh_UhWHsUYe67Iifm" alt="">
        </div>
        <div class="p-4">
          <p>Penguins are flightless birds that are highly adapted to life in the water. They are known for their
            distinctive black and white plumage.They primarily inhabit the southern hemisphere, with species found in diverse environments ranging from
            Antarctica to the Galápagos Islands.</p>
          <div class="flex justify-center">
            <a href="{{ route('pinguins') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full text-center m-3 my-5">Read More</a>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden max-w-96">
        <div class="overflow-hidden h-96">
          <img class="object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Lion_waiting_in_Namibia.jpg/640px-Lion_waiting_in_Namibia.jpg" alt="">
        </div>
        <div class="p-4">
          <p>Sumatran tigers are classified on the IUCN Red List as Critically Endangered with less than 400
            individuals left in the wild of Sumatra, Indonesia.The smallest of the sub-species, they hide and travel at dawn and dusk in hope to hunt in crop areas and
            outskirts of the forest.</p>
          <div class="flex justify-center">
            <a href="{{ route('lions') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full text-center m-3 my-5">Read More</a>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden max-w-96">
        <div class="overflow-hidden h-96">
          <img class="object-cover object-left h-full hover:scale-110 transition-transform ease-in-out duration-150" src="https://cdn.britannica.com/05/148805-050-1628E169/Rothschild-giraffes-Murchison-Falls-National-Park-Uganda.jpg" alt="">
        </div>
        <div class="p-4">
          <p>Giraffes are under threat due to habitat fragmentation, illegal hunting, and human activities such as
            deforestation and land development.Conservation efforts are essential to protect giraffes and ensure their survival in the wild.</p>
          <div class="flex justify-center">
            <a href="{{ route('giraffes') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full text-center m-3 my-5">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom 3 sections -->
    <div class="flex flex-col md:flex-row gap-10 mx-auto md:px-10 w-96 md:w-full py-10 justify-center">
      <div class="bg-white rounded-2xl overflow-hidden max-w-96">
        <div class="overflow-hidden h-96">
          <img class="object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150" src="https://i.natgeofe.com/n/14dd7036-78ee-46f4-b620-d5eaf7cebda7/zebra-akagera_4x3.jpg" alt="">
        </div>
        <div class="p-4">
          <p>Zebras are iconic African mammals known for their distinctive black and white stripes, which are unique
            to each individual.They inhabit various grassland habitats across Africa, forming social groups called herds.</p>
          <div class="flex justify-center">
            <a href="{{ route('zebra') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full text-center m-3 my-5">Read More</a>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden max-w-96">
        <div class="overflow-hidden h-96">
          <img class="object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150" src="https://cdn.britannica.com/80/150980-050-84B9202C/Giant-panda-cub-branch.jpg" alt="">
        </div>
        <div class="p-4">
          <p>Pandas are iconic symbols of conservation efforts, known for their distinctive black and white fur and
            bamboo diet.They are native to China and are classified as vulnerable, primarily due to habitat loss and
            fragmentation.</p>
          <div class="flex justify-center">
            <a href="{{ route('panda') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full text-center m-3 my-5">Read More</a>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden max-w-96">
        <div class="overflow-hidden h-96">
          <img class="object-cover object-left h-full hover:scale-110 transition-transform ease-in-out duration-150" src="https://cdn.britannica.com/02/152302-050-1A984FCB/African-savanna-elephant.jpg" alt="">
        </div>
        <div class="p-4">
          <p> Elephants are the largest land animals on Earth, known for their long trunks, large ears, and tusks.They are highly intelligent and social creatures, living in close-knit family groups led by a matriarch.</p>
          <div class="flex justify-center">
            <a href="{{ route('elephant') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full text-center m-3 my-5">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Map section -->
<h1 class="text-center font-bold text-4xl md:text-6xl lg:text-7xl pb-4 font-therifleman text-[#652b53]">OUR ZOO MAP</h1>
<h3 class="font-therif text-center font-bold text-3xl text-[#652b53] mb-10">DISCOVER OUR ZOO THROUGH THIS MAP</h3>
<div class="flex justify-center items-center">
    <div class="max-w-5xl w-full p-2 m-2 object-cover object-left h-full hover:scale-110 transition-transform ease-in-out duration-150 overflow-hidden z-10 mb-11 bg-primary">
          <img src="https://i.pinimg.com/736x/9b/26/f1/9b26f1142ecc97a2e82d6aeb736bf288.jpg" alt="Battersea Park Zoo" class="w-full h-auto object-contain mb-2" />
        </a>
      </div>
</div>











</x-app-layout>
