@extends('layouts.dashboard-layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category Management</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" id="create-category-btn" data-toggle="modal" data-target="#CreateCategoryModal"><i class="fas fa-plus fa-sm text-white-50"></i> Create Category
        </button>

        <!-- Modal -->
        <div class="modal fade" id="CreateCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create-category-title">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 18px;"><i class="fas fa-times"></i></span>
                        </button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                                <div class="form-group row">
                                    <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="description" class="form-control" name="inputDescription" id="inputDescription" placeholder="i.e Transportation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="selectType" class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="selectType" id="selectType">
                                            <option value="none" selected disabled hidden>Select Type</option>
                                            <option value="Expense">Expense</option>
                                            <option value="Income">Income</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" id="close-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="create-btn">Create</button>
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
            <table class="table" name="category-management-table" id="category-management-table">
            <thead class="">
                <tr>
                <th class="column1" name="th-description" id="th-description">Description</th>
                <th class="column2" name="th-type" id="th-type">Type</th>
                <th class="column3" name="th-edit" id="th-edit"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="column1" name="category-desciption" id="category-description">Transportation</td>
                    <td class="column2" name="category-type" id="category-type">Expense</td>
                    <td class="column3" name="category-edit" id="category-edit">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-outline-primary" id="edit-category-btn" data-toggle="modal" data-target="#EditCategoryModal">Edit
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
                                                    <label for="editDescription" class="col-sm-3 col-form-label">Description</label>
                                                    <div class="col-sm-9">
                                                        <input type="description" class="form-control" name="editDescription" id="editDescription" value="Transportation" placeholder="i.e Transportation">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="editType" class="col-sm-3 col-form-label">Type</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="editType" id="editType">
                                                            <option value="Expense" selected>Expense</option>
                                                            <option value="Income">Income</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary" id="update-btn">Update</button>
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