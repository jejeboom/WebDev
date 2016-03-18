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
                            Employee Maintenance
                        </div>
                                    <form role="form" id="myform" method="post" action="{{URL::to('/add-employee')}}">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <div>
                                <div class="col-lg-12">
                                        <div class="form-group" hidden="">
                                            <label>Employee Code:</label>
                                            <input class="form-control" id="empcode" name="empcode" placeholder="EMP000">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input class="form-control" id="fname" name="fname" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input class="form-control" id="mname" name="mname" placeholder="Middle Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input class="form-control" id="lname" name="lname" placeholder="Last Name">
                                        </div>
										<div class="form-group">
                                            <label>Gender:</label>	
											<div class="radio">
                                                <label>
                                                    <input type="radio"  name="optionsRadios1" id="optionsRadios1" value="1" checked="">Male
                                                </label>
                                                <label>
                                                    <input type="radio"  name="optionsRadios1" id="optionsRadios1" value="2" checked="">Female
                                                </label>
                                            </div>	
										</div>
								</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Job Position:</label>
                                            <select id="job" name="job" class="form-control">
                                                <option value='admin'>Admin</option>
                                                <option value='staff'>Staff</option>
                                            </select>
                                        </div>
                                        <div class = "row">
                                            <div class="col-lg-12">
                                                    <!-- /.panel-heading -->
                                                    <div class="panel-body">
                                                        <button  type="submit" id="add" class="btn btn-primary">ADD</button>
                                                        <button type="submit" id="edit" class="btn btn-success">UPDATE</button>
                                                        <button type="submit" id="delete" class="btn btn-danger">DELETE</button>
                                                        <button  type="submit" id="clear" class="btn btn-warning">CLEAR</button>
                                                    </div>
                                                <!-- /.panel -->
                                            </div>
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
							List of Employees
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id ="table_emp">
                                    <thead>
                                        <tr>
                                            <th>Employee Code</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Job Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($emp as $emp)
                                        <tr>
                                            <td>{{$emp->strEmpCode}}</td>
                                            <td>{{$emp->strEmpFName}}</td>
                                            <td>{{$emp->strEmpMName}}</td>
                                            <td>{{$emp->strEmpLName}}</td>
                                            <td>{{$emp->strJobTitle}}</td>
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
		</div>
        <!-- /#page-wrapper -->
	</div>
    
@stop