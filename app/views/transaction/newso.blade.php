@extends('../master')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Sales Order</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New Sales Order
                        </div>
    <form role="form" method = "post"  action="{{URL::to('/add-soh')}}" id = "new_sales">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Sales Order #:</label>
                                            <input class="form-control" placeholder="Sales Order #" value = "{{$code}}" readonly  id = "sohcode" name = "sohcode">
                                        </div>
                                        <div class="form-group">
                                            <label>Purchase Order #</label>
                                            <input class="form-control" placeholder="Purchase Order #" id = "pocode" name ="pocode">
                                        </div>
                                        <h4>Order Details</h4>
                                        <div class="form-group">
                                            <label>Payment Method</label>
                                            <select class="form-control" id = "pmethod" name = "pmethod">
                                                <option value = "1">Credit Card</option>
                                                <option value = "2">Cash</option>
                                                <option value = "3">Check</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Terms</label>
                                            <select class="form-control" id = "pterms" name = "pterms">
                                                <option value = "1">Cash on Delivery</option>
                                                <option value = "2">15 days</option>
                                                <option value = "3">30 days</option>
                                                <option value = "4">60 days</option>
                                                <option value = "5">120 days</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Shipping Address</label>
                                            <textarea class="form-control" rows="3" id = "saddress" name = "saddress"></textarea>
                                        </div>           
                                        <div class="form-group">
                                            <label>Billing Address</label>
                                            <textarea class="form-control" rows="3" id = "baddress" name = "baddress"></textarea>
                                        </div>                            
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                   
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input class="form-control" placeholder="Date" id = "date" name = "date" value = "{{date('Y-m-d');}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Delivery Date:</label>
                                            <input class="form-control" placeholder="Delivery Date" id = "ddate" name = "ddate">
                                        </div>
                                        <h4>Customer Details</h4>
                                             <div class="form-group">
                                            <label>Customer Name:</label>
                                            <select class="form-control" id = "cust_name" onchange="onChange()" name = "cust_name">
                                                @foreach($cust as $c)
                                                <option value ="{{$c->strCustCode}}">{{$c->strCustName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Address:</label>
                                            <textarea class="form-control" rows="3" readonly id = "new_add" name = "new_add"></textarea>
                                        </div>    
                                        <div class="form-group">
                                            <label>Contact #:</label>
                                            <input class="form-control" placeholder="Contact #" readonly id = "new_contact" name= "new_contact">
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address:</label>
                                            <input class="form-control" placeholder="Email Address" readonly id = "new_email" name= "new_email">
                                        </div>
                                        <div class="form-group">
                                            <label>Requestor:</label>
                                            <input class="form-control" placeholder="Requestor"  id = "new_req" name= "new_req">
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
                <div class="col-lg-4">
                        <!-- /.panel-heading -->
                        <div class="form-group">
                            <label>Payment Terms</label>
                            <select class="form-control" id = "add_item" name = "add_item">
                                @foreach($item as $i)
                                    <option value = "{{$i->strItemCode}}">{{$i->strItemName}}</option>
                                @endforeach
                            </select>
                        </div>
            </div>
            <div class="col-lg-4">
                        <!-- /.panel-heading -->
                        <div class="form-group">
                            <label>Quantity:</label>
                            <input class="form-control" placeholder="Quantity" id = "add_qty" name= "add_qty">
                           
                        </div>
            </div>
            <div class="col-lg-4">
                        <!-- /.panel-heading -->
                        <div class="form-group">
                            <label>   </label>
                            <button  type="button" class="form-control" id = "add_new_prod">+</button>
                           
                        </div>
            </div>
<div class = "row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Products
                        </div>
                        <!-- /.panel-heading -->
                        <div class="table-responsive" >
                                <table class="table" id = "add_table">
                                    <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>
            <div class = "row">
                <div class="col-lg-12">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="submit" id="btngo" name="btngo" class="btn btn-outline btn-success">Save</button>
                            <button  type="button" class="btn btn-outline btn-danger">Clear</button>
                             <button  type="button" class="btn btn-outline btn-danger" id = "btnalert">alert</button>

                    <!-- /.panel -->
                </div>
            </div>
        </div>
        </form>
        
@stop