<div class="modal fade" id="crearModalCiudad" tabindex="-1" aria-labelledby="exampleModalCrearCiudades" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCrearCiudades">Agregar productos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="productoForm" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nombre" class="form-label">Nombre<span class="required"></span></label>
                            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="apellido" class="form-label">Codigo<span class="required"></span></label>
                            <input type="number" class="form-control form-control-sm" id="codigo" name="codigo" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="apellido" class="form-label">Precio<span class="required"></span></label>
                            <input type="number" class="form-control form-control-sm" id="price" name="price" required>
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label for="almacen_id" class="form-label">Almacen<span class="required"></span></label>
                            <select class="form-select form-select-sm" data-control="select2" data-placeholder="Seleccione un almacen" name="almacen_id" required>
                                <option value=""></option>
                                @forelse ($almacenes as $almacen)
                                    <option value="{{ $almacen->id }}"> {{ $almacen->name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div> --}}
                        <div class="col-md-6 mb-3">
                            <label for="categoria_id" class="form-label">Categoria<span class="required"></span></label>
                            <select class="form-select form-select-sm" data-control="select2" data-placeholder="Seleccione una categoria" name="categoria_id" required>
                                <option value=""></option>
                                @forelse ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}"> {{ $categoria->name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="descripcion" class="form-label">Descripción<span class="required"></span></label>
                            <textarea class="form-control form-control-sm" id="descripcion" name="descripcion" required></textarea>
                        </div>
                        <!-- <div class="col-md-6 mb-3">
                            <label for="stock" class="form-label">Stock<span class="required"></span></label>
                            <input type="number" class="form-control form-control-sm" id="stock" name="stock" required>
                        </div> -->
                        <!-- <div class="col-md-12 mb-3">
                            <label for="stock" class="form-label">Código de barra <span class="required"></span></label>
                            <div class="d-flex justify-content-center">
                                 <img id="barcodeImage" src="" alt="Código de barras" style="display:none;">
                            </div>
                        </div>
                        <input type="hidden" id="barcodeInput" name="codigo_barras"> -->

                        <!-- Botón para generar el código de barras -->
                        <!-- <div class="d-flex justify-content-center mt-3">
                            <button type="button" class="btn btn-primary" onclick="generateBarcode()">Generar Código de Barra</button>
                        </div> -->
                        <div class="col-md-12 mb-5">
                            <label class="form-label">Imagen</label>
                            <div class="image-upload-wrap" id="image-upload-wrap1">
                                <input class="file-upload-input" id="file-upload-input1" type='file' name="imagen" onchange="readURL(this, '1');" accept="image/jpg, image/jpeg, image/png" />
                                <div class="drag-text">
                                    <h3>Arrastra la imagen o selecciona</h3>
                                </div>
                            </div>
                            <div class="file-upload-content" id="file-upload-content1">
                                <img class="file-upload-image" id="file-upload-image1" alt="imagen" />
                                <div class="image-title-wrap" id="image-title-wrap1">
                                    <button type="button" onclick="removeUpload('1')" class="remove-image" id="remove-image1">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a data-bs-dismiss="modal" class="btn btn-secondary btn-sm">Cancelar</a>
                    <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
