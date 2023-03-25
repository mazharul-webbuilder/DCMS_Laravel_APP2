@extends('master')
@section('title')
    Calculation New
@endsection
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="">
                    <h2 class="text-center py-3">New Calculation Form</h2>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="month" class="form-label">Enter Current Month</label>
                                    </div>
                                    <div class="col-md-5">
                                        <select name="month" required id="month" class="form-control">
                                            <option value="">------Select Option------</option>
                                            <option value="january">January</option>
                                            <option value="february">February</option>
                                            <option value="march">March</option>
                                            <option value="april">April</option>
                                            <option value="may">May</option>
                                            <option value="june">June</option>
                                            <option value="july">July</option>
                                            <option value="august">August</option>
                                            <option value="september">September</option>
                                            <option value="october">October</option>
                                            <option value="november">November</option>
                                            <option value="december">December</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="year" class="form-control" placeholder="Enter Year">
                                    </div>

                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="total_meal" class="form-label">Total Meal</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" required class="form-control" min="50" max="400" id="total_meal" name="total_meal" placeholder="Total Meal Of This Month">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="overall_cost" class="form-label">Overall Cost</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control"  id="overall_cost" name="overall_cost" placeholder="Include Food & Utility Bill Not Cooker Bill">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="overall_cost" class="form-label">Utility Cost</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control" id="overall_cost" name="utility_pay" placeholder="Exclude Food Cost & Cooker Bill">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <label for="overall_cost" class="form-label">Utility Have To Pay</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control" id="overall_cost" name="utility_have_to_pay" placeholder="Cooker Bill & Other Utility Which not paid yet">
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="afran" class="form-label">Afran Mahmud</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="afran_toal_meal" class="form-control" id="afran" placeholder="Afran Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="afran" class="form-control" id="afran" placeholder="Afran Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="mazharul" class="form-label">Mazharul Islam</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="mazharul_total_meal" class="form-control" id="mazharul" placeholder="Mazharul Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="mazharul" class="form-control" id="mazharul" placeholder="Mazharul Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="rasel" class="form-label">Rasel Al Manna</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="rasel_total_meal" class="form-control" id="rasel" placeholder="Rasel Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="rasel" class="form-control" id="rasel" placeholder="Rasel Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="mostofa" class="form-label">Golam Mostofa</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="mostofa_total_meal" class="form-control" id="mostofa" placeholder="Mostofa Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="mostofa" class="form-control" id="mostofa" placeholder="Mostofa Total Meal">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="arafat"  class="form-label">Shopnil Arafat</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="arafat_total_meal" class="form-control" id="arafat" placeholder="Arafat Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="arafat" class="form-control" id="arafat" placeholder="Arafat Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="nirob" class="form-label">Nirob Samad</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="nirob_total_meal" class="form-control" id="nirob" placeholder="Nirob Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="nirob" class="form-control" id="nirob" placeholder="Nirob Spend This Month">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="unknown" class="form-label">Kawsar Ahmed</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" required name="unknown_total_meal"  class="form-control" id="unknown" placeholder="Kawsar Total Meal">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" required name="unknown"  class="form-control" id="unknown" placeholder="Kawsar Spend This Month">
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
