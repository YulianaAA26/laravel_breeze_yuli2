@extends('pagPlantilla')

@section('titulo')
      <h1 class="display-4">Pagina seguimientos</h1>
@endsection

@section('seccion')
      @if(session('msj'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('msj') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div>
      @endif
      <form action="{{ route('Estudiante.xRegistrar') }}" method="post" class="d-grid gap-2">
            @csrf

            @error('idEst')
                  <div class="alert alert-danger">
                  El codigo es requerido
                  </div>
            @enderror
            
            <input type="text" name="idEst" placeholder="Foraneo" value="{{ old('idEst') }}" class="form-control mb-2">
            <h6>Trabajo Actual</h6>
            <select name="traAct" class=""form-control mb-2">
                  <option value="">Seleccione...</option>
                  <option value="1">Si</option>
                  <option value="2">No</option>
            </select>
            <h6>Oficio Actual</h6>
            <select name="ofiAct" class=""form-control mb-2">
                  <option value="">Seleccione...</option>
                  <option value="1">1cp</option>
                  <option value="2">2cp</option>
                  <option value="3">3cp</option>
                  <option value="4">4cp</option>
       s           <option value="5">5cp</option>
                  <option value="6">6cp</option>
                  <option value="7">7cp</option>
                  <option value="8">8cp</option>
                  <option value="9">9cp</option>
                  <option value="10">10cp</option>
                  <option value="11">11cp</option>
            </select>

            <h6>Satisfaccion Estudiantil</h6>
            <select name="satEst" class=""form-control mb-2">
                  <option value="">Seleccione...</option>
                  <option value="1">0 No esta satisfecho</option>
                  <option value="2">1 Regular</option>
                  <option value="3">2 Bueno</option>
                  <option value="4">3 Muy bueno</option>
 
            </select>
            <h6>Fecha de Seguimiento</h6>
            <input type="date" name="fecSeg" placeholder="Fecha de seguimiento" value="{{ old('fecSeg') }}" class="form-control mb-2">
            
            <h6>Estado de Seguimiento</h6>
            <select name="estSeg" class="form-control mb-2">
                  <option value="">Seleccione...</option>
                  <option value="1">Inactivo</option>
                  <option value="2">Activo</option>
            </select>
            <button class="btn btn-primary" type="submit">Agregar</button>


      
      </form>
      <br/>

      <div class="btn btn-danger fs-3 fw-bold d-grid">Lista de seguimientos</div>
      <table class="table">
            <thead class="table-secondary">
                  <tr>
                        <th scope="col">IdSeg</th>
                        <th scope="col">Trabajo Actual</th>
                        <th scope="col">Oficio actual</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>
                  </tr>
            </thead>
            <tbody>
                  @Foreach($xSeguimiento as $item)
                  <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->codEst }}</td>
                        <td>
                              <a href="{{ route('Estudiante.xDetalle', $item->id) }}">      
                                    {{ $item->apeEst }}, {{ $item->nomEst }}
                              </a>
                        <td>@mdo</td>
                  </tr>
                  @endforeach
            </tbody>
      </table>
      
@endsection