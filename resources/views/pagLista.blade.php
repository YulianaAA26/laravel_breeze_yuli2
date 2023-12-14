@extends('pagPlantilla')

@section('titulo')
      <h1 class="display-4">Pagina Lista</h1>
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

            @error('codEst')
                  <div class="alert alert-danger">
                  El codigo es requerido
                  </div>
            @enderror

            @error('nomEst')
                  <div class="alert alert-danger">
                  El codigo es requerido
                  </div>
            @enderror

            @if($errors ->has('apeEst'))
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        El <strong>apellido</strong> es requerido
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif

            <input type="text" name="codEst" placeholder="Codigo" value="{{ old('codEst') }}" class="form-control mb-2">
            <input type="text" name="nomEst" placeholder="Nombres" value="{{ old('nomEst') }}" class="form-control mb-2">      
            <input type="text" name="apeEst" placeholder="Apellidos" value="{{ old('apeEst') }}" class="form-control mb-2">
            <input type="date" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ old('fnaEst') }}" class="form-control mb-2">
            <select name="turMat" class=""form-control mb-2">
                  <option value="">Seleccione...</option>
                  <option value="1">Turno día</option>
                  <option value="2">Turno noche</option>
                  <option value="3">Turno tarde</option>
            </select>

            <select name="semMat" class="form-control mb-2">
                  <option value="">Seleccione...</option>
                  @for($i=0; $i < 7; $i++)
                        <option value="{{$i}}">Semestre {{$i}}</option>
                  @endfor
            </select>
            <select name="estMat" class="form-control mb-2">
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
                        <th scope="col">Id</th>
                        <th scope="col">codigo</th>
                        <th scope="col">Apellidos y Nombres</th>
                        <th scope="col">Handle</th>
                  </tr>
            </thead>
            <tbody>
                  @Foreach($xAlumnos as $item)
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