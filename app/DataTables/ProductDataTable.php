<?php

namespace App\DataTables;

use App\Models\Product;
use Yajra\DataTables\DataTables;

class ProductDataTable
{
    /**
     * Build DataTable class.
     *
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function ajax()
    {
        return DataTables::of($this->query())
            ->addColumn('action', function ($product) {
                return view('admin.product.datatables_actions', compact('product'))->render();
            })
            ->editColumn('price', function ($product) {
                return '&#1583;' . number_format($product->price, 2);
            })
            ->editColumn('image', function ($product) {
                return $product->image ? '<img src="' . asset($product->image) . '" style="width: 100px; height: auto;" />' : 'No Image';
            })
            ->rawColumns(['image', 'action'])
            ->toJson();
    }

    /**
     * Get query source of dataTable.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Product::with('category');
    }
}
