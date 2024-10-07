@extends('Server.master')
@section('title') Seo Tools  @endsection
@section('content')



<style>
    .m_hov:hover #hov{
        color:white;
      
    }

    .m_hov{
        cursor: pointer;
    }

    .badge{
        font-size:86% !important;
    }
</style>

<div class="br-section-wrapper">
    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="margin-bottom: 40px;"> Seo Tools </h6>
    <div class="table-wrapper">
        <div id="datatable1_wrapper" style="overflow-x:auto;">
         
            
            <table id="example" class="table display table-responsive nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable1_info" style="width: 942px;">
                <thead>
                    <tr role="row">
                      
                        <th class="wd-15p sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 115px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Sl</th>
                        <!-- <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 115px;" aria-label="Last name: activate to sort column ascending">Title</th> -->
                        <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 174px;" aria-label="Position: activate to sort column ascending">Meta Title</th>
                        <!-- <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 174px;" aria-label="Position: activate to sort column ascending">Email</th> -->
                        <th class="wd-25p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 209px;" aria-label="E-mail: activate to sort column ascending">Active</th>
                  
                    </tr>
                </thead>
                <tbody>
                
                <tr role="row" class="odd" >
                  <td tabindex="0" class="sorting_1">1</td>
                  <td tabindex="0" class="sorting_1">{{@$index->meta_title}}</td>
                  <!-- <td tabindex="0" class="sorting_1">{{@$index->email_one}}</td> -->
                
                  <td>
              <a href="{{route('SeoToolEdit',@$index->id)}}" class="btn btn-outline-info btn-sm m_hov"><i id="hov" class="fa fa-edit"></i></a>
              </td>
                </tr>
                  
                </tbody>
            </table>
           
        </div>
    </div>
</div>

@endsection