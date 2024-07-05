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
  <div  x-data="{isActive:0}" class="flex">
    <div class= "bg-gray-800 h-screen text-white w-24 p-4 fixed">
      <!--form div verbergen tot er op de knop geklikt wordt-->
      <div>
        <button class=" absolute bg-orange-600 p-4 rounded-full hover:bg-orange-700 transition-all " x-on:click="isActive = 0">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg> 
        </butto>
        <button class=" absolute bg-green-600 p-4 rounded-full hover:bg-green-700 transition-all mt-16"  x-on:click="isActive = 1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
        </button>
      </div>
    </div>
    <div 
      class="container p-5 ml-24 flex flex-col items-center" 
      x-show="isActive === 1" 
    >
          <!--Form ophalen vanuit de nieuwetodo blade-->
          <livewire:nieuwtodo/>
    </div>
    <div 
      class="container p-5 ml-24 " 
      x-show="isActive === 0" 
    >
    <!--To-do's laten zien-->
      <livewire:toontodo/>
    </div>
  </div>
</body>
</html>