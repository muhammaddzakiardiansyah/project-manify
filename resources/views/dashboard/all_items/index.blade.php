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
                            <div class="search">
                                <form action="" method="get" class="d-flex gap-2">
                                    <input type="text" name="search" id="search" class="form-control"
                                        placeholder="Search anyware...">
                                    <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                                </form>
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
                                    @foreach ($allItems as $item)
                                        <tr>
                                            <td class="text-bold-500">{{ $item->item_name }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td class="text-bold-500">
                                                <p
                                                    class="{{ $item->status == 'active'
                                                        ? 'bg-success'
                                                        : ($item->status == 'broken'
                                                            ? 'bg-danger'
                                                            : ($item->status == 'stock'
                                                                ? 'bg-info'
                                                                : ($item->status == 'mainten'
                                                                    ? 'bg-warning'
                                                                    : ''))) }} text-center px-2 text-white rounded">
                                                    {{ $item->status }}
                                                </p>
                                            </td>
                                            <td class="text-bold-500">{{ $item->place }}</td>
                                            <td class="text-bold-500">{{ $item->description }}</td>
                                            <td class="text-bold-500">{{ $item->user->name }}</td>
                                            <td>
                                                <a href="/dashboard/all-items/edit/{{ $item->id }}"><i
                                                        class="bi bi-pencil text-warning"></i></a> | <a
                                                    href="/dashboard/all-items/delete/{{ $item->id }}"><i
                                                        class="bi bi-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="">
                                {{ $allItems->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
