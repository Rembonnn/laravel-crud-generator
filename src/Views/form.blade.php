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
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input name="_method" type="hidden" value="POST">

                        <div class="form-group">
                            <label class='required form-label'>Model</label>
                            <input type='text' required class='form-control' name='model' value='' placeholder='Model'>
                        </div>
                       <div class="form-group">


                            <label class='required form-label'>Table</label>
                            <input type='text' required class='form-control' name='table' value='' placeholder='Table'>

                        </div>
                        <div class="form-group">


                            <label class='required form-label'>Schema</label>
                            <input type='text' required class='form-control' name='schema' value='' placeholder='Schema'>

                        </div>
                        <h1>Form</h1>
                    <table class="table">
                        <tr>
                            <th>Field</th>
                            <th>Type</th>
                            <th>Include Table</th>
                        <tr>
                        <tr id="tr_0" nomor="0" class="ada">
                            <td><input type="text" placeholder="Nama Field" name="field[]" class="form-control"></td>
                            <td><select name="type[]" class="form-control">
                                    <option value="text">Text</option>
                                    <option value="email">Email</option>
                                    <option value="password">Password</option>
                                    <option value="textarea">Textarea</option>
                                    <option value="file">File</option>
                                </select>
                            </td>
                            <td>
                                <select name="tables[]" class="form-control">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </td>
                            <td>
                                <a href="#" onclick="hapus(0);return false;" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tbody id="isi">

                        </tbody>
                    </table>

                    <a href="#" onclick="tambah(); return false;" class="btn btn-info">Add New Field</a>
                    <input type="submit" value="Submit" id="submit" class="btn btn-primary" />


                    </form>
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
            var str = '<tr id="tr_'+length+'" nomor="'+length+'" class="ada">'
                            +'<td><input type="text" placeholder="Nama Field" name="field[]" class="form-control"></td>'
                            +'<td><select name="type[]" class="form-control">'
                                    +'<option value="text">Text</option>'
                                    +'<option value="email">Email</option>'
                                    +'<option value="password">Password</option>'
                                    +'<option value="textarea">Textarea</option>'
                                    +'<option value="file">File</option>'
                                +'</select>'
                            +'</td>'
                            +'<td>'
                                +'<select name="tables[]" class="form-control">'
                                    +'<option value="1">Ya</option>'
                                    +'<option value="0">Tidak</option>'
                                +'</select>'
                            +'</td>'
                            +'<td>'
                                +'<a href="#" onclick="hapus('+length+');return false;" class="btn btn-danger">Delete</a>'
                            +'</td>'
                        +'</tr>';
            $("#isi").append(str);
        }
        function hapus(i){
            $("#tr_"+i).remove();
        }
    </script>
@endpush
