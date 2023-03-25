@extends('master')
@section('title')
    {{ucwords($data->month)}} Detail
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="">
                        <h2 class="py-2 text-center">Summary Of {{$data->month}}</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr class="bg-secondary">
                                    <th>Month</th>
                                    <td class="text-capitalize mt-1">{{$data->month}}</td>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <td>{{$data->year}}</td>
                                </tr>
                                <tr>
                                    <th>Total Meal</th>
                                    <td class="badge bg-secondary mt-1">{{$data->total_meal}}</td>
                                </tr>
                                <tr>
                                    <th>Overall Cost</th>
                                    <td>{{$data->overall_cost}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Food Cost</th>
                                    <td>{{$data->food_cost}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Utility Cost</th>
                                    <td>{{$data->utility_cost}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Meal Rate</th>
                                    <td class="badge bg-success mt-1">{{$data->meal_rate}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Utility Rate</th>
                                    <td class="badge bg-primary mt-1">{{$data->utility_rate}} .Tk</td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th>Afran Total Meal</th>
                                    <td>{{$data->afran_total_meal}}</td>
                                </tr>
                                <tr>
                                    <th>Afran Spend</th>
                                    <td>{{$data->afran_spend}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Afran Payable</th>
                                    <td class="badge bg-danger mt-1">{{$data->afran_payable > 0 ?
                                        "Will Pay " . abs($data->afran_payable) : "Will Get " .
                                    abs($data->afran_payable)}} .Tk</td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th>Mazharul Total Meal</th>
                                    <td>{{$data->mazharul_total_meal}}</td>
                                </tr>
                                <tr>
                                    <th>Mazharul Spend</th>
                                    <td>{{$data->mazharul_spend}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Mazharul Payable</th>
                                    <td class="badge bg-danger mt-1">{{$data->mazharul_payable > 0 ? "Will Pay " . abs($data->mazharul_payable) : "Will Get " .
                                    abs($data->mazharul_payable)}} .Tk</td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th>Rasel Total Meal</th>
                                    <td>{{$data->rasel_total_meal}}</td>
                                </tr>
                                <tr>
                                    <th>Rasel Spend</th>
                                    <td>{{$data->rasel_spend}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Rasel Payable</th>
                                    <td class="badge bg-danger mt-1">{{$data->rasel_payable > 0 ?
                                        "Will Pay " . abs($data->rasel_payable) : "Will Get " .
                                    abs($data->rasel_payable)}} .Tk</td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th>Mostofa Total Meal</th>
                                    <td>{{$data->mostofa_total_meal}}</td>
                                </tr>
                                <tr>
                                    <th>Mostofa Spend</th>
                                    <td>{{$data->mostofa_spend}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Mostofa Payable</th>
                                    <td class="badge bg-danger mt-1">{{$data->mostofa_payable > 0 ? "Will Pay " . abs($data->mostofa_payable) : "Will Get " .
                                    abs($data->mostofa_payable)}} .Tk</td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th>Arafat Total Meal</th>
                                    <td>{{$data->arafat_total_meal}}</td>
                                </tr>
                                <tr>
                                    <th>Arafat Spend</th>
                                    <td>{{$data->arafat_spend}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Arafat Payable</th>
                                    <td class="badge bg-danger mt-1">{{$data->arafat_payable > 0 ?
                                        "Will Pay " . abs($data->arafat_payable) : "Will Get " .
                                    abs($data->arafat_payable)}} .Tk</td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th>Nirob Total Meal</th>
                                    <td>{{$data->nirob_total_meal}}</td>
                                </tr>
                                <tr>
                                    <th>Nirob Spend</th>
                                    <td>{{$data->nirob_spend}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Nirob Payable</th>
                                    <td class="badge bg-danger mt-1">{{$data->nirob_payable > 0 ?"Will Pay " . abs($data->nirob_payable) : "Will Get " . abs($data->nirob_payable)}} .Tk</td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th>Kawsar Total Meal</th>
                                    <td>{{$data->unknown_total_meal}}</td>
                                </tr>
                                <tr>
                                    <th>Kawsar Spend</th>
                                    <td>{{$data->unknown_spend}} .Tk</td>
                                </tr>
                                <tr>
                                    <th>Kawsar Payable</th>
                                    <td class="badge bg-danger mt-1">{{$data->unknown_payable > 0 ? "Will Pay " . abs($data->unknown_payable) : "Will Get " . abs($data->unknown_payable)}} .Tk</td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th>Cooker Bill</th>
                                    <td class="badge bg-danger mt-1">{{$data->cooker_bill < 0 ? "Will Get " . abs($data->cooker_bill)
                                    : '' }} .Tk</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
