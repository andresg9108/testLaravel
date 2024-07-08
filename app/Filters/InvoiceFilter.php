<?php

namespace App\Filters;
use Illuminate\Http\Request;

class InvoiceFilter extends ApiFilter{

    protected $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'status' => ['eq', 'ne'],
        'billedDated' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'paidDated' => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];
    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDated' => 'billed_dated',
        'paidDated' => 'paid_dated'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];

}