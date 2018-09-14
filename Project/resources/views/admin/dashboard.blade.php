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
                                <button id="time-picker" class="btn light-green lighten-2 dropdown-toggle"><i class="fa fa-calendar"></i>&nbsp;
                                    <span></span></button>
                            </p>
                            <div class="d-flex justify-content-between">
                                <p class="display-4 align-self-end" id="total-sale">Revenue: 0 VND</p>
                                <p class="align-self-end pb-2" style="font-size: 22px;" id="order-number">Order: </p>
                            </div>

                        </div>

                        <!-- Classic tabs -->
                        <div class="classic-tabs">

                            <!-- Nav tabs -->
                            <ul class="nav tabs-light-blue nav-fill" role="tablist">
                                <li class="nav-item ml-0">
                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel1001"
                                       role="tab">Sale chart</a>
                                </li>
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link waves-light" data-toggle="tab" href="#panel1002" role="tab">Follow</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link waves-light" data-toggle="tab" href="#panel1003" role="tab">Contact</a>--}}
                                {{--</li>--}}
                            </ul>

                            <div class="tab-content rounded-bottom">
                                <!--Panel 1-->
                                <div class="tab-pane fade in show active" id="panel1001" role="tabpanel">
                                    <div id="line_chart" class="justify-content-center"
                                         style="width: 100%; height: 600px"></div>
                                </div>
                                <!--/.Panel 1-->
                                <!--Panel 2-->
                                {{--<div class="tab-pane fade" id="panel1002" role="tabpanel">--}}
                                    {{--<p align="justify" class="font-small text-muted mx-1">Lorem ipsum dolor sit amet,--}}
                                        {{--consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus--}}
                                        {{--reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur.--}}
                                        {{--Tempora, placeat ratione porro voluptate odit minima.</p>--}}
                                    {{--<p align="justify" class="font-small text-muted mx-1">Lorem ipsum dolor sit amet,--}}
                                        {{--consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus--}}
                                        {{--reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur.--}}
                                        {{--Tempora, placeat ratione porro voluptate odit minima.</p>--}}
                                {{--</div>--}}
                                <!--/.Panel 2-->
                                <!--Panel 3-->
                                {{--<div class="tab-pane fade" id="panel1003" role="tabpanel">--}}
                                    {{--<img class="img-fluid z-depth-1 rounded mb-3" alt="sample image"--}}
                                         {{--src="https://mdbootstrap.com/img/Photos/Others/intro1.jpg">--}}
                                    {{--<p align="justify" class="font-small text-muted mx-1">Lorem ipsum dolor sit amet,--}}
                                        {{--consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus--}}
                                        {{--reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur.--}}
                                        {{--Tempora, placeat ratione porro voluptate odit minima at ipsum sit amet.</p>--}}
                                {{--</div>--}}
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
                    <div class="table-editable table-responsive">
                        <table id="table-data" class="table table-bordered table-responsive-md table-striped text-center">
                            <tr>
                                <th class="text-center id-col">ID</th>
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">Receiver Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Order time</th>
                                <th class="text-center">Total Price</th>
                            </tr>

                        </table>
                    </div>


                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->

        </section>
        <!--/Section: Main chart-->

    </div>

    {{--Script--}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script type="text/javascript" src="{{asset('js/dashboard.js')}}"></script>

    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function () {--}}
            {{--google.charts.load('current', {'packages': ['line']});--}}
            {{--var start = moment().subtract(1, 'months');--}}
            {{--var end = moment();--}}

            {{--$.ajax({--}}
                {{--'url': '/get-sale-api',--}}
                {{--'method': 'GET',--}}
                {{--'data': {--}}
                    {{--'start': start.format('YYYY-MM-DD'),--}}
                    {{--'end': end.format('YYYY-MM-DD'),--}}
                    {{--'_token': $('meta[name="csrf-token"]').attr('content')--}}
                {{--},--}}
                {{--success: function (response) {--}}
                    {{--var data = response.jsonData;--}}
                    {{--console.log(response);--}}
                    {{--drawChart(data);--}}
                {{--},--}}
                {{--error: function (response) {--}}
                    {{--console.log(response);--}}
                {{--}--}}
            {{--});--}}


            {{--function drawChart(data) {--}}
                {{--var tableData = new google.visualization.DataTable();--}}
                {{--tableData.addColumn('date', 'Ngày');--}}
                {{--tableData.addColumn('number', 'Doanh Thu');--}}
                {{--for (var i in data) {--}}
                    {{--tableData.addRow([new Date(data[i].day), parseFloat(data[i].total)]);--}}
                {{--}--}}

                {{--var options = {--}}
                    {{--chart: {--}}
                        {{--title: 'Doanh thu bán hàng của FPT Canteen',--}}
                        {{--subtitle: 'Đơn vị (VND)'--}}
                    {{--},--}}
                    {{--width: 900,--}}
                    {{--height: 500--}}
                {{--};--}}

                {{--var chart = new google.charts.Line(document.getElementById('line_chart'));--}}

                {{--chart.draw(tableData, google.charts.Line.convertOptions(options));--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}
@endsection