<?php

namespace App\Http\Controllers\Admin\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Reports_Controller extends Controller
{
    public function index()
    {
        return view('Report.index');
    }
    public function Report_All(){
        
        return view('Report.Report_All');
    
    }
    public function cash()
    {
        return view('Report.cash');
    }
    public function salse()
    {
        return view('Report.salse');
    }
    public function salse_month()
    {
        return view('Report.salse_month');
    }
    public function salse_period()
    {
        return view('Report.salse_period');
    }
    public function purshace()
    {
        return view('Report.purshace');
    }
    public function purshace_month()
    {
        return view('Report.purshace_month');
    }
    public function purshace_period()
    {
        return view('Report.purshace_period');
    }
}
