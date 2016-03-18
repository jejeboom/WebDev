@extends('../master')

@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Maintenance</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Maintenance
                        </div>
                                    <form role="form" method="post" id="custForm" action="{{URL::to('/add-customer')}}">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group" hidden="">
                                            <label>Customer Code:</label>
                                            <input class="form-control" id="custCode" name="custCode" placeholder="Customer Code">
                                        </div>
										<div class="form-group">
                                            <label>Company Name:</label>
                                            <input class="form-control" id="compName" name="compName" placeholder="Company Name">
                                        </div>
										<h4>Contact Person:</h4>
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input class="form-control" id="custName" name="custName" placeholder="Customer Name">
                                        </div>
								</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
										<h4>Contact Details</h4>
                                        <div class="form-group">
                                            <label>Contact #:</label>
                                            <input class="form-control" id="custNum" name="custNum" placeholder="Contact #">
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address:</label>
                                            <input class="form-control" id="emailadd" name="emailadd" placeholder="Email Address">
										</div>
                                        <div class="form-group">
                                            <label>Shipping and Billing Address:</label>
                                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                        </div>
                                </div>
                        <!-- /.panel-heading -->
                        <center><div class="form-group">
                            <button  type="submit" id="addCust" class="btn btn-primary">ADD</button>
                            <button type="submit" id="editCust" class="btn btn-success">UPDATE</button>
                            <button type="submit" id="delCust" class="btn btn-danger">DELETE</button>
                            <button  type="submit" id="clearCust" class="btn btn-warning">CLEAR</button>
                        </div>
                    </form>
                    <!-- /.panel -->
                </div>
            </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class = "row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							List of Customers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="custTable">
                                    <thead>
                                        <tr>
                                            <th>Customer Code</th>
                                            <th>Customer Name</th>
                                            <th>Contact #</th>
                                            <th>Email Address</th>
                                            <th>Shipping and Billing Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($cust as $cust) 
                                            <tr>
                                                <td>{{$cust->strCustCode}}</td>
                                                <td>{{$cust->strCustName}}</td>
                                                <td>{{$cust->strCustContactNumber}}</td>
                                                <td>{{$cust->strCustEmailAdd}}</td>
                                                <td>{{$cust->strCustAddress}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
           
        </div>
@stop