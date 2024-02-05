<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.view')}} {{__('TimersMeta')}} #{{$model->id}}">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        
          <x-tomato-admin-row :label="__('Timer')" :value="$model->Timer->id" type="text" />

          <x-tomato-admin-row :label="__('User')" :value="$model->User->name" type="text" />

          <x-tomato-admin-row :label="__('Linked')" :value="$model->Linked->id" type="text" />

          <x-tomato-admin-row :label="__('Model')" :value="$model->model" type="string" />

          
          <x-tomato-admin-row :label="__('Key')" :value="$model->key" type="string" />

          
          <x-tomato-admin-row :label="__('Type')" :value="$model->type" type="string" />

          <x-tomato-admin-row :label="__('Group')" :value="$model->group" type="string" />

    </div>
    <div class="flex justify-start gap-2 pt-3">
        <x-tomato-admin-button warning label="{{__('Edit')}}" :href="route('admin.timers-metas.edit', $model->id)"/>
        <x-tomato-admin-button danger :href="route('admin.timers-metas.destroy', $model->id)"
                               confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                               confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                               confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                               cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                               method="delete"  label="{{__('Delete')}}" />
        <x-tomato-admin-button secondary :href="route('admin.timers-metas.index')" label="{{__('Cancel')}}"/>
    </div>
</x-tomato-admin-container>
