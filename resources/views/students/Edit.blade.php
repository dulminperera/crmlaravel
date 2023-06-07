@extends('students.layout')

@section('content')
    <div class="row">
        <div class="col-1g-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index')}}"> Back</a>
            </div>
        </div>
    </div>

    @if (Serrors->any())
        <div class="alert alert-danger">
            <strong>whoops!</strong> There was some problems with your input<br><br>
            <ul>   
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update' , $student->id) }}" method="POST">
        @csrf
        @method("PUT") 

         <div class="row"

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>StudName:</strong>
                    <input type="text" name="studname" value="{{ $student->studname }}" class="form-control" place



            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Course:</strong>

                            <input type="text" name="course" value="{{ $student->course }}" class="foprm-control"




                        </div>
         </div>


       <div class="col-xs-12 col-sm-12 col-md-12>
                        <div class="form-group">
                            <strong>Fee</strong>
                            <input type="text" name="fee" value="{{ $student->fee }}" class="form-control" placeholder
                        </div>
       </div>






        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>
@endsection

