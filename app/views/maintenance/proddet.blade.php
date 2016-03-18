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
                            Product Details Maintenance
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method = "post" id = "prod_form"  action ="{{URL::to('/add-category')}}">
										<div class="form-group" hidden = "">
                                            <label>Product Code:</label>
                                            <input class="form-control" id = "prodid" name= "prodid" placeholder="CAT000">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Name:</label>
                                            <input class="form-control" id = "prodname" name= "prodname" placeholder="Prod Name">
                                        </div>
										<div class="form-group">
                                            <label>Category:</label>
                                            <select class="form-control" id = "catecode" name= "catecode" >
                                                @foreach($cate as $c)
                                                <option value = "{{$c->strCateCode}}">{{$c->strCateName}}</option>
                                                @endforeach
                                            </select>
                                        </div><div class="form-group">
                                            <label>Price:</label>
                                            <input type="number" class="form-control" id = "prodprice" name= "prodprice" placeholder="Price">
                                        </div>
                                        <div class="form-group">
                                            <button  type="submit" class="btn btn-primary" id ="add_prod">ADD</button>
                                            <button type="submit" class="btn btn-success" id = "edit_prod">UPDATE</button>
                                            <button type="submit" class="btn btn-danger" id = "delete_prod">DELETE</button>
                                            <button  type="button" class="btn btn-warning" id = "clear_prod">CLEAR</button>
                                        </div>
									</form>
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
							List of Products
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table" id = "prod_table">
                                    <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($prod as $p)
                                            <tr>
                                                <td>{{$p->strItemCode}}</td> 
                                                <td>{{$p->strItemName}}</td>
                                                <td>{{$p->dblItemPriceValue}}</td>
                                                <td>{{$p->strCateName}}</td>
                                            </tr>

                                        @endforeach
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
@stop        