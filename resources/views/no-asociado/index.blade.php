@extends('layouts.app')

@section('template_title')
    No Asociado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('No Asociado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('no-asociados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Es Asociado Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($noAsociados as $noAsociado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $noAsociado->primer_nombre }}</td>
											<td>{{ $noAsociado->segundo_nombre }}</td>
											<td>{{ $noAsociado->primer_apellido }}</td>
											<td>{{ $noAsociado->segundo_apellido }}</td>
											<td>{{ $noAsociado->dpi }}</td>
											<td>{{ $noAsociado->nit }}</td>
											<td>{{ $noAsociado->telefono }}</td>
											<td>{{ $noAsociado->es_asociado_id }}</td>

                                            <td>
                                                <form action="{{ route('no-asociados.destroy',$noAsociado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('no-asociados.show',$noAsociado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('no-asociados.edit',$noAsociado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $noAsociados->links() !!}
            </div>
        </div>
    </div>
@endsection
