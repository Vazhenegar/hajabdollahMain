<!-- /edit modal -->

<div id="AddressEditModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" id="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ویرایش آدرس</h4>
            </div>
            <div class="modal-body" id="modal-body">
                <form id="AddressEditModal-form" action="" method="post">
                @method('PUT')
                @csrf



                    <!-- Custom Tabs -->
                    <input type="hidden" name="Address_Id" id="Address_Id">

                    <div class="card">
                        <label>متن آدرس</label>
                        <div class="card-header d-flex p-0">
                            <ul class="nav nav-pills ml-auto p-2">
                                @foreach (Locales() as $item)
                                    <li class="nav-item"><a class="nav-link @if ($loop->first) active @endif" href="#Address_Desc_{{$item['locale']}}box"
                                                            data-toggle="tab">{{$item['name']}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                @foreach (Locales() as $item)
                                    <div class="tab-pane @if ($loop->first) active @endif" id="Address_Desc_{{$item['locale']}}box">
                                        <div class="mb-3">
                                            <textarea rows="10" id="Address_Desc_{{$item['locale']}}edit" name="Address_Desc_{{$item['locale']}}" style="width: 100%"></textarea>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>

                    <button type="submit" class="btn btn-primary">ذخیره</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </form>
            </div>

        </div>

    </div>

</div>
