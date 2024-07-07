<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @livewireStyles
</head>
<body>
  @livewireScripts
  <!--toon alleen de div met het juiste nummer-->
  <div  x-data="{isActive:0}">
    <div class= "w-full p-4 text-white bg-gray-800 ">
      <div>
        <button 
          x-on:click="isActive = 0" 
          :class="{'rounded-xl bg-orange-400 hover:bg-orange-400' : isActive === 0}"
          class="p-4 mr-4 transition-all bg-orange-600 rounded-full hover:bg-orange-700" 
        >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg> 
        </button>
        <button 
          x-on:click="isActive = 1"
          :class="{'rounded-xl bg-green-300 hover:bg-green-300' : isActive === 1}"
          class="p-4 transition-all bg-green-600 rounded-full hover:bg-green-700"  
        >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
        </button>
      </div>
    </div>
    <div 
      class="flex flex-col items-center mt-4" 
      x-show="isActive === 1"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 scale-90"
      x-transition:enter-end="opacity-100 scale-100"
    >
      <!--Form ophalen vanuit de nieuwetodo blade-->
      <livewire:nieuwtodo/>
    </div>
    <div 
      class="flex flex-col items-center mt-4" 
      x-show="isActive === 0" 
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 scale-90"
      x-transition:enter-end="opacity-100 scale-100"
    >
      <!--To-do's laten zien-->
      <livewire:toontodo/>
    </div>
  </div>
</body>
</html>