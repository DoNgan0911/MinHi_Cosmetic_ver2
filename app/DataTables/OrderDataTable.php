<?php

namespace App\DataTables;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OrderDataTable extends DataTable
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
                
                // if($query->user_id){
                //     $showBtn = "<a href='".route('manage_order.show', $query->id)."' class='btn btn-primary'>Chi tiết</a>";
                //     return $showBtn;
                // }
                // else{
                    $showBtn = "<a href='".route('manage_order.show', $query->id)."' class='btn btn-primary'>Chi tiết</a>";
                    // Xóa cho khách hàng không có tài khoản mà muốn hủy đơn hang
                    if($query->enable === 0 || $query->user_id == null ){
                        $deleteBtn = "<a href='".route('manage_order.destroy', $query->id)."' class='btn btn-danger ml-2 delete-item'>Xóa</a>";
                        return $showBtn.$deleteBtn ; 

                    }
                    return $showBtn;
                // }

            })
            ->addColumn('customer', function($query){
                if($query->user_id !== null)
                {
                    return $query->user->name;
                }else{
                    return '';
                }
            })
            ->addColumn('date', function($query){
                return date('d-M-Y', strtotime($query->created_at));
            })
            ->addColumn('status', function($query){
                return "<span class='badge bg-warning'>$query->status </span>" ;
            })
            
            ->rawColumns(['status', 'action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Order $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('order-table')
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
            Column::make('date'),
            Column::make('address'),
            Column::make('phone'),
            Column::make('status'),
            Column::make('enable'),
            Column::make('total'),
            Column::make('payment_method'),
            Column::make('payment_status'),
            Column::make('user_id'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(260)
            ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Order_' . date('YmdHis');
    }
}
