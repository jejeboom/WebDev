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
                            Product Category Maintenance
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method = "post" id = "category_form" action ="{{URL::to('/add-category')}}">
										<div class="form-group" hidden = "">
                                            <label>Category Code:</label>
                                            <input class="form-control" id = "cateid" name = "cateid" placeholder="CAT000">
                                        </div>
                                        <div class="form-group">
                                            <label>Category Name:</label>
                                            <input class="form-control" id = "catename" name = "catename" placeholder="Category Name">
                                        </div>
										<div class="form-group">
                                            <label>Category Description:</label>
                                            <textarea class="form-control" rows="3" id = "catedesc" name = "catedesc" placeholder="Category Description"></textarea>
                                        </div> 
                                            <div class="form-group">
                                                <button  type="submit" class="btn btn-primary" id ="add_category">ADD</button>
                                                <button type="submit" class="btn btn-success" id ="edit_category">UPDATE</button>
                                                <button type="submit" class="btn btn-danger" id = "delete_category">DELETE</button>
                                                <button  type="button" class="btn btn-warning" id = "clear_category">CLEAR</button>
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
							List of Categories
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table" id = "cate_table">
                                    <thead>
                                        <tr>
                                            <th>Category Code</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cate as $cate) 
                                            <tr>
                                                <td>{{$cate->strCateCode}}</td>
                                                <td>{{$cate->strCateName}}</td>
                                                <td>{{$cate->strCateDesc}}</td>
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