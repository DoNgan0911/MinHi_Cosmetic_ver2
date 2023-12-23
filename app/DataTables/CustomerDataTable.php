<?php

namespace App\DataTables;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CustomerDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('action', function($query){
            // $deleteBtn = "<a href='".route('manage_order.destroy', $query->id)."' class='btn btn-danger ml-2 delete-item'>D</a>";
            // $statusBtn = "<a href='".route('manage_order.destroy', $query->id)."' class='btn btn-warning ml-2'>D</a>";

            // return $showBtn ; 
        })
        // ->addColumn('customer', function($query){
        //     return $query->user->name;
        // })
        // ->addColumn('date', function($query){
        //     return date('d-M-Y', strtotime($query->created_at));
        // })
        // ->addColumn('status', function($query){
        //     return "<span class='badge bg-warning'>$query->status </span>" ;
        // })
        ->rawColumns(['status', 'action'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery()
                 ->where('role', '=', 'customer');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('customer-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('address'),
            Column::make('phone'),
            Column::make('postcode'),
            Column::make('email'),
            Column::make('birthday'),
            Column::make('total'),
            Column::make('enable'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Customer_' . date('YmdHis');
    }
}
