<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Drivers') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-6 pt-6">
                    <x-input wire:model.live="search" class="w-1/3" placeholder="Search Drivers..."/>
                </div>
                <div class="p-6">
                    <x-table>
                        <x-slot name="head">
                            <x-table.heading>First name</x-table.heading>
                            <x-table.heading>Last name</x-table.heading>
                            <x-table.heading>Phone</x-table.heading>
                            <x-table.heading>Email</x-table.heading>
                            <x-table.heading>Address</x-table.heading>
                            <x-table.heading>Notes</x-table.heading>
                            <x-table.heading />
                        </x-slot>
                        <x-slot name="body">
                            @forelse ($drivers as $driver)
                                <x-table.row wire:key="{{ $driver->id }}">
                                    <x-table.cell>{{ $driver->first_name }}</x-table>
                                    <x-table.cell>{{ $driver->last_name }}</x-table>
                                    <x-table.cell>{{ $driver->phone_number }}</x-table>
                                    <x-table.cell>{{ $driver->email }}</x-table>
                                    <x-table.cell>{{ Str::limit($driver->address, 25)  }}</x-table>
                                    <x-table.cell>{{ Str::limit($driver->note, 25)  }}</x-table>
                                    <x-table.cell>
                                        {{-- <x-button wire:click='edit({{ $driver->id }})'>Edit</x-button> --}}
                                    </x-table>
                                </x-table.row>
                            @empty
                                <x-table.row>
                                    <x-table.cell colspan="6">
                                        <div class="flex justify-center">
                                            <span>
                                                No Drivers Found.
                                            </span>
                                        </div>
                                    </x-table>
                                </x-table.cell>
                            @endforelse
                        </x-slot>
                    </x-table>
                    <div class="py-4">
                        {{ $drivers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
