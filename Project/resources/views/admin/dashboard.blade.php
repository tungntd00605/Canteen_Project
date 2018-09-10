@extends('layout.master', [
    'page_title'=>'Admin Homepage | FPTcanteen Admin Page',
    'current_page'=>'home_page',
])
@section('content')


    <div class="container-fluid">
        <!--Section: Main chart-->
        <section>

            <!--Card-->
            <div class="card card-cascade narrower">

                <!--Card image-->
                <div class="view gradient-card-header blue-gradient">
                    <!-- Card -->
                    <div class="card chart-card">

                        <!-- Card content -->
                        <div class="card-body pb-0">

                            <!-- Title -->
                            <h3 class="card-title font-weight-bold">SALES</h3>
                            <!-- Text -->
                            <p class="card-text mb-4">
                                <div class="col-5" id="time-picker"
                                     style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span> <i class="fa fa-caret-down"></i>
                                </div>
                            </p>
                            <div class="d-flex justify-content-between">
                                <p class="display-4 align-self-end">887.32</p>
                                <p class="align-self-end pb-2">887.02 (.03%)</p>
                            </div>

                        </div>

                        <!-- Classic tabs -->
                        <div class="classic-tabs">

                            <!-- Nav tabs -->
                            <ul class="nav tabs-light-blue nav-fill" role="tablist">
                                <li class="nav-item ml-0">
                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel1001" role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel1002" role="tab">Follow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel1003" role="tab">Contact</a>
                                </li>
                            </ul>

                            <div class="tab-content rounded-bottom">
                                <!--Panel 1-->
                                <div class="tab-pane fade in show active" id="panel1001" role="tabpanel">
                                    <div id="line_chart" style="width: 100%; height: 600px"></div>
                                </div>
                                <!--/.Panel 1-->
                                <!--Panel 2-->
                                <div class="tab-pane fade" id="panel1002" role="tabpanel">
                                    <p align="justify" class="font-small text-muted mx-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                                    <p align="justify" class="font-small text-muted mx-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                                </div>
                                <!--/.Panel 2-->
                                <!--Panel 3-->
                                <div class="tab-pane fade" id="panel1003" role="tabpanel">
                                    <img class="img-fluid z-depth-1 rounded mb-3" alt="sample image" src="https://mdbootstrap.com/img/Photos/Others/intro1.jpg">
                                    <p align="justify" class="font-small text-muted mx-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima at ipsum sit amet.</p>
                                </div>
                                <!--/.Panel 3-->
                            </div>

                        </div>
                        <!-- Classic tabs -->

                    </div>
                    <!-- Card -->
                </div>
                <!--/Card image-->

                <!--Card content-->
                <div class="card-body blue-panel text-center">

                    <!--Second row-->
                    <div class="row mx-3 mb-0 text-center">
                        <div class="col mt-1 mb-2">

                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn btn-info btn-md active">
                                    <input type="checkbox" name="options" id="option1" autocomplete="off" checked>Clicks
                                    <strong>1000</strong> <i class="fa fa-arrow-up ml-2 white-text"></i> <strong>
                                        25%</strong>
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn btn-info btn-md">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off">Impressions
                                    <strong>1000</strong> <i class="fa fa-arrow-up ml-2 white-text"></i> <strong>
                                        25%</strong>
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn red accent-2 btn-md">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off">CTR
                                    <strong>5%</strong> <i class="fa fa-arrow-down ml-2 white-text"></i> <strong>
                                        25%</strong>
                                </label>
                            </div>
                            <div class="btn-group mt-1" data-toggle="buttons">
                                <label class="btn red accent-2 btn-md">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off">Position
                                    <strong>4.14</strong> <i class="fa fa-arrow-down ml-2 white-text"></i> <strong>
                                        25%</strong>
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
                                            <td>2 <span class="badge primary-color">1 <i
                                                            class="fa fa-arrow-circle-up"></i></span></td>
                                            <td>2 <span class="badge red accent-2">1 <i
                                                            class="fa fa-arrow-circle-down"></i></span></td>
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
                                            <td>2 <span class="badge primary-color">1 <i
                                                            class="fa fa-arrow-circle-up"></i></span></td>
                                            <td>2 <span class="badge red accent-2">1 <i
                                                            class="fa fa-arrow-circle-down"></i></span></td>
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
                                            <td>2 <span class="badge primary-color">1 <i
                                                            class="fa fa-arrow-circle-up"></i></span></td>
                                            <td>2 <span class="badge red accent-2">1 <i
                                                            class="fa fa-arrow-circle-down"></i></span></td>
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
                                        <option value="" disabled>Rows number</option>
                                        <option value="1" selected>5 rows</option>
                                        <option value="2">25 rows</option>
                                        <option value="3">50 rows</option>
                                        <option value="4">100 rows</option>
                                    </select>

                                    <!--Pagination -->
                                    <nav class="my-4">
                                        <ul class="pagination pagination-circle pg-blue mb-0">

                                            <!--First-->
                                            <li class="page-item disabled clearfix d-none d-md-block"><a
                                                        class="page-link">First</a></li>

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
                                            <li class="page-item clearfix d-none d-md-block"><a
                                                        class="page-link">Last</a></li>

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

    {{--Script--}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="{{asset('js/dashboard.js')}}"></script>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'Day');
            data.addColumn('number', 'Guardians of the Galaxy');
            data.addColumn('number', 'The Avengers');
            data.addColumn('number', 'Transformers: Age of Extinction');

            data.addRows([
                [1,  37.8, 80.8, 41.8],
                [2,  30.9, 69.5, 32.4],
                [3,  25.4,   57, 25.7],
                [4,  11.7, 18.8, 10.5],
                [5,  11.9, 17.6, 10.4],
                [6,   8.8, 13.6,  7.7],
                [7,   7.6, 12.3,  9.6],
                [8,  12.3, 29.2, 10.6],
                [9,  16.9, 42.9, 14.8],
                [10, 12.8, 30.9, 11.6],
                [11,  5.3,  7.9,  4.7],
                [12,  6.6,  8.4,  5.2],
                [13,  4.8,  6.3,  3.6],
                [14,  4.2,  6.2,  3.4]
            ]);

            var options = {
                chart: {
                    title: 'Box Office Earnings in First Two Weeks of Opening',
                    subtitle: 'in millions of dollars (USD)'
                },
                // width: 900,
                // height: 500
            };

            var chart = new google.charts.Line(document.getElementById('line_chart'));

            chart.draw(data, google.charts.Line.convertOptions(options));
        }
    </script>
@endsection