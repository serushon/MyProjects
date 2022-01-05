@extends('personal.layouts.main')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Коментарии</a></li>
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
        
        
                <div class="col-12">
                  <form action="{{route('personal.comment.update', $comment->id) }}" method="POST" class="w-25">
                    @csrf
                    @method('PATCH')
                      <div class="form-group">
                          <label>Коментарий</label>
                          <textarea class="form-control" name="message" cols="25" rows="10" value=" {{$comment->message}} " ></textarea>
                          @error('message')
                              <div class="text-danger">Это поле необходимо заполнить</div>
                          @enderror
                      </div>
                        <input type="submit" class="btn btn-primary" value="Обновить"/>
                  </form>
                </div>
            </div>
      </div>
</div> 
    </section>
    <!-- /.content -->
  
</div>
  <!-- /.content-wrapper -->
  @endsection