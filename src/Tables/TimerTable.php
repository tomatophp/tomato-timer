<?php

namespace App\Tables;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Illuminate\Database\Eloquent\Builder;

class TimerTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct(public mixed $query=null)
    {
        if(!$query){
            $this->query = \App\Models\Timer::query();
        }
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return $this->query;
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(
                label: trans('tomato-admin::global.search'),
                columns: ['id',]
            )
            ->bulkAction(
                label: trans('tomato-admin::global.crud.delete'),
                each: fn (\App\Models\Timer $model) => $model->delete(),
                after: fn () => Toast::danger(__('Timer Has Been Deleted'))->autoDismiss(2),
                confirm: true
            )
            ->defaultSort('id', 'desc')
            ->column(
                key: 'id',
                label: __('Id'),
                sortable: true
            )
            ->column(
                key: 'project_id',
                label: __('Project id'),
                sortable: true
            )
            ->column(
                key: 'issue_id',
                label: __('Issue id'),
                sortable: true
            )
            ->column(
                key: 'account_id',
                label: __('Account id'),
                sortable: true
            )
            ->column(
                key: 'employee_id',
                label: __('Employee id'),
                sortable: true
            )
            ->column(
                key: 'type',
                label: __('Type'),
                sortable: true
            )
            ->column(
                key: 'status',
                label: __('Status'),
                sortable: true
            )
            ->column(
                key: 'color',
                label: __('Color'),
                sortable: true
            )
            ->column(
                key: 'icon',
                label: __('Icon'),
                sortable: true
            )
            ->column(
                key: 'description',
                label: __('Description'),
                sortable: true
            )
            ->column(
                key: 'total_time',
                label: __('Total time'),
                sortable: true
            )
            ->column(
                key: 'total_money',
                label: __('Total money'),
                sortable: true
            )
            ->column(
                key: 'rounds',
                label: __('Rounds'),
                sortable: true
            )
            ->column(
                key: 'is_running',
                label: __('Is running'),
                sortable: true
            )
            ->column(
                key: 'is_done',
                label: __('Is done'),
                sortable: true
            )
            ->column(
                key: 'is_billable',
                label: __('Is billable'),
                sortable: true
            )
            ->column(
                key: 'is_paid',
                label: __('Is paid'),
                sortable: true
            )
            ->column(key: 'actions',label: trans('tomato-admin::global.crud.actions'))
            ->export()
            ->paginate(10);
    }
}
