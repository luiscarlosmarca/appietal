@extends('layout')
@section('content')

<h1> Listado de Aspirantes Aprobados </h1>
<div class="bs-example" data-example-id="simple-table">
   <table class="table">

      <thead>
         <tr>
         <th>#</th>
         <th>First Name</th>
          <th>Last Name</th>
           <th>Username</th>
          </tr>
         </thead>
          <tbody>
             <tr>
               <th scope="row">1</th>
               <td>Mark</td> <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                 <th scope="row">2</th>
                  <td>Jacob</td>
                   <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                   <tr>
                      <th scope="row">3</th>
                       <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
</div>
@endsection
