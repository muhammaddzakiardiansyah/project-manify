@extends('components.main')

@section('app')
    <section class="section">
        <div class="row" id="basic-table">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table All Items</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="button">
                                <a href="/dashboard/all-items/create" class="btn btn-primary">Create</a>
                            </div>
                            <div class="search d-flex gap-2">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search anyware...">
                                <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <th>ITEM NAME</th>
                                        <th>AMOUNT</th>
                                        <th>STATUS</th>
                                        <th>PLACE</th>
                                        <th>DESCRIPTION</th>
                                        <th>AUTHOR</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">Michael Right</td>
                                        <td>$15/hr</td>
                                        <td class="text-bold-500">UI/UX</td>
                                        <td class="text-bold-500">UI/UX</td>
                                        <td class="text-bold-500">UI/UX</td>
                                        <td class="text-bold-500">UI/UX</td>
                                        <td>
                                            <a href="/dashboard/all-items/edit"><i class="bi bi-pencil text-warning"></i></a> | <a href="/dashboard/all-items/delete"><i class="bi bi-trash text-danger"></i></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">Morgan Vanblum</td>
                                        <td>$13/hr</td>
                                        <td class="text-bold-500">Graphic concepts</td>
                                        <td class="text-bold-500">Graphic concepts</td>
                                        <td class="text-bold-500">Graphic concepts</td>
                                        <td class="text-bold-500">Graphic concepts</td>
                                        <td>
                                            <a href="/dashboard/all-items/edit"><i class="bi bi-pencil"></i></a> | <a href="/dashboard/all-items/delete"><i class="bi bi-trash"></i></a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
