@extends('PageElements.Dashboard.Layout')
@section('PageTitle', 'تنظیمات اسلایدر')
@section('ContentHeader', 'تنظیمات اسلایدر')
@section('content')
<div class="col-md-8">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">
                افزودن تصویر و توضیحات
            </h3>
            <!-- tools box -->
            <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>

            </div>
            <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <form class="card-body" action="{{ route('Slider.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- /image uploader -->
            <div class="mb3">


                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <div class="form-group">
                    <label for="sliderImage">تصویر</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="SliderImage" class="custom-file-input" id="fileUploader" required>
                            <label class="custom-file-label" for="sliderImage">انتخاب فایل</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.image uploader -->

            <button type="submit" class="btn btn-primary">ذخیره</button>
        </form>
    </div>
</div>
<!-- /.card -->



<!-- /Sliders List -->
<div class="col-8">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">لیست اسلایدرها</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <tr>
                    <th>ردیف</th>
                    <th>تصویر</th>
                    <th>عملیات</th>
                </tr>
                <?php
                    $counter = 1;
                    foreach ($Sliders as $item) {
                    echo '<tr>';
                        echo '<td>' . $counter++ . '</td>';
                        echo '<td style="display: none;">' . $item['id'] . '</td>';
                        echo '<td style="width: 15%;"><img style="width: 100%;" src="storage/Main/Sliders/' . $item['image'] . '"></td>';
                        echo '<td>' . '<a onclick="deleteRow(this)"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>&nbsp</td>';
                        echo '</tr>';
                    }
                    ?>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>



<script>
    function deleteRow(r) {
            let currentRow = $(r).closest("tr");
            let Id = currentRow.find("td:eq(1)").text(); // get current row id
            let token = "{{ csrf_token() }}";
            $.ajax({
                type: 'DELETE',
                url: '/Slider/' + Id,
                data: {
                    _token: token,
                    Id
                },
                success: function() {
                    location.reload();
                }
            });

        }

</script>

@endsection
