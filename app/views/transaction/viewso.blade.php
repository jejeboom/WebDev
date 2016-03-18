@extends('../master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sales and Order Summary Report</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Sales Order #:</label>
                            <input class="form-control" placeholder="Sales Order #">
                        </div>
                        <div class="form-group">
                            <label>Purchase Order #</label>
                            <input class="form-control" placeholder="Purchase Order #">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Date:</label>
                            <input class="form-control" placeholder="Date">
                        </div>
                        <div class="form-group">
                            <label>Delivery Date:</label>
                            <input class="form-control" placeholder="Delivery Date">
                        </div>
                    </div>


                    <table class="table table-bordered table-striped">
                        <tr>
                            <thead>
                                <th><small>CODE</small></th>
                                <th ><small>DESCRIPTION</small></th>
                                <th ><small>PRICE</small></th>
                                <th ><small>QUANTITY</small></th>
                                <th ><small>TOTAL</small></th>
                            </thead>
                        </tr>
                        <tr>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </tr>
                    </table>

                    <tr>
                       <button type="button" class="btn btn-primary btn-lg btn-block">SAVE</button>
                       <button type="button" class="btn btn-danger btn-lg btn-block">CANCEL</button>
                    </tr>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@stop