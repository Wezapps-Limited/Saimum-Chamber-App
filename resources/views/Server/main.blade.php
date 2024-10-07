@extends('Server.master')
@section('title') Saimum Chamber Super Admin Dashboard  @endsection
@section('content')

<div class="page-breadcrumb">
    <div class="row">
    <div class="col-12 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hello {{Auth::user()->name}}!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

    </div>
</div>
<div class="container-fluid">
   <!-- Start First Cards -->
   <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div class="text-center">
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium">{{@$total_contcat_msg??0}}</h2>
                                            
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate text-center">Contact Message
                                        </h6>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end ">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div class="text-center">
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">{{@$total_resume??0}}</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate text-center">
                                          Total Resume
                                        </h6>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end ">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div class="text-center">
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">{{@$total_join_us??0}}</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate text-center">
                                         Join Us
                                        </h6>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end ">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div class="text-center">
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium">{{@$total_user??0}}</h2>
                                            
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate text-center">Total User
                                        </h6>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <!-- End First Cards -->

    <!-- End Order Table -->


    <div class="row">
        <!-- Weekly Sales -->
        <div class="col-lg-6">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title mb-3">Visitor Count</h4>
               <div>
                  <canvas id="weeklySales_line-chart" height="150"></canvas>
               </div>
            </div>
         </div>
      </div>

      <div class="col-lg-6">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title mb-3">Visitor Count</h4>
               <div>
                  <canvas id="weeklySales_line-chart-two" height="150"></canvas>
               </div>
            </div>
         </div>
      </div>

</div>

</div>



@section('footer')


<script>
    // Extract data from PHP to JavaScript
    
    let values = @json($All);
    // Chart.js configuration
    new Chart(document.getElementById("weeklySales_line-chart"), {
        type: 'line',
        data: {
            labels: ['Today','1 day ago','2 day ago','3 day ago','4 day ago','5 day ago'],
            datasets: [{
                data:values,
                label: "Last 7 Day Visitor Count",
                borderColor: "rgb(251, 146, 60)",
                fill: false
            }]
        },
        options: {
            // Include Chart.js options here (e.g., title, axes configuration)
        }
    });

    </script>

<script>
    // Extract data from PHP to JavaScript
    
    let valueses = @json($All);
    // Chart.js configuration
    new Chart(document.getElementById("weeklySales_line-chart-two"), {
        type: 'bar',
        data: {
            labels: ['Today','1 day ago','2 day ago','3 day ago','4 day ago','5 day ago'],
            datasets: [{
                data:valueses,
                label: "Last 7 Day Visitor Count",
                borderColor: "rgb(251, 146, 60)",
                fill: false
            }]
        },
        options: {
            // Include Chart.js options here (e.g., title, axes configuration)
        }
    });

    </script>
@endsection

@endsection
