@extends('master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" align="center">
<form method="post" role="form">
                    <div class="panel-body">
                        <h1>SALES ORDER SUMMARY REPORT</h1>
                        From: <input type="date" id="fromDate" name="fromDate" class="btn btn-primary btn-md" style="font-size: 15px">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        To: <input type="date" id="toDate" name="toDate" class="btn btn-primary btn-md" style="font-size: 15px">
                        <br><br>
                        <table class="table table-bordered table-striped" id="reportTable">
                        <tr>
                            <thead>
                                <th><small>CODE</small></th>
                                <th ><small>DATE ISSUED</small></th>
                                <th ><small>DATE DELIVERED</small></th>
                                <th ><small>ITEM CODE</small></th>
                                <th ><small>QUANTITY</small></th>
                            </thead>
                        </tr>
                        <tr>
                            <tbody>
                            </tbody>
                        </tr>
                    </table>
                    <div class="form-group">
                        <button type="button" id="createReport" name="createReport" class="btn btn-outline btn-primary btn-lg" onclick="salesReport()">CREATE REPORT</button>
                        <button type="button" id="clr" class="btn btn-outline btn-danger btn-lg">CLEAR DATA</button>
                        <br><br>
                        <!-- <button type="button" class="btn btn-outline btn-primary btn-lg">CREATE PDF</button> -->
                        <button type="button" class="btn btn-outline btn-danger btn-lg">CANCEL</button>
                    </div>
                </form>
            <!-- /.container-fluid -->
        <!-- /#page-wrapper -->
            </div>
        </div>
    </div>
</div>

@stop