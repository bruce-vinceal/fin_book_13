@extends('layouts.dashboard-layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">
                    <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between">
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
                            <form action="/finote/ledger/{{$user->id}}" method="POST">
                            @csrf
                                <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="selectCategory" class="col-sm-3 col-form-label">Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="category" id="selectCategory" required>
                                                  @if($user->categories != 'none')
                                                    @foreach(array_keys($user->categories) as $category)
                                                      <option value=" {{ $category }} "> {{ $category }} </option>
                                                    @endforeach
                                                  @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEntryDescription" class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <input type="description" class="form-control" name="description" id="inputEntryDescription" placeholder="i.e Transportation" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputAmount" class="col-sm-3 col-form-label">Amount</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="amount" id="inputAmount" min="1" placeholder="0" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputDate" class="col-sm-3 col-form-label">Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="date" value="{{Carbon\Carbon::now()->format('Y-m-d')}}" class="form-control" name="inputDate" id="inputDate">
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
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                      @foreach($ledger as $note)
                        <tr>
                            <td class="column1" name="entry-date" id="entry-date"> {{ $note->date }} </td>
                            <td class="column2" name="entry-description" id="entry-description"> {{ $note->description }} </td>
                            <td class="column3" name="entry-category" id="entry-category"> {{ $note->category }} </td>
                            <td class="column4" name="entry-amount" id="entry-amount">
                              @if($note->type == 'Expense')
                                ({{ $note->amount }})
                              @else
                                {{ $note->amount }}
                              @endif
                            </td>
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
                                        <a href="/finote/ledger/{{$user->id}}/{{$note->id}}" class="btn btn-danger">Delete</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection