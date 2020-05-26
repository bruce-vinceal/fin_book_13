@extends('layouts.dashboard-layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category Management</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CreateCategoryModal"><i class="fas fa-plus fa-sm text-white-50"></i> Create Category
        </button>

        <!-- Modal -->
        <div class="modal fade" id="CreateCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 18px;"><i class="fas fa-times"></i></span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                                <div class="form-group row">
                                    <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="description" class="form-control" id="inputDescription" placeholder="i.e Transportation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="selectType" class="col-sm-3">Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="selectType">
                                            <option value="none" selected disabled hidden>Select Type</option>
                                            <option>Expense</option>
                                            <option>Income</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table class="table" id="category-management-table">
            <thead class="">
                <tr>
                <th class="column1">Description</th>
                <th class="column2">Type</th>
                <th class="column3"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="column1">Transportation</td>
                    <td class="column2">Expense</td>
                    <td class="column3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#EditCategoryModal">Edit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="EditCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="font-size: 18px;"><i class="fas fa-times"></i></span>
                                        </button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                                <div class="form-group row">
                                                    <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
                                                    <div class="col-sm-9">
                                                        <input type="description" class="form-control" id="inputDescription" value="Transportation" placeholder="i.e Transportation">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="selectType" class="col-sm-3">Type</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" id="selectType">
                                                            <option selected>Expense</option>
                                                            <option>Income</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
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