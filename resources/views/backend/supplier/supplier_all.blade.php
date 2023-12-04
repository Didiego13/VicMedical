@extends('admin.admin_master')
@section('admin')

<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Todos los Proveedores</h4>
        </div>
      </div>
    </div>
    <!-- end page title -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('supplier.add') }}" class="btn btn-info waves-effect waves-light" style="float:right; font: 100% sans-serif;">
              Registrar Proveedor
            </a>
            <br>
            <br>
            <h4 class="card-title">Datos de los Proveedores</h4>

            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Empresa</th>
                  <th>País</th>
                  <th>Acción</th>
                </tr>
              </thead>

              <tbody>
                @foreach($suppliers as $key => $item)
                <tr>
                  <td> {{ $key+1 }} </td>
                  <td> {{ $item->name }} </td>
                  <td> {{ $item->email }} </td>
                  <td> {{ $item->store_name }} </td>
                  <td> {{ $item->country }} </td>
                  <td>
                    <a href="{{ route('supplier.edit', $item->id) }}" class="btn btn-info sm" title="Editar">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ route('supplier.delete', $item->id) }}" class="btn btn-danger sm" title="Eliminae" id="delete">
                      <i class="fas fa-trash-alt"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div> <!-- end col -->
    </div> <!-- end row -->
  </div> <!-- container-fluid -->
</div>

@endsection
