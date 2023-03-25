@extends('master')
@section('title')
    Manage All
@endsection
@section('content')
    <section class="py-5">
        <div class="">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="">
                        <h2 class="text-center py-2">Manage All Record</h2>
                    </div>
                    <div class="card border-0">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                    <th>Meal Rate</th>
                                    <th>Utility Rate</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td class="text-capitalize">{{$item->month}}</td>
                                    <td>{{$item->year}}</td>
                                    <td>{{$item->meal_rate}}</td>
                                    <td>{{$item->utility_rate}}</td>
                                    <td>
                                        <a href="{{ route('data.show', ['id' => $item->id]) }}" class="btn bg-success text-white">Detail</a>
                                        <a href="{{ route('data.edit', ['id' => $item->id]) }}" class="btn btn-danger">Edit</a>
                                        <a href="{{ route('data.pdf', ['id' => $item->id]) }}" class="btn btn-info">Download PDF</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
