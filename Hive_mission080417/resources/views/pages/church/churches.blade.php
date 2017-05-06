<style type="text/css">
	
.card {
    border-radius: 1px;
}
.main {
    min-height: 30vh;
    background: white;
    margin-top: 0vh;
    margin-bottom: 0vh;
    padding: 0px;
}
.card {
    position: relative;
    display: block;
    margin-bottom: .75rem;
    background-color: #fff;
    border-radius: .25rem;
    border: 1px solid rgba(0,0,0,.125);
}
</style>

@extends('includes.app')

@section('content')
    <!-- Horizontal navigation and top css-->

    <div class="app-content content container-fluid"  style="background: #fff;">
    <div class="container-fluid f-bar" style="padding:15px;">
        <div class="col-xs-4 col-md-4">
            <input id="search_church" class="form-control" placeholder="search_church.....">
        </div>
        <div class="col-xs-4 col-md-4">
            <!-- <input id="search_church" class="form-control" placeholder="search_church....."> -->
        </div>
        <div class="col-md-4">
            <div class=" text-right" style="text-align:right">
               <a class="btn btn-primary btn-md" href="{{url('/church/addchurch')}}"> <i class="fa fa-plus"></i> New Church</a>
            </div>
        </div>
    </div>
      <div class="content-wrapper" style="height: 680px;">
        <div class="content-body">
<div class="container-fluid">
        <table class="table tableSection scrolled">
            <thead>
                <tr>
                    <th>Church Name</th>
                    <th>Parish</th>
                    <th>Archdeaconry</th>
                    <th>Diocese</th>
                    <th>Date Added</th>
                    <th>Actions</th>
                </tr>
            </thead>
            {{ csrf_field() }}
            @foreach($data as $church)

            {{--<tbody id="churches" style="height: 642px;">--}}
                <tr>
                    <td>{{$church->church}}</td>
                    <td>{{$church->parish}}</td>
                    <td>{{$church->archdeaconry}}</td>
                    {{--<td>{{$church->}}</td>--}}
                    <td>Namirembe</td>
                    <td>{{$church->dateCreated}}</td>
                    <td>
                        <a href="#"><i class="fa fa-eye fa-white"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-remove text-danger"></i></a>
                    </td>
                </tr>
            {{--</tbody>--}}
           @endforeach
        </table>
    </div>


        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection

<script type="text/javascript">
    swal({
  title: 'Error!',
  text: 'Do you want to continue',
  type: 'error',
  confirmButtonText: 'Cool'
})

</script>