@extends('layouts.dashboard-layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ledger</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" id="add-entry-btn" data-toggle="modal" data-target="#AddEntryModal"><i class="fas fa-plus fa-sm text-white-50"></i> Add Entry
        </button>

        <!-- Modal -->
        <div class="modal fade" id="AddEntryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Entry</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 18px;"><i class="fas fa-times"></i></span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                                <div class="form-group row">
                                    <label for="selectCategory" class="col-sm-3">Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="selectCategory" id="selectCategory">
                                            <option value="none" selected disabled hidden>Select Category</option>
                                            <option value="Transportation">Transportation</option>
                                            <option value="Allowance">Allowance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEntryDescription" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="description" class="form-control" name="inputEntryDescription" id="inputEntryDescription" placeholder="i.e Transportation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputAmount" class="col-sm-3 col-form-label">Amount</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="inputAmount" id="inputAmount" placeholder="000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputDate" class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="inputDate" id="inputDate">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <table class="table" id="ledger-table">
                <thead class="">
                    <tr>
                    <th class="column1" name="th-date" id="th-date">Date</th>
                    <th class="column2" name="th-entry-description" id="th-entry-description">Description</th>
                    <th class="column3" name="th-entry-category" id="th-entry-category">Category</th>
                    <th class="column4" name="th-amount" id="th-amount">Amount</th>
                    <th class="column5" name="th-delete" id="th-delete"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="column1" name="entry-date" id="entry-date">05/26/20</td>
                        <td class="column2" name="entry-description" id="entry-description">Fair to School</td>
                        <td class="column3" name="entry-category" id="entry-category">Transportation</td>
                        <td class="column4" name="entry-amount" id="entry-amount">(20)</td>
                        <td class="column5" name="entry-delete" id="entry-delete">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-outline-danger" id="delete-entry-btn" data-toggle="modal" data-target="#deleteEntryModal">
                            Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteEntryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Entry</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="font-size: 18px;"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete this entry?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection