@extends('adminlte::page')

@section('content')

    <form action="" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="box box-solid box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Student Attendance</h3>

                            <div class="box-tools pull-right">
                                <!-- Split button -->
                                <div class="btn-group">
                                    <button class="btn btn-primary  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Class <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" onclick="showUser(this.value)">

                                       {{-- @foreach($Level as $level)
                                            <li value="{{$level->id}}"><a href="">{{$level->name}}</a></li>
                                        @endforeach--}}
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-primary  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Course <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        {{--@foreach($Subject as $sub)
                                            <li><a href="">{{$sub->name}}</a></li>
                                        @endforeach--}}
                                    </ul>
                                </div>
                            </div><!-- /.box-tools -->
                        </div><!-- /.box-header -->




                        {{--Box body--}}
                        <div class="box-body">
                            <table class="table table-hover">
                                <!-- On cells (`td` or `th`) -->
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>attendance</th>
                                </tr>
                                <tr>
                                    <td>20130000016</td>
                                    <td>abra ka dabra</td>
                                    <td><input type="checkbox"></td>
                                </tr>
                                <tr>
                                    <td>20120000028</td>
                                    <td>Nazgul</td>
                                    <td><input type="checkbox"></td>
                                </tr>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>


            </div>
        </div>
    </form>


    <script>
        function showUser(str) {
            console.log("It failed!");
            if (str == "") {
                //document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };

                xmlhttp.open("GET","getuser.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>
@stop