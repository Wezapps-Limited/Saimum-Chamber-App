@extends('Server.master')
@section('title') View Information  @endsection
@section('content')



<div class="container-fluid">
    <h3 class="text-black pb-3"><strong>Contact Us</strong></h3>

    <div class="table-wrapper">
        <div id="datatable1_wrapper" style="overflow-x:auto;">
         
            <div class="card">
                <div class="card-body row"> 
            <table id="default_order" class="table display table-responsive nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable1_info" style="width: 942px;">
                <thead>
                    <tr role="row">
                      
                        <th class="wd-15p sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 115px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Sl</th>
                        <!-- <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 115px;" aria-label="Last name: activate to sort column ascending">Title</th> -->
                        <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 174px;" aria-label="Position: activate to sort column ascending">Mobile</th>
                        <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 174px;" aria-label="Position: activate to sort column ascending">Email</th>
                        <th class="wd-25p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 209px;" aria-label="E-mail: activate to sort column ascending">Active</th>
                  
                    </tr>
                </thead>
                <tbody>
                
                <tr role="row" class="odd" >
                  <td tabindex="0" class="sorting_1">1</td>
                  <td tabindex="0" class="sorting_1">{{@$index->mobile_one}}</td>
                  <td tabindex="0" class="sorting_1">{{@$index->email_one}}</td>
                
                  <td>
                  
              <a href="{{route('ContactUsEdit',@$index->id)}}" class="btn btn-outline-info btn-sm m_hov"><i id="hov" class="fa fa-edit"></i></a>
           
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