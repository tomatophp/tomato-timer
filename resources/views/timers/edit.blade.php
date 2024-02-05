<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.edit')}} {{__('Timer')}} #{{$model->id}}">
    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.timers.update', $model->id)}}" method="post" :default="$model">
        
          <x-splade-select :label="__('Project id')" :placeholder="__('Project id')" name="project_id" remote-url="/admin/projects/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Issue id')" :placeholder="__('Issue id')" name="issue_id" remote-url="/admin/issues/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Account id')" :placeholder="__('Account id')" name="account_id" remote-url="/admin/accounts/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Employee id')" :placeholder="__('Employee id')" name="employee_id" remote-url="/admin/users/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-input :label="__('Type')" name="type" type="text"  :placeholder="__('Type')" />
          <x-splade-input :label="__('Status')" name="status" type="text"  :placeholder="__('Status')" />
          <x-tomato-admin-color :label="__('Color')" :placeholder="__('Color')" type='number' name="color" />
          <x-splade-input :label="__('Icon')" name="icon" type="icon"  :placeholder="__('Icon')" />
          <x-splade-input :label="__('Description')" name="description" type="text"  :placeholder="__('Description')" />
          <x-splade-input :label="__('Total time')" :placeholder="__('Total time')" type='number' name="total_time" />
          <x-splade-input :label="__('Total money')" :placeholder="__('Total money')" type='number' name="total_money" />
          <x-splade-input :label="__('Rounds')" :placeholder="__('Rounds')" type='number' name="rounds" />
          <x-splade-checkbox :label="__('Is running')" name="is_running" label="Is running" />
          <x-splade-checkbox :label="__('Is done')" name="is_done" label="Is done" />
          <x-splade-checkbox :label="__('Is billable')" name="is_billable" label="Is billable" />
          <x-splade-checkbox :label="__('Is paid')" name="is_paid" label="Is paid" />

        <div class="flex justify-start gap-2 pt-3">
            <x-tomato-admin-submit  label="{{__('Save')}}" :spinner="true" />
            <x-tomato-admin-button danger :href="route('admin.timers.destroy', $model->id)"
                                   confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                                   confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                                   confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                                   cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                                   method="delete"  label="{{__('Delete')}}" />
            <x-tomato-admin-button secondary :href="route('admin.timers.index')" label="{{__('Cancel')}}"/>
        </div>
    </x-splade-form>
</x-tomato-admin-container>
