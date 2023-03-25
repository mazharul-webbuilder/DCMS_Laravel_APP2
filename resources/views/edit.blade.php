@extends('master')
@section('title')
    Edit {{$data->month}}
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="">
                        <h2 class="text-center py-3 text-capitalize">{{$data->month}} Calculation Edit Form</h2>
                    </div>
                    <div class="card border-0">
                        <div class="card-body">
                            <form action="{{route('data.update', ['id' => $data->id])}}" method="POST">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="month" class="form-label">Enter Current Month</label>
                                    </div>
                                    <div class="col-md-5">
                                        <select name="month" required id="month" class="form-control">
                                            <option value="">------Select Option------</option>
                                            <option value="january" {{$data->month == 'january' ? 'selected' : ''}}>January</option>
                                            <option value="february" {{$data->month == 'february' ? 'selected' : ''}}>February</option>
                                            <option value="march" {{$data->month == 'march' ? 'selected' : ''}}>March</option>
                                            <option value="april" {{$data->month == 'april' ? 'selected' : ''}}>April</option>
                                            <option value="may" {{$data->month == 'may' ? 'selected' : ''}}>May</option>
                                            <option value="june" {{$data->month == 'june' ? 'selected' : ''}}>June</option>
                                            <option value="july" {{$data->mont == 'july' ? 'selected' : ''}}>July</option>
                                            <option value="august" {{$data->mont == 'august' ? 'selected' : ''}}>August</option>
                                            <option value="september" {{$data->mont == 'september' ? 'selected' : ''}}>September</option>
                                            <option value="october" {{$data->mont == 'october' ? 'selected' : ''}}>October</option>
                                            <option value="november" {{$data->mont == 'november' ? 'selected' : ''}}>November</option>
                                            <option value="december" {{$data->month == 'december' ? 'selected' : ''}}>December</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="year" class="form-control" placeholder="Enter Year" value="{{$data->year}}">
                                    </div>

                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="total_meal" class="form-label">Total Meal</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$data->total_meal}}" required class="form-control" min="50" max="400" id="total_meal" name="total_meal" placeholder="Total Meal Of This Month">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="overall_cost" class="form-label">Overall Cost</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" value="{{$data->overall_cost}}" required class="form-control"  id="overall_cost" name="overall_cost" placeholder="Including Cooker & Utility Bill">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="overall_cost" class="form-label">Utility Cost</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" value="{{$data->utility_pay}}" required class="form-control" id="overall_cost" name="utility_pay" placeholder="Exclude Food Cost">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="overall_cost" class="form-label">Utility Have To Pay</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" value="{{$data->utility_have_to_pay}}" required class="form-control" id="overall_cost" name="utility_have_to_pay" placeholder="Utility Due">
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="afran" class="form-label">Afran Mahmud</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="afran_toal_meal" value="{{$data->afran_toal_meal}}" class="form-control" id="afran" placeholder="Afran Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" value="{{$data->afran}}" required name="afran" class="form-control" id="afran" placeholder="Afran Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="mazharul" class="form-label">Mazharul Islam</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="mazharul_total_meal" value="{{$data->mazharul_total_meal}}" class="form-control" id="mazharul" placeholder="Mazharul Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="mazharul" class="form-control" value="{{$data->mazharul}}" id="mazharul" placeholder="Mazharul Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="rasel" class="form-label">Rasel Al Manna</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="rasel_total_meal" value="{{$data->rasel_total_meal}}" class="form-control" id="rasel" placeholder="Rasel Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="rasel" class="form-control" value="{{$data->rasel}}" id="rasel" placeholder="Rasel Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="mostofa" class="form-label">Golam Mostofa</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="mostofa_total_meal" value="{{$data->mostofa_total_meal}}" class="form-control" id="mostofa" placeholder="Mostofa Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="mostofa" class="form-control" value="{{$data->mostofa}}" id="mostofa" placeholder="Mostofa Total Meal">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="arafat"  class="form-label">Shopnil Arafat</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="arafat_total_meal" value="{{$data->arafat_total_meal}}" class="form-control" id="arafat" placeholder="Arafat Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="arafat" value="{{$data->arafat}}" class="form-control" id="arafat" placeholder="Arafat Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="nirob" class="form-label">Nirob Samad</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="nirob_total_meal" value="{{$data->nirob_total_meal}}" class="form-control" id="nirob" placeholder="Nirob Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="nirob" class="form-control" value="{{$data->nirob}}" id="nirob" placeholder="Nirob Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="unknown" class="form-label">Unknown</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="unknown_total_meal" value="{{$data->unknown_total_meal}}"  class="form-control" id="unknown" placeholder="Unknown Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="unknown"  class="form-control" id="unknown" value="{{$data->unknown}}" placeholder="Unknown Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">

                                            </div>
                                            <div class="col-md-9">
                                                <input type="submit" class="btn btn-success">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
