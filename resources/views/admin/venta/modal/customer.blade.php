<div class="modal fade" id="crearModalCliente" tabindex="-1" aria-labelledby="exampleModalCrearMedicamento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCrearMedicamento">Lista Clientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="medicamentoForm" method="post">
                <div class="modal-body">
                    @csrf
                    <table id="datatablesSimple" class="border-dark">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody id="tabla">
                            @forelse ($clientes as $item)
                              <tr>
                                  <td><div style="margin-left: 10px"><img src="{{asset($item->image)}}" height="40" alt=""></div></td>
                                  <td><div style="margin-left: 10px">{{$item->name}}</div></td>
                                  <td><div style="margin-left: 10px">{{$item->address}}</div></td>
                                  <td><div style="margin-left: 10px">{{$item->cod}} {{$item->phone}}</div></td>
                                  <td>
                                      <a onclick="agregarAdata(`{{$item->id}}`, `{{$item->name}}`,`{{$item->address}}`)" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Editar" style="background-color:green">
                                          <i class="fa-solid fa-check" style="color:#fff"></i>
                                      </a>
                                  </td>
                              </tr>
                            @empty
                                <tr><td>No se encontraron datos</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <a data-bs-dismiss="modal" class="btn btn-secondary btn-sm">Cancelar</a>
                    {{-- <button type="submit" class="btn btn-primary btn-sm">Guardar</button> --}}
                </div>
            </form>
        </div>
    </div>
</div>
