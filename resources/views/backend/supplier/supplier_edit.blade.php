@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Editar Proveedor</h4><br><br>
            <form method="post" action="{{ route('supplier.update') }}" id="myForm">
              @csrf
              <input type="hidden" name="id" value="{{ $supplier->id }}">
              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Nombre</label>
                <div class="form-group col-sm-10">
                  <input name="name" class="form-control" type="text" value="{{ $supplier->name }}">
                  @error('name')
                  <span class="badge bg-danger" style="font-size:10pt;">Rellene el campo</span>
                  @enderror
                </div>
              </div>
              <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Correo</label>
                <div class="form-group col-sm-10">
                  <input name="email" class="form-control" type="email" value="{{ $supplier->email }}">
                  @error('email')
                  <span class="badge bg-danger" style="font-size:10pt;">Rellene el campo</span>
                  @enderror
                </div>
              </div>
              <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Empresa</label>
                <div class="form-group col-sm-10">
                  <input name="store_name" class="form-control" type="text" value="{{ $supplier->store_name }}">
                  @error('store_name')
                  <span class="badge bg-danger" style="font-size:10pt;">Rellene el campo</span>
                  @enderror
                </div>
              </div>
              <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">País</label>
                <div class="form-group col-sm-10">
                  <input name="country" class="form-control" type="text" value="{{ $supplier->country }}">
                  @error('country')
                  <span class="badge bg-danger" style="font-size:10pt;">Rellene el campo</span>
                  @enderror
                </div>
              </div>
              <!-- end row -->

              <input type="submit" class="btn btn-success waves-effect waves-light" value="Actualizar">
            </form>
          </div>
        </div>
      </div> <!-- end col -->
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function (){
    $('#myForm').validate({
      rules: {
        name: {
          required : true,
        },
        email: {
          required : true,
        },
        store_name: {
          required : true,
        },
        country: {
          required : true,
        },
      },
      messages :{
        name: {
          required : 'Por favor ingrese el Nombre',
        },
        email: {
          required : 'Por favor ingrese el Correo',
        },
        store_name: {
          required : 'Por favor ingrese el Nombre de la Empresa',
        },
        country: {
          required : 'Por favor ingrese el País',
        },
      },
      errorElement : 'span',
      errorPlacement: function (error,element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight : function(element, errorClass, validClass){
        $(element).addClass('is-invalid');
      },
      unhighlight : function(element, errorClass, validClass){
        $(element).removeClass('is-invalid');
      },
    });
  });
</script>

@endsection
