
<div class="ml-3 relative" >
    <x-jet-dropdown align="right" width="96">
        <x-slot name="trigger">
            <form autocomplete="off" wire:submit.prevent>
                <div class="relative">
                    <input type="text" wire:model="search_text" name="search" class="rounded-full py-1 pl-3 pr-6 text-sm bg-blue-50 border-0" placeholder="Search..">
                    <i data-feather="search" class="absolute top-0 bottom-0 right-0 my-auto mr-2 text-gary-400"></i>
                </div>
            </form>
        </x-slot>

        <x-slot name="content">
            <div class="w-full">

                @if(!empty($users))
                    <div class="block px-4 py-1 text-xs text-gray-400">
                        {{ __('Users') }}
                    </div>
                    @foreach($users as $user)
                        <x-jet-dropdown-link class="flex items-center bg-gray-200 my-1 shadow">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                <span class="px-3 ">
                                    <span class="font-bold">

                                    {{ $user->name  }}
                                    </span>
                                    <span class="text-sm text-center text-gray-400">
                                        {{ $user->email }}
                                    </span>
                                </span>
                        </x-jet-dropdown-link>
                    @endforeach
                @endif

            </div>
        </x-slot>
    </x-jet-dropdown>
</div>
