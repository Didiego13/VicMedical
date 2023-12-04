@extends('admin.admin_master')
@section('admin')

<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Dashboard</h4>
          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">ADMIN</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

   <div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="d-flex">
            <div class="flex-grow-1">
              <p class="text-truncate font-size-14 mb-2">Total Ventas</p>
              <h4 class="mb-2">Bs</h4>
            </div>
            <div class="avatar-sm">
              <span class="avatar-title bg-light text-primary rounded-3">
                <i class="ri-shopping-cart-2-line font-size-24"></i>
              </span>
            </div>
          </div>
        </div><!-- end cardbody -->
      </div><!-- end card -->
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="d-flex">
            <div class="flex-grow-1">
              <p class="text-truncate font-size-14 mb-2">Total Compras</p>

              <h4 class="mb-2">Bs</h4>
            </div>
            <div class="avatar-sm">
              <span class="avatar-title bg-light text-primary rounded-3">
                <i class="fas fa-money-bill-wave font-size-24"></i>
              </span>
            </div>
          </div>
        </div><!-- end cardbody -->
      </div><!-- end card -->
    </div>
   </div>

   <div class="row">
     <div class="col-md-6">
       <div class="modal-content" style="height:360px;">
         <div class="modal-header">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
           <h5 class="modal-title" id="exampleModalScrollableTitle">Productos que requieren atención <i class="bi bi-exclamation-triangle"></i></h5>
         </div>

         <div class="modal-body overflow-auto">
           <tbody>

             <tr>

               <td>
                 <div class="alert alert-primary alert-dismissible fade show" role="alert">
                 Ya se están terminando las unidades de este producto -> <strong></strong>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
               </td><br>

             </tr>

           </tbody>
         </div>
       </div><!-- /.modal-content -->
     </div>

     <div class="col-md-6">
       <div class="">
         <div class="card">
           <div class="card-body">
             <h4 class="card-title">Productos más vendidos</h4>
             <div class="table-responsive">
               <table class="table table-borderless mb-0">
                 <thead>
                   <tr>
                     <th>#</th>
                     <th>Producto</th>
                     <th>Stock</th>
                     <th>Vendido</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>

                     <th scope="row"></th>
                     <td></td>
                     <td> Kg</td>
                     <td> Kg</td>
                   </tr>

                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  </div>
</div>

  @endsection
