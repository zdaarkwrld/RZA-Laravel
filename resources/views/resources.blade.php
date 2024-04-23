<x-app-layout>
    {{--    {{-- bacground image --}}
    <div "
        class="bg-[url(/public/images/lion.jpg)] rounded-bl-[40%_100px] rounded-br-[60%_100px] bg-center  bg-cover overflow-hidden h-[300px] sm:h-[400px] md:h-[600px] relative">
    </div>

    <div class="absolute top-20 right-10 p-4 transition-all duration-1000 ease-in-out transform translate-x-[100%] opacity-0 animate-fade-in">
        <h2 class="text-white text-5xl font-bold font-therifleman bg-primary rounded-md px-5 py-5 ">Resources</h2>
      </div>

      <style>
        .animate-fade-in {
          animation: fade-in 1.5s ease-in-out forwards;
        }

        @keyframes fade-in {
          0% {
            transform: translateX(100%);
            opacity: 0;
          }
          100% {
            transform: translateX(0);
            opacity: 1;
          }
        }
      </style>
    {{-- Page Header --}}

    <div class="opacity-0 transform translate-x-[-50%] transition-all duration-1000 ease-in-out animate-fade-in-left">
        <h1 class="text-center font-bold mt-12 text-5xl text-[#652b53] font-therifleman">Explore Our Amazing Animals</h1>

        <h3 class="text-center font-bold mt-3 text-2xl text-[#652b53] font-therifleman">Select An Animal and Discover Facts about Them</h3>

        <!-- Top 3 sections -->
        <div class="flex flex-col md:flex-row gap-10 mx-auto md:px-10 w-96 md:w-full py-10 justify-center">
          <div class="bg-white rounded-2xl overflow-hidden max-w-96">
            <div class="overflow-hidden h-96">
              <img class="object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTRWrBGhyR_ycK4u5cutZ_ECBnWrsUWwGaTh_UhWHsUYe67Iifm" alt="">
            </div>
            <div class="p-4">
              <p>Penguins are flightless birds that are highly adapted to life in the water. They are known for their distinctive black and white plumage.They primarily inhabit the southern hemisphere, with species found in diverse environments ranging from Antarctica to the Galápagos Islands.</p>
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
              <p>Sumatran tigers are classified on the IUCN Red List as Critically Endangered with less than 400 individuals left in the wild of Sumatra, Indonesia.The smallest of the sub-species, they hide and travel at dawn and dusk in hope to hunt in crop areas and outskirts of the forest.</p>
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
              <p>Giraffes are under threat due to habitat fragmentation, illegal hunting, and human activities such as deforestation and land development.Conservation efforts are essential to protect giraffes and ensure their survival in the wild.</p>
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
              <p>Zebras are iconic African mammals known for their distinctive black and white stripes, which are unique to each individual.They inhabit various grassland habitats across Africa, forming social groups called herds.</p>
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
              <p>Pandas are iconic symbols of conservation efforts, known for their distinctive black and white fur and bamboo diet.They are native to China and are classified as vulnerable, primarily due to habitat loss and fragmentation.</p>
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
              <p>Elephants are the largest land animals on Earth, known for their long trunks, large ears, and tusks.They are highly intelligent and social creatures, living in close-knit family groups led by a matriarch.</p>
              <div class="flex justify-center">
                <a href="{{ route('elephant') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full text-center m-3 my-5">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <style>
        .animate-fade-in-left {
          animation: fade-in-left 1s ease-in-out forwards;
        }

        @keyframes fade-in-left {
          0% {
            opacity: 0;
            transform: translateX(-50%);
          }
          100% {
            opacity: 1;
            transform: translateX(0);
          }
        }
      </style>




    <!-- Map section -->
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4 text-center text-primary">Location Map</h1>
        <div class="h-96 rounded-lg overflow-hidden mb-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2463.213070715501!2d-1.0819146229995256!3d51.87532308375852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876e7003a568889%3A0x96293e962890fbaf!2sRiget Zoo Adventures!5e0!3m2!1sen!2suk!4v1713874120125!5m2!1sen!2suk" width="2000" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
        </div>
    </div>


    </div>
</div>











</x-app-layout>
