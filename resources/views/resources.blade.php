<x-app-layout>
    <div //style="border-bottom-right-radius: /50% /100px; //border-bottom-left-radius: /50% /100px;"
        class="bg-[url(/public/images/lion.jpg)] bg-center bg-cover overflow-hidden h-[600px]">
    </div>
    <h1 class="font-therif text-center font-bold mt-12 text-7xl text-[#652b53]">RESOURCES</h1>

    <h3 class="font-therif text-center font-bold mt-6 text-3xl text-[#652b53]" >Cool Facts About Animals</h3>

<!-- Top Row -->
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

</x-app-layout>
