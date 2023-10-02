@extends('layouts.app')

@section('template_title')
    Asociado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asociado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asociados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Dpi</th>
										<th>Nit</th>
										<th>Telefono</th>
										<th>Producto Id</th>
										<th>Es Asociado Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asociados as $asociado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $asociado->primer_nombre }}</td>
											<td>{{ $asociado->segundo_nombre }}</td>
											<td>{{ $asociado->primer_apellido }}</td>
											<td>{{ $asociado->segundo_apellido }}</td>
											<td>{{ $asociado->dpi }}</td>
											<td>{{ $asociado->nit }}</td>
											<td>{{ $asociado->telefono }}</td>
											<td>{{ $asociado->producto_id }}</td>
											<td>{{ $asociado->es_asociado_id }}</td>

                                            <td>
                                                <form action="{{ route('asociados.destroy',$asociado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asociados.show',$asociado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asociados.edit',$asociado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $asociados->links() !!}
            </div>
        </div>
    </div>
@endsection
