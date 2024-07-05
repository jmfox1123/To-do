<div class="w-full">
    <!--form voor submitten van taak-->
    <form class="flex flex-col items-center " wire:submit="save">
        <p class=" text-center">Nieuwe taak toevoegen</p>
        <input class=" mt-4 mb-4 text-black rounded-md bg-gray-200 p-4 w-4/5 text-center" type="text" wire:model="Todo" placeholder="Taak naam"/>
        <button class="bg-green-600 p-2 rounded-md hover:bg-green-700 transition-all text-white" type="submit">opslaan</button>
        @error('Todo') <span class="error bg-red-500 p-3 mt-5 rounded-md  text-center">De taak is een verplicht veld</span> @enderror
    </form>  
</div>