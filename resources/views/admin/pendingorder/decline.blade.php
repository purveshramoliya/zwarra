@include('admin.layouts.headermodule')
<style>
    #editor {
        height: 300px;
        /* Set your desired height */
    }
</style>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row mb-2">
                    <div class="col-sm-12 zw_back">
                        <a href="{{ route('ourservices.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 mt-3">Reason for cancellation</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="">

                            <!-- /.card-header -->

                            <!-- form start -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="container mt-5">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <textarea name="editor" style="height: 1000px;" id="editor" class=""></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="offset-md-2 col-md-8">
                                                <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                        </div>
                        <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!--/.col (right) -->
    </div>
    </section>
    </div>
    @include('admin.layouts.footer')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    </div>
</body>

</html>