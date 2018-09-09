@extends('layout.master', [
    'page_title'=>'Admin Homepage | FPTcanteen Admin Page',
    'current_page'=>'home_page',
])
@section('content')


    <div class="container-fluid">

        <!--Heading & Date-->
        <div class="row mb-5 mt-lg-5">

            <!--First column-->
            <div class="col-md-6 panel-title mb-5 mt-3">
                <h5><span class="px-4 py-3 white-text z-depth-1-half blue lighten-1" style="
                        border-radius: 5px;">Search analitycs</span></h5>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-6">

                <div class="card">
                    <div class="card-body pb-1">

                        <div class="row">

                            <div id="time-picker" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                <i class="fa fa-calendar"></i>&nbsp;
                                <span></span> <i class="fa fa-caret-down"></i>
                            </div>
                            <button  class="btn btn-info">Click Here</button>

                        </div>

                    </div>
                </div>

            </div>
            <!--/Second column-->

        </div>
        <!--Heading & Date-->

        <!--Section: Main chart-->
        <section>

            <!--Card-->
            <div class="card card-cascade narrower">

                <!--Card image-->
                <div class="view gradient-card-header blue-gradient">
                    <canvas id="chart" style="height: 500px; width: 800px;"></canvas>
                </div>
                <!--/Card image-->

                <!--Card content-->
                <div class="card-body blue-panel text-center">

                    <!--Second row-->
                    <div class="row mx-3 mb-0 text-center">
                        <div class="col mt-1 mb-2">

                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn btn-info btn-md active">
                                    <input type="checkbox" name="options" id="option1" autocomplete="off" checked>Clicks <strong>1000</strong> <i class="fa fa-arrow-up ml-2 white-text"></i> <strong> 25%</strong>
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn btn-info btn-md">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off">Impressions <strong>1000</strong> <i class="fa fa-arrow-up ml-2 white-text"></i> <strong> 25%</strong>
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn red accent-2 btn-md">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off">CTR <strong>5%</strong> <i class="fa fa-arrow-down ml-2 white-text"></i> <strong> 25%</strong>
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn red accent-2 btn-md">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off">Position <strong>4.14</strong> <i class="fa fa-arrow-down ml-2 white-text"></i> <strong> 25%</strong>
                                </label>
                            </div>

                        </div>
                    </div>
                    <!--/Second row-->

                    <!--Third row-->
                    <div class="row mx-3 mb-5 text-center">

                        <!--First column-->
                        <div class="col">

                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn btn-primary btn-md">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>Queries
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn btn-primary btn-md">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Pages
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn btn-primary btn-md">
                                    <input type="radio" name="options" id="option3" autocomplete="off">Countries
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn btn-primary btn-md">
                                    <input type="radio" name="options" id="option4" autocomplete="off">Devices
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn btn-primary btn-md">
                                    <input type="radio" name="options" id="option4" autocomplete="off">Search type
                                </label>
                            </div>

                        </div>
                        <!--/Second column-->

                    </div>
                    <!--/Third row-->

                    <!--Third row-->
                    <div class="row mb-0">
                        <!--First column-->
                        <div class="col-md-12">

                            <!--Panel content-->
                            <div class="card-body pt-0">
                                <!--Table-->
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <!--Table head-->
                                        <thead class="rgba-stylish-strong white-text">
                                        <tr>
                                            <th>Queries</th>
                                            <th>Clicks</th>
                                            <th>Impressions</th>
                                            <th>CTR</th>
                                            <th>Position</th>
                                            <th>Day</th>
                                            <th>Week</th>
                                            <th>Month</th>
                                            <th>Local</th>
                                            <th>Global</th>
                                        </tr>
                                        </thead>
                                        <!--/Table head-->

                                        <!--Table body-->
                                        <tbody>
                                        <tr class="none-top-border">
                                            <td>bootstrap material design</td>
                                            <td>1000</td>
                                            <td>10000</td>
                                            <td>5%</td>
                                            <td>3.21</td>
                                            <td>2 <span class="badge primary-color">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                            <td>2 <span class="badge red accent-2">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                            <td>2 <span class="badge grey">0 </span></td>
                                            <td>200 (US)</td>
                                            <td>2000</td>
                                        </tr>
                                        <tr>
                                            <td>bootstrap material design</td>
                                            <td>1000</td>
                                            <td>10000</td>
                                            <td>5%</td>
                                            <td>3.21</td>
                                            <td>2 <span class="badge primary-color">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                            <td>2 <span class="badge red accent-2">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                            <td>2 <span class="badge grey">0 </span></td>
                                            <td>200 (US)</td>
                                            <td>2000</td>
                                        </tr>
                                        <tr>
                                            <td>bootstrap material design</td>
                                            <td>1000</td>
                                            <td>10000</td>
                                            <td>5%</td>
                                            <td>3.21</td>
                                            <td>2 <span class="badge primary-color">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                            <td>2 <span class="badge red accent-2">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                            <td>2 <span class="badge grey">0 </span></td>
                                            <td>200 (US)</td>
                                            <td>2000</td>
                                        </tr>

                                        </tbody>
                                        <!--/Table body-->
                                    </table>

                                </div>
                                <!--/Table-->

                                <!--Bottom Table UI-->
                                <div class="d-flex justify-content-between">

                                    <!--Name-->
                                    <select class="mdb-select colorful-select dropdown-primary mt-2">
                                        <option value="" disabled >Rows number</option>
                                        <option value="1" selected>5 rows</option>
                                        <option value="2">25 rows</option>
                                        <option value="3">50 rows</option>
                                        <option value="4">100 rows</option>
                                    </select>

                                    <!--Pagination -->
                                    <nav class="my-4">
                                        <ul class="pagination pagination-circle pg-blue mb-0">

                                            <!--First-->
                                            <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

                                            <!--Arrow left-->
                                            <li class="page-item disabled">
                                                <a class="page-link" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>

                                            <!--Numbers-->
                                            <li class="page-item active"><a class="page-link">1</a></li>
                                            <li class="page-item"><a class="page-link">2</a></li>
                                            <li class="page-item"><a class="page-link">3</a></li>
                                            <li class="page-item"><a class="page-link">4</a></li>
                                            <li class="page-item"><a class="page-link">5</a></li>

                                            <!--Arrow right-->
                                            <li class="page-item">
                                                <a class="page-link" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>

                                            <!--First-->
                                            <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

                                        </ul>
                                    </nav>
                                    <!--/Pagination -->

                                </div>
                                <!--Bottom Table UI-->

                            </div>
                            <!--/.Panel content-->

                        </div>
                        <!--/First column-->
                    </div>
                    <!--/Third row-->

                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->

        </section>
        <!--/Section: Main chart-->

    </div>

    <script>
        $(document).ready(function () {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#time-picker').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                "locale": {
                    "format": "MM/DD/YYYY",
                    "separator": " - ",
                    "applyLabel": "Apply",
                    "cancelLabel": "Cancel",
                    "fromLabel": "From",
                    "toLabel": "To",
                    "customRangeLabel": "Custom",
                    "weekLabel": "W",
                    "daysOfWeek": [
                        "Su",
                        "Mo",
                        "Tu",
                        "We",
                        "Th",
                        "Fr",
                        "Sa"
                    ],
                    "monthNames": [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                        "July",
                        "August",
                        "September",
                        "October",
                        "November",
                        "December"
                    ],
                    "firstDay": 1
                },
                "alwaysShowCalendars": true,
                "startDate": "09/02/2018",
                "endDate": "09/08/2018",
                "maxDate": Date.now()
            }, function(start, end, label) {
                $('#time-picker > span').text(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
    </script>
@endsection