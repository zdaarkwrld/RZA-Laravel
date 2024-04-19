<x-app-layout>
    {{--    {{-- bacground image --}}
    <div "
        class="bg-[url(/public/images/lion.jpg)] bg-center bg-cover overflow-hidden h-[600px]">
    </div>

    {{-- Page Header --}}
    <h1 class="font-therif text-center font-bold mt-12 text-7xl text-[#652b53]">RESOURCES</h1>

    <h3 class="font-therif text-center font-bold mt-6 text-3xl text-[#652b53]">Discover Interesting Facts Of Our Animal Friends</h3>

    <!-- Top 3 sections -->
    <div class="flex flex-col md:flex-row gap-10 mx-auto md:px-10 w-96 md:w-full py-10 justify-center">
      <div class="bg-white rounded-2xl overflow-hidden max-w-96">
        <div class="overflow-hidden h-96">
          <img class="object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTRWrBGhyR_ycK4u5cutZ_ECBnWrsUWwGaTh_UhWHsUYe67Iifm" alt="">
        </div>
        <div class="p-4">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae quaerat fuga tempore. Voluptates debitis, eligendi alias rem ex et dolores ad, similique ratione ipsum, quidem cupiditate quo harum molestiae.</p>
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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa pariatur quis voluptate aut? Laudantium ut expedita tempora cum quibusdam neque alias a libero numquam, quas perspiciatis saepe excepturi velit assumenda!</p>
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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa pariatur quis voluptate aut? Laudantium ut expedita tempora cum quibusdam neque alias a libero numquam, quas perspiciatis saepe excepturi velit assumenda!</p>
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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae quaerat fuga tempore. Voluptates debitis, eligendi alias rem ex et dolores ad, similique ratione ipsum, quidem cupiditate quo harum molestiae.</p>
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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa pariatur quis voluptate aut? Laudantium ut expedita tempora cum quibusdam neque alias a libero numquam, quas perspiciatis saepe excepturi velit assumenda!</p>
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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa pariatur quis voluptate aut? Laudantium ut expedita tempora cum quibusdam neque alias a libero numquam, quas perspiciatis saepe excepturi velit assumenda!</p>
          <div class="flex justify-center">
            <a href="{{ route('elephant') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full text-center m-3 my-5">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Map section -->
<h1 class="text-center font-bold text-4xl md:text-6xl lg:text-7xl pb-4 font-therifleman text-[#652b53]">OUR ZOO MAP</h1>
<h3 class="font-therif text-center font-bold text-3xl text-[#652b53] mb-10">Discover Our Zoo Through This Map</h3>
<div class="flex justify-center items-center">
    <div class="max-w-5xl w-full p-2 m-2 object-cover object-left h-full hover:scale-110 transition-transform ease-in-out duration-150 overflow-hidden z-10 mb-11 bg-primary">
        <a href="https://www.batterseaparkzoo.co.uk/media/pnughh1c/screenshot-2023-08-01-at-151400.png" target="_blank">
          <img src="https://www.batterseaparkzoo.co.uk/media/pnughh1c/screenshot-2023-08-01-at-151400.png?width=1600&rnd=133355464998600000" alt="Battersea Park Zoo" class="w-full h-auto object-contain mb-2" />
        </a>
      </div>
</div>











</x-app-layout>
