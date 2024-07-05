<div class="w-4/5">
    <table class="border-2 border-black">
        <!--To-do's ophalen uit db-->
        @foreach($todo as $todos) 
            <!--laat dit zien als de to-do niet is afgerond-->
            @if($todos->Gedaan == NULL)
                <tr class="border-b-2 border-black">
                    <td class="pl-4">
                        {{$todos->Todo}}
                    </td>
                    <td class="">
                        <!--button om de status van de to-do te veranderen-->
                        <button wire:click="update({{$todos->id}})" class="bg-green-400 p-2 rounded-md hover:bg-green-600 transition-all m-2">
                            Afronden
                        </button>
                    </td>    
                    <td class="">
                        <!--button om de to-do te verwijderen-->
                        <button wire:click="delete({{ $todos->id }})" wire:confirm="Weet je zeker dat je deze taak wilt verwijderen?" class="bg-red-300 p-2 rounded-md hover:bg-red-400 transition-all m-2">
                            Verwijderen
                        </button>
                    </td>
                </tr>
                <!--laat dit zien als de to-do is afgerond-->
            @else
                <tr class="bg-green-400 border-b-2 border-black">
                    <td class="line-through pl-4 w-full">
                        {{$todos->Todo}}
                    </td>
                    <td class="m-2"> 
                    </td>
                    <td class="">
                        <!--button om de to-do te verwijderen-->
                        <button wire:click="delete({{ $todos->id }})" wire:confirm="Weet je zeker dat je deze taak wilt verwijderen" class="bg-red-300 p-2 rounded-md hover:bg-red-400 transition-all m-2">
                            Verwijderen
                        </button>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>
</div>