<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends Controller
{    
   
    public function index()
    {
        
        $invoice = Invoice::latest()->get();

        
        return response()->json([
            'success' => true,
            'message' => 'List data invoice',
            'data'    => $invoice
        ], 200);

    }
    
   
    public function show($id)
    {
        $invoice = Invoice::findOrfail($id);
        return response()->json([
            'success' => true,
            'message' => 'List detail data invoice',
            'data'    => $invoice
        ], 200);

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'invoice_no'   => 'required',
            'date'   => 'required',
            'customer'   => 'required',
            'salesperson'   => 'required',
            'payment_type'   => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $invoice = Invoice::create([
            'invoice_no'     => $request->invoice_no,
            'date'     => $request->date,
            'customer'     => $request->customer,
            'salesperson'     => $request->salesperson,
            'payment_type'     => $request->payment_type,
            'notes'     => $request->notes,
            'id_product'     => $request->id_product,
        ]);

        if($invoice) {

            return response()->json([
                'success' => true,
                'message' => 'Invoice data has been save!',
                'data'    => $invoice
            ], 201);

        } 

        return response()->json([
            'success' => false,
            'message' => 'Invoice data not been saved!',
        ], 409);

    }
    
    public function update(Request $request, Invoice $invoice)
    {
        $validator = Validator::make($request->all(), [
            'invoice_no'   => 'required',
            'date'   => 'required',
            'customer'   => 'required',
            'salesperson'   => 'required',
            'payment_type'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $invoice = Invoice::findOrFail($invoice->id);

        if($invoice) {

            $invoice->update([
                'invoice_no'     => $request->invoice_no,
                'date'     => $request->date,
                'customer'     => $request->customer,
                'salesperson'     => $request->salesperson,
                'payment_type'     => $request->payment_type,
                'notes'     => $request->notes,
                'id_product'     => $request->id_product,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'List data invoice success updated!',
                'data'    => $invoice
            ], 200);

        }

        return response()->json([
            'success' => false,
            'message' => 'List data invoice not yet!',
        ], 404);

    }
    
    public function destroy($id)
    {
        $invoice = Invoice::findOrfail($id);

        if($invoice) {

            $invoice->delete();

            return response()->json([
                'success' => true,
                'message' => 'List data invoice has been deleted!',
            ], 200);

        }

        return response()->json([
            'success' => false,
            'message' => 'List data invoice not yet!',
        ], 404);
    }
}