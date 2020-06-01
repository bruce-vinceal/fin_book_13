@extends('layouts.dashboard-layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Monthly Report</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" id="generate-report-btn" data-toggle="modal" data-target="#GenerateReportModal"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </button>

        <!-- Modal -->
        <div class="modal fade" id="GenerateReportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Generate Report</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 18px;"><i class="fas fa-times"></i></span>
                        </button>
                    </div>
                    <form action="/finote/monthly-report/{{$user->id}}" method="POST">
                    @csrf
                        <div class="modal-body">
                                <div class="form-group row">
                                    <label for="selectMonth" class="col-sm-3 col-form-label">Month</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="month" id="selectMonth">
                                            <option value="none" selected disabled hidden>Select Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="generate-btn" class="btn btn-primary">Generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if($show == '1')
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Daily Expense</div>
                <div class="card-body">
                    <canvas name="daily-expense-line-graph" id="daily-expense-line-graph"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Expense Category</div>
                <div class="card-body">
                    <canvas name="expense-category-pie-chart" id="expense-category-pie-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Monthly Income</div>
                <div class="card-body">
                    <canvas name="monthly-income-bar-graph" id="monthly-income-bar-graph"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Monthly Expense</div>
                <div class="card-body">
                    <canvas name="monthly-expense-bar-graph" id="monthly-expense-bar-graph"></canvas>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<!-- /.container-fluid -->
@endsection