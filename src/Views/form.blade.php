@extends('crud-generator::layout')
@section('content')
    <div class="content-inner container-fluid pb-0" id="page_layout">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">{{ config('app.name') }}</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="bd-example">
                            <nav>
                                <div class="mb-3 nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false" tabindex="-1">Create
                                        Table</button>
                                    <button class="nav-link d-flex align-items-center" id="nav-home-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">Existing Table</button>
                                </div>
                            </nav>
                            <div class="tab-content iq-tab-fade-up" id="simple-tab-content">
                                <div class="tab-pane fade active show" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input name="_method" type="hidden" value="POST">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class='required form-label'>Table <sup
                                                            class="text-danger">*</sup></label>
                                                    <input type='text' required class='form-control' name='table'
                                                        value='' placeholder='Table'>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class='form-label'>Model <sup class="text-danger">*</sup></label>
                                                    <input type='text' required class='form-control' name='model'
                                                        value='' placeholder='Model'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class='required form-label'>Schema</label>
                                                    <input type='text' class='form-control' name='schema' value=''
                                                        placeholder='Schema'>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class='required form-label'>Generate Migration?</label>
                                                <select name="migration" class="form-control" required>
                                                    <option value="y">Ya</option>
                                                    <option value="n">Tidak</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        </div>
                                        <table class="table">
                                            <tr>
                                                <th>Field</th>
                                                <th>Type</th>
                                                <th>Size</th>
                                                <th>Nullable</th>
                                                <th>Include Table</th>
                                                <th>Include Form</th>
                                            <tr>
                                            <tr id="tr_0" nomor="0" class="ada-new">
                                                <td><input type="text" placeholder="Nama Field" name="field[]"
                                                        class="form-control">
                                                </td>
                                                <td><select name="type[]" class="form-control">
                                                        <option value="uuid">Uuid</option>
                                                        <option value="increments">Increments</option>
                                                        <option value="string">String</option>
                                                        <option value="integer">Integer</option>
                                                        <option value="float">Float</option>
                                                        <option value="date">Date</option>
                                                        <option value="timestamp">Timestamp</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" placeholder="Size Field" name="size[]"
                                                        class="form-control">
                                                </td>
                                                <td>
                                                    <input class="form-check-input" name="nullable[]" type="checkbox"
                                                        value="" id="kt_check_indeterminate_1" />
                                                </td>
                                                <td>
                                                    <select name="tables[]" class="form-control">
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Ya</option>

                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="form[]" onchange="showForm(0)" id="select_form_0"
                                                        class="form-control">
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Ya</option>

                                                    </select>
                                                    <div style="display: none" id="form_0">Type Form:
                                                        <select name="type_form[]" class="form-control">
                                                            <option value="text">Text</option>
                                                            <option value="email">Email</option>
                                                            <option value="password">Password</option>
                                                            <option value="textarea">Textarea</option>
                                                            <option value="file">File</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" onclick="hapusNew(0);return false;"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tbody id="isi-create">

                                            </tbody>
                                        </table>

                                        <a href="#" onclick="tambahNew(); return false;" class="btn btn-info">Add
                                            New Field</a>
                                        <input type="submit" value="Submit" id="submit" class="btn btn-primary" />
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <form action="{{ route('crud.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input name="_method" type="hidden" value="POST">
                                        <input type="hidden" name="exists" value="1">
                                        <div class='mb-10'>
                                            <label class='required form-label'>Model</label>
                                            <input type='text' class='form-control' name='model' value=''
                                                placeholder='Model'>
                                        </div>
                                        <div class='mb-10'>
                                            <label class='required form-label'>Table</label>
                                            <input type='text' class='form-control' name='table' value=''
                                                placeholder='Table'>
                                        </div>
                                        <div class='mb-10'>
                                            <label class='required form-label'>Schema</label>
                                            <input type='text' class='form-control' name='schema' value=''
                                                placeholder='Schema'>
                                        </div>
                                        <h1>Form</h1>
                                        <table class="table">
                                            <tr>
                                                <th>Field</th>
                                                <th>Type</th>
                                                <th>Include Table</th>
                                            <tr>
                                            <tr id="tr_0" nomor="0" class="ada">
                                                <td><input type="text" placeholder="Nama Field" name="field[]"
                                                        class="form-control"></td>
                                                <td><select name="type[]" data-nomor="0" id="type-0"
                                                        onchange="modelToggle(0)" class="type-select form-control">
                                                        <option value="text">Text</option>
                                                        <option value="email">Email</option>
                                                        <option value="password">Password</option>
                                                        <option value="textarea">Textarea</option>
                                                        <option value="file">File</option>
                                                        <option value="select">Select</option>
                                                    </select>
                                                    <select name="model_0" onchange="fillableToggle(0)" data-nomor="0"
                                                        id="model_0" class="model form-control" style="display:none">
                                                        <option>Pilih Model</option>
                                                        @foreach ($models as $model)
                                                            <option value="{{ $model }}">{{ $model }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div id="fillable-attributes-0">

                                                    </div>
                                                </td>
                                                <td>
                                                    <select name="tables[]" class="form-control">
                                                        <option value="1">Ya</option>
                                                        <option value="0">Tidak</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <a href="#" onclick="hapus(0);return false;"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tbody id="isi">

                                            </tbody>
                                        </table>
                                        <a href="#" onclick="tambah(); return false;" class="btn btn-info">Add New
                                            Field</a>
                                        <input type="submit" value="Submit" id="submit" class="btn btn-primary" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function tambah(){
            var jm = $('.ada:last').attr("nomor");

            var length = parseInt(jm) + 1;
            var str = `<tr id="tr_${length}" nomor="${length}" class="ada">
                            <td><input type="text" placeholder="Nama Field" name="field[]" class="form-control"></td>
                            <td><select name="type[]"  id="type-${length}" onchange="modelToggle(${length})" data-nomor="${length}" class="type-select form-control">
                                    <option value="text">Text</option>
                                    <option value="email">Email</option>
                                    <option value="password">Password</option>
                                    <option value="textarea">Textarea</option>
                                    <option value="file">File</option>
                                    <option value="select">Select</option>
                                </select>
                                <select name="model_${length}" onchange="fillableToggle(${length})" data-nomor="${length}" id="model_${length}" class="model form-control" style="display:none">
                                    <option>Pilih Model</option>
                                    @foreach($models as $model)
                                    <option value="{{ $model}}">{{ $model }}</option>
                                    @endforeach
                                </select>
                                <div id="fillable-attributes-${length}">

                                </div>
                            </td>
                            <td>
                                <select name="tables[]" class="form-control">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </td>
                            <td>
                                <a href="#" onclick="hapus(${length});return false;" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>`;

            $("#isi").append(str);
        }
        function hapus(i){
            $("#tr_"+i).remove();
        }

        function tambahNew(){
            var jm = $('.ada-new:last').attr("nomor");

            var length = parseInt(jm) + 1;
            var str = `<tr id="tr_${length}" nomor="${length}" class="ada-new">
                            <td><input type="text" placeholder="Nama Field" name="field[]" class="form-control"></td>
                            <td><select name="type[]" class="form-control">
                                    <option value="uuid">Uuid</option>
                                    <option value="increments">Increments</option>
                                    <option value="string">String</option>
                                    <option value="integer">Integer</option>
                                    <option value="float">Float</option>
                                    <option value="date">Date</option>
                                    <option value="timestamp">Timestamp</option>
                                </select>
                            </td>
                            <td><input type="text" placeholder="Size Field" name="size[]" class="form-control"></td>
                            <td>
                               <input class="form-check-input" name="nullable[]" type="checkbox" value="" id="kt_check_indeterminate_1"  />
                            </td>
                            <td>
                                <select name="tables[]" class="form-control">
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>

                                </select>
                            </td>
                            <td>
                                <select name="form[]" onchange="showForm(${length})" id="select_form_${length}" class="form-control">
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>

                                </select>
                                <div style="display: none" id="form_${length}">Type Form:
                                <select name="type_form_${length}" class="form-control">
                                    <option value="text">Text</option>
                                    <option value="email">Email</option>
                                    <option value="password">Password</option>
                                    <option value="textarea">Textarea</option>
                                    <option value="file">File</option>
                                </select>
                                </div>
                            </td>
                            <td>
                                <a href="#" onclick="hapusNew(${length});return false;" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>`;
            $("#isi-create").append(str);
        }
        function hapusNew(i){
            $("#tr_"+i).remove();
        }

        function showForm(i){
            if($("#select_form_"+i).val() == 1){
                $("#form_"+i).show();
            }else{
                $("#form_"+i).hide();
            }
        }
       function modelToggle(id){
            var type = $("#type-"+id).val();

            if (type == 'select') {
               $("#model_"+$("#type-"+id).attr('data-nomor')).show();
            } else {
                $("#model_"+$("#type-"+id).attr('data-nomor')).hide();
            }
        }
        function fillableToggle(id){
                var modelName = $("#model_"+id).val();
                var nomor = $("#model_"+id).attr('data-nomor');
                if (modelName) {

                    let url = "{{ route('crud.get.fillable', ['modelName' => ':modelName']) }}"
                    url.replace(':modelName', modelName)

                    $.ajax({
                        url: url,
                        success: function(response) {
                            $('#fillable-attributes-'+nomor).empty();
                            if (response.length > 0) {
                                $('#fillable-attributes-'+nomor).append('<h4>Select value and label</h4>');
                                var ul = $('<ul></ul>');
                                var selectValue = $('<select id="select-value" name="value_model_' + nomor + '" class="form-control"></select>');
                                var selectLabel = $('<select id="select-label" name="label_model_' + nomor + '" class="form-control"></select>');


                                response.forEach(function(attribute) {

                                    selectValue.append('<option value="' + attribute + '">' + attribute + '</option>');
                                    selectLabel.append('<option value="' + attribute + '">' + attribute + '</option>');
                                });

                                $('#fillable-attributes-'+nomor).append(selectValue);
                                $('#fillable-attributes-'+nomor).append(selectLabel);
                            } else {
                                 $('#fillable-attributes-'+nomor).append('<h4>Input value and label</h4>');

                                $('#fillable-attributes-'+nomor).append('<input type="text" class="form-control" name="value_model_'+nomor+'" placeholder="Value Model">');

                                $('#fillable-attributes-'+nomor).append('<input type="text"  class="form-control" name="label_model_'+nomor+'" placeholder="Label Model">');
                            }
                        }
                    });
                } else {
                    $('#fillable-attributes-'+nomor).empty();
                }
          }
    </script>
@endpush
