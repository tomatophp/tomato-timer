<x-tomato-admin-layout>
    <x-slot:header>
        {{ __('Timer') }}
    </x-slot:header>
    <x-slot:buttons>
        <x-tomato-admin-button :modal="true" :href="route('admin.timers.create')" type="link">
            {{trans('tomato-admin::global.crud.create-new')}} {{__('Timer')}}
        </x-tomato-admin-button>
    </x-slot:buttons>

    <div class="pb-12">
        <div class="mx-auto">
            <x-splade-table :for="$table" striped>
                <x-splade-cell color>
    <x-tomato-admin-row table type="color" :value="$item->color" />
</x-splade-cell>
<x-splade-cell icon>
    <x-tomato-admin-row table type="icon" :value="$item->icon" />
</x-splade-cell>
<x-splade-cell total_time>
    <x-tomato-admin-row table type="number" :value="$item->total_time" />
</x-splade-cell>
<x-splade-cell total_money>
    <x-tomato-admin-row table type="number" :value="$item->total_money" />
</x-splade-cell>
<x-splade-cell rounds>
    <x-tomato-admin-row table type="number" :value="$item->rounds" />
</x-splade-cell>
<x-splade-cell is_running>
    <x-tomato-admin-row table type="bool" :value="$item->is_running" />
</x-splade-cell>
<x-splade-cell is_done>
    <x-tomato-admin-row table type="bool" :value="$item->is_done" />
</x-splade-cell>
<x-splade-cell is_billable>
    <x-tomato-admin-row table type="bool" :value="$item->is_billable" />
</x-splade-cell>
<x-splade-cell is_paid>
    <x-tomato-admin-row table type="bool" :value="$item->is_paid" />
</x-splade-cell>

                <x-splade-cell actions>
                    <div class="flex justify-start">
                        <x-tomato-admin-button success type="icon" title="{{trans('tomato-admin::global.crud.view')}}" modal :href="route('admin.timers.show', $item->id)">
                            <x-heroicon-s-eye class="h-6 w-6"/>
                        </x-tomato-admin-button>
                        <x-tomato-admin-button warning type="icon" title="{{trans('tomato-admin::global.crud.edit')}}" modal :href="route('admin.timers.edit', $item->id)">
                            <x-heroicon-s-pencil class="h-6 w-6"/>
                        </x-tomato-admin-button>
                        <x-tomato-admin-button danger type="icon" title="{{trans('tomato-admin::global.crud.delete')}}" :href="route('admin.timers.destroy', $item->id)"
                           confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                           confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                           confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                           cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                           method="delete"
                        >
                            <x-heroicon-s-trash class="h-6 w-6"/>
                        </x-tomato-admin-button>
                    </div>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-tomato-admin-layout>
