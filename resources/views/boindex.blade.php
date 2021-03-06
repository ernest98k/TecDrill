@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4> 
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- Different data widgets -->
        <!-- ============================================================== -->
        <!-- .row -->
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Utilizadores</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{count($users)}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Recrutamentos</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">{{count($recruitments)}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Opiniões</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{count($opinions)}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.row -->

        <!-- ============================================================== -->
        <!-- table -->
        <!-- ============================================================== -->
        <!-- <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                            <option>Janeiro 2020</option>
                            <option>Dezembro 2019</option>
                            <option>Novembro 2019</option>
                            <option>Outubro 2019</option>
                            <option>Setembro 2019</option>
                            <option>Agosto 2019</option>
                        </select>
                    </div>
                    <h3 class="box-title">REGISTOS</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NOME</th>
                                    <th>ESTADO</th>
                                    <th>DATA</th>
                                    <th>DETALHES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="txt-oflo">Admin</td>
                                    <td>ONLINE</td>
                                    <td class="txt-oflo">29, Dezembro, 2019</td>
                                    <td><a href="javacript:void(0)" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Detalhe</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="txt-oflo">Ernest Kuchernyuk</td>
                                    <td>OFFLINE</td>
                                    <td class="txt-oflo">10, Janeiro, 2020</td>
                                    <td><a href="javacript:void(0)" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Detalhe</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="txt-oflo">Eduardo Gonçalves</td>
                                    <td>OFFLINE</td>
                                    <td class="txt-oflo">11, Janeiro, 2020</td>
                                    <td><a href="javacript:void(0)" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Detalhe</a></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- ============================================================== -->
        <!-- chat-listing & recent comments -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-8 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Recrutamento Recente</h3>
                        @foreach($recruitments as $recruitment)
                            <div class="comment-center p-t-10">
                                <div class="comment-body">
                                    <div class="mail-contnet">
                                        <h5>{{$recruitment->name}}</h5><span class="time">{{$recruitment->email}}</span>
                                        <br/><span class="mail-desc">{{$recruitment->observation}}</span> <a href="{{route('recruitments.index')}}" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Ver Mais</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Opiniões Recentes
                            </div>
                            <div class="panel-body">
                                <ul class="chatonline">
                                    @foreach($opinions as $opinion)
                                        <li>
                                            <div class="comment-center p-t-10">
                                                <div class="comment-body">
                                                <div class="mail-contnet">                                            
                                                    <h5>{{$opinion->name}}</h5><span class="time">{{$opinion->email}}</span>
                                                    <br/><span class="mail-desc">{{$opinion->opinion}}</span> <a href="{{route('opinions.index')}}" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Ver Mais</a>
                                                </div>
                                            </div>
                                        </li>                                
                                    @endforeach                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
    @endsection
