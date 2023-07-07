@extends('backend.master')

@section('main-contain')

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('backend.shared.navbar-top');
            @include('backend.shared.navbar-leftside')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">គ្រប់គ្រងមុខវិជ្ជា</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">ទំព័រដើម</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">គ្រប់គ្រងសិស្ស</a></li>
                                            <li class="breadcrumb-item active">មុខវិជ្ជា</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('store_book_author') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-md-12 col-form-label">ឈ្មោះអ្នកនិពន្ធ</label>
                                                <div class="col-md-12">
                                                    <input name="book_author" class="form-control" type="text" placeholder="បញ្ជូលឈ្មោះអ្នកនិពន្ធ" value="{{ old('book_author') }}">
                                                    @error('book_author')
                                                        <span style="font-size:16px;" class="text-danger">{{ $message }}</span>
                                                    @enderror 
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-primary"  value="បញ្ជូលថ្មី">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th>ឈ្មោះអ្នកនិពន្ធ</th>
                                                    <th>ប៊ូតុង</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach( $book_authors as $book_author)
                                                    <tr>
                                                        <td>{{ $book_author->book_author }}</td>
                                                        <td>
                                                            <a href="{{ route('edit_book_author',$book_author->id) }}" class="btn btn-info"><span class="mdi mdi-pencil"></a>
                                                            <a href="{{ route('delete_book_author',$book_author->id) }}" onclick="return confirm('តើអ្នកពិតជាចង់លុបទិន្នន័យនេះមែនឬទេ?')" class="btn btn-danger"><span class="mdi mdi-delete"></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

@endsection