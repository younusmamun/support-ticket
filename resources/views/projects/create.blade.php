@extends('layouts.master')


@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Project Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-12">

            <form class="row g-3" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Image upload</label>
                    <input type="file" id="img" name="project_image" accept="image/*"  class="form-control"  placeholder="">
                  </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project title</label>
                    <input type="text"  name="project_title"  class="form-control" id="inputAddress2" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Intro </label>
                    <input type="text"  name="project_intro"  class="form-control" id="inputAddress2" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">project Link</label>
                    <input type="text"  name="project_link"  class="form-control" id="inputAddress2" placeholder="">
                </div>



                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project video link</label>
                    <input type="text" name="project_video_link" class="form-control" id="inputAddress2" placeholder="">
                </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Cover Photo upload</label>
                    <input type="file" id="img" name="project_cover_photo" accept="image/*" class="form-control" placeholder="">
                </div>
                {{-- <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project title</label>
                    <input type="text" name="project_title" class="form-control" id="inputAddress2" placeholder="">
                </div> --}}
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Description </label>
                    <textarea type="text" name="project_description" class="form-control" id="inputAddress2" placeholder=""></textarea>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Short Description</label>
                    <textarea type="text" name="project_short_description" class="form-control" id="inputAddress2" placeholder=""></textarea>
                </div>

                {{-- <div class="col-12">
                    <label for="inputAddress2" class="form-label">Project Link</label>
                    <input type="text" name="project_link" class="form-control" id="inputAddress2" placeholder="">
                </div> --}}
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Client Review</label>
                    <textarea type="text" name="project_client_review" class="form-control" id="inputAddress2" placeholder=""></textarea>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Client Video Review Link</label>
                    <input type="text" name="project_client_video_review" class="form-control" id="inputAddress2" placeholder="">
                </div>






                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" checked>
                        <label for="statusYes" class="form-check-label">On</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" id="statusNo" class="form-check-input" value="off">
                        <label for="statusNo" class="form-check-label">Off</label>
                    </div>
                </div>




                <div class="col-12 mb-3 mt-3">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>

              </form>


        </div>
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
