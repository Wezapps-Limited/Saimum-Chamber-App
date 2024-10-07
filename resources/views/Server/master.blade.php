<!DOCTYPE html>
<html lang="en">

<head>
      @include('Server.Common.header')
      <link href="{{asset('toastr.min.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
    <meta name="keywords" content="" />
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- End Preloader Area -->


    <!-- Main div Start -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- Header Start -->
        <header class="topbar" data-navbarbg="skin6">
            @include('Server.Common.nav')
        </header>
        <!-- Header End -->
        <!-- Sidebar Start -->
         <aside class="left-sidebar" data-sidebarbg="skin6">

            <div class="scroll-sidebar" data-sidebarbg="skin6">

                @include('Server.Common.sidebar')

            </div>

        </aside>
         <!-- Sidebar End -->

        <div class="page-wrapper">
             @yield('content')
            <!-- End Container fluid  -->


            <!-- footer -->

            @include('Server.Common.footer')

            <!-- End footer -->

        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- Main div End -->

    @include('Server.Common.script')
    <script src="{{asset('toastr.min.js')}}"></script>
    <script src="{{ asset('files/assets/js/custom.js')}}"></script>
    <script src="{{ asset('files/assets/ckeditor/ckeditor.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @yield('footer')
    <script>
        // Bestselling chart

        // Weekly Sales

    </script>



<script>
  $(document).on('click','#delete',function(e){
      e.preventDefault();
      var link = $(this).attr('href');

      Swal.fire({
          title: 'Are you sure?',
          text: "You want to Delete This Item!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
          if (result.isConfirmed) {


          Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
          )
          window.location.href = link;
      }else{
          Swal('Safe Data');
      }
  })

  })
</script>


<script>
  $(document).on('click','#active',function(e){
      e.preventDefault();
      var link = $(this).attr('href');

      Swal.fire({
          title: 'Are you sure?',
          text: "You want to Active This Item!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Active it!'
      }).then((result) => {
          if (result.isConfirmed) {


          Swal.fire(
              'Launch!',
              'Your file has been Actived.',
              'success'
          )
          window.location.href = link;
      }else{
          Swal('Safe Data');
      }
  })

  })
</script>


<script>
  $(document).on('click','#de_active',function(e){
      e.preventDefault();
      var link = $(this).attr('href');

      Swal.fire({
          title: 'Are you sure?',
          text: "You want to Deactive This Item!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Deactive it!'
      }).then((result) => {
          if (result.isConfirmed) {


          Swal.fire(
              'Launch!',
              'Your file has been Deactive.',
              'success'
          )
          window.location.href = link;
      }else{
          Swal('Safe Data');
      }
  })

  })
</script>




<script>
          @if(Session::has('message'))

  var type ="{{ Session::get('alert-type','success') }}";

  switch(type){
      case "success":
          toastr.success("{{ Session::get('message') }}");
          break;
      case "error":
          toastr.error("{{ Session::get('message') }}");
          break;
  }

  @endif
</script>


<script type="text/javascript">
    $(document).ready(function () {

        $.extend(true, $.fn.dataTable.defaults, {
            language: {
                search: "Global Search"
            }
        });



        $('#example thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#example thead');

        var table = $('#example').DataTable({
            "autoWidth": false,
            columnDefs: [
                { width: '1%', targets: 0 }
            ],
            fixedColumns: true,
            dom: 'Bfrtip',
            lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10 rows', '25 rows', '50 rows', 'Show all' ]
            ],
            buttons: [

                'pageLength','copy', 'csv', 'excel', 'print',
                {
                    text: 'TSV',
                    extend: 'csvHtml5',
                    fieldSeparator: '\t',
                    extension: '.tsv',




                },

                {
                    extend: 'pdfHtml5',
                    text: 'Pdf',
                    orientation: 'landscape',
//                    title: 'rCOI Disclosures',
                    exportOptions: {
                        columns: ':visible', orthogonal: 'print'
                    }
                },
            ],


            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function () {
                var api = this.api();

                if($('#hplss').val()=='hpl_one' || $('#hclss').val()=='hcl_one' || $('#hlslss').val()=='hlsl_one' || $('#hflss').val()=='hfl_one' || $('#hdfplss').val()=='hdfpl_one' || $('#atpplss').val()=='atp_one'){




                    var chaildtex = $('.filters th:nth-child(1)').text().replace("Profile", "Search");

                    // $('.filters th:nth-child(1)').css("font-weight", "normal");
                    // $('.filters th:nth-child(5)').css("font-weight", "normal");
                    // $('.filters th:nth-child(6)').css("font-weight", "normal");
                    // $('.filters th:nth-child(7)').css("font-weight", "normal");
                    // $('.filters th:nth-child(8)').css("font-weight", "normal");

                    // $('.filters th:nth-child(1)').text(chaildtex);

                    // var chaildtex5 = $('.filters th:nth-child(5)').text().replace("Cell Phone", "");
                    // $('.filters th:nth-child(5)').text(chaildtex5);


                    // var chaildtex6 = $('.filters th:nth-child(6)').text().replace("Location/Zone/Unit", "");
                    // $('.filters th:nth-child(6)').text(chaildtex6);

                    // var chaildtex7 = $('.filters th:nth-child(7)').text().replace("Official Email", "");
                    // $('.filters th:nth-child(7)').text(chaildtex7);


                    // var chaildtex8 = $('.filters th:nth-child(8)').text().replace("IP PABX", "");
                    // $('.filters th:nth-child(8)').text(chaildtex8);



                }else if($('#hdslss').val()=='hdsl_one' || $('#hdcss').val()=='hdc_one' || $('#hdclss').val()=='hdcl_one'){

                    var chaildtex = $('.filters th:nth-child(1)').text().replace("Profile", "Search");
                    $('.filters th:nth-child(1)').text(chaildtex);

                    $('.filters th:nth-child(1)').css("font-weight", "normal");
                    $('.filters th:nth-child(5)').css("font-weight", "normal");
                    $('.filters th:nth-child(6)').css("font-weight", "normal");
                    $('.filters th:nth-child(7)').css("font-weight", "normal");
                    $('.filters th:nth-child(8)').css("font-weight", "normal");
                    $('.filters th:nth-child(9)').css("font-weight", "normal");

                    var chaildtex5 = $('.filters th:nth-child(5)').text().replace("Cell Phone", "");
                    $('.filters th:nth-child(5)').text(chaildtex5);


                    var chaildtex6 = $('.filters th:nth-child(6)').text().replace("Location/Zone/Unit", "");
                    $('.filters th:nth-child(6)').text(chaildtex6);

                    var chaildtex7 = $('.filters th:nth-child(7)').text().replace("Floor", "");
                    $('.filters th:nth-child(7)').text(chaildtex7);




                    var chaildtex8 = $('.filters th:nth-child(8)').text().replace("Official Email", "");
                    $('.filters th:nth-child(8)').text(chaildtex8);

                    var chaildtex9 = $('.filters th:nth-child(9)').text().replace("IP PABX", "");
                    $('.filters th:nth-child(9)').text(chaildtex9);

                }



                $('.filters th:nth-child(2)').css({
                    "maxWidth":"100px"
                });

//             $('.filters th>input[type="text"]').css({
//                                "maxWidth":"100px"
//                            });





                // For each column
                api
                    .columns()
                    .eq(0)
                    .each(function (colIdx) {
                        // Set the header cell to contain the input element
                        if($('#hplss').val()=='hpl_one' || $('#hclss').val()=='hcl_one' || $('#hlslss').val()=='hlsl_one' || $('#hflss').val()=='hfl_one' || $('#hdfplss').val()=='hdfpl_one' || $('#atpplss').val()=='atp_one'){


                            var cell = $('.filters th:nth-child(2),.filters th:nth-child(3),.filters th:nth-child(4),.filters th:nth-child(5),.filters th:nth-child(6),.filters th:nth-child(7)').eq(
                            $(api.column(colIdx).header()).index()
                        );


                        }else if($('#hdslss').val()=='hdsl_one' || $('#hdcss').val()=='hdc_one' || $('#hdclss').val()=='hdcl_one'){

                            var cell = $('.filters th:nth-child(2),.filters th:nth-child(3),.filters th:nth-child(4),.filters th:nth-child(10)').eq(
                                $(api.column(colIdx).header()).index()
                            );

                        }
                        else{
                            var cell = $('.filters th').eq(
                                $(api.column(colIdx).header()).index()
                            );
                        }




                        var title = $(cell).text();


                        if($('#hplss').val()=='hpl_one' || $('#hlslss').val()=='hlsl_one' || $('#hflss').val()=='hfl_one' || $('#hdfplss').val()=='hdfpl_one' || $('#atpplss').val()=='atp_one') {


                            $(cell).html('<input style="max-width: 130px;" type="text" placeholder="' + title + '" />');



                        }else if($('#hdslss').val()=='hdsl_one' || $('#hdcss').val()=='hdc_one' || $('#hdclss').val()=='hdcl_one'){
                            if(title=='Blood Group'){
                                $(cell).html('<input style="max-width: 60px;" type="text" placeholder="' + 'Blood Group' + '" />');
                            }else{
                                $(cell).html('<input style="max-width: 100px;" type="text" placeholder="' + title + '" />');
                            }

                        }else if($('#hclss').val()=='hcl_one'){

                            $(cell).html('<input style="max-width: 150px;" type="text" placeholder="' + title + '" />');

                        }
                        else{

                        }



                        $(
                            'input',
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                        )
                            .off('keyup change')
                            .on('change', function (e) {
                                // Get the search value
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})'; //$(this).parents('th').find('select').val();

                                var cursorPosition = this.selectionStart;
                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search(
                                        this.value != ''
                                            ? regexr.replace('{search}', '(((' + this.value + ')))')
                                            : '',
                                        this.value != '',
                                        this.value == ''
                                    )
                                    .draw();
                            })
                            .on('keyup', function (e) {
                                e.stopPropagation();

                                $(this).trigger('change');
                                $(this)
                                    .focus()[0]
                                    .setSelectionRange(cursorPosition, cursorPosition);
                            });
                    });
            },

        });

        $('a.toggle-vis').on('click', function (e) {
            e.preventDefault();

            // Get the column API object
            var column = table.column($(this).attr('data-column'));

            // Toggle the visibility
            column.visible(!column.visible());
        });
    });


</script>

</body>

</html>
