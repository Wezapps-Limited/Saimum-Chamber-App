@extends('Server.master')
@section('title') About Us  @endsection
@section('content')



<div class="container-fluid">
    <h3 class="text-black mb-30"><strong>About Us</strong></h3>

    <div class="card">
        <div class="card-body row">
    <div class="table-wrapper">
        <div id="datatable1_wrapper" style="overflow-x:auto;">
         
            
            <table class="table display table-responsive nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable1_info" style="width: 942px;">
                <thead class="bg-light">
                    <tr role="row">
                      
                        <th colspan="1" style="width: 115px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Sl</th>
                        <!-- <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 115px;" aria-label="Last name: activate to sort column ascending">Title</th> -->
                        <th  colspan="1" style="width: 174px;" aria-label="Position: activate to sort column ascending">Title</th>
                        <th  colspan="1" style="width: 174px;" aria-label="Position: activate to sort column ascending">Image</th>
                        <th  colspan="1" style="width: 209px;" aria-label="E-mail: activate to sort column ascending">Action</th>
                  
                    </tr>
                </thead>
                <tbody>
                
                <tr role="row" class="odd" >
                  <td tabindex="0" class="sorting_1">1</td>
                  <td tabindex="0" class="sorting_1">{{@$index->title}}</td>
                  <!-- <td tabindex="0" class="sorting_1">{{@$index->title}}</td> -->
                  <!-- <td tabindex="0" class="sorting_1">{{@$index->link}}</td> -->
                  {{-- <td tabindex="0" class="sorting_1"><img style="width:100px" src="{{(@$index->logo)?url('upload/Logo/'.@$index->logo):''}}" alt=""></td> --}}
                  <td tabindex="0" class="sorting_1"><img style="width:100px" src="{{(@$index->image)?url('upload/AboutUs/'.@$index->image):''}}" alt=""></td>
              <td>
              
              <a href="{{route('AboutUsEdit',@$index->id)}}" class="btn btn-outline-info btn-sm m_hov"><i id="hov" class="fa fa-edit"></i></a>
           
              </td>
                </tr>
                  
                </tbody>
            </table>
           
        </div>
    </div>
    </div>
    </div>
</div>

@endsection