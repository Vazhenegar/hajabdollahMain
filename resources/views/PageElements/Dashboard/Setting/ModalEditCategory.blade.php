<!-- /edit modal -->

<div id="CategoryEditModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" id="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ویرایش دسته بندی محصول</h4>
            </div>
            <div class="modal-body" id="modal-body">
                <form id="CategoryEditModal-form" action="" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <!-- Custom Tabs -->
                    <input type="hidden" name="CatId" id="CatId">
                    <div class="card">
                        <div class="card-header d-flex p-0">
                            <ul class="nav nav-pills ml-auto p-2">
                                @foreach (Locales() as $item)
                                <li class="nav-item"><a class="nav-link @if ($loop->first) active @endif" href="#{{$item['locale']}}box" data-toggle="tab">{{$item['name']}}</a> </li>
                                @endforeach
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                @foreach (Locales() as $item)
                                <div class="tab-pane @if ($loop->first) active @endif" id="{{$item['locale']}}box">
                                    <div class="mb-3">
                                        <textarea name="{{$item['locale']}}" id="{{$item['locale']}}edit" style="width: 100%"></textarea>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>

                        <!-- /image content -->
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h6>تصویر دسته بندی</h6>
                            </div>
                                <img id="Cat_Img" alt="" style="width: 45%">
                        </div>
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h6>انتخاب تصویر دیگر</h6>
                            </div>
                            <input type="file" name="Cat_New_Img" >
                        </div>
                        <!-- /.image content -->


                    <button type="submit" class="btn btn-primary">ذخیره</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </form>
            </div>

        </div>

    </div>

</div>
