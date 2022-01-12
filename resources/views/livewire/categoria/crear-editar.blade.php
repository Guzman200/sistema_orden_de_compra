<div>
    <!-- MODAL SUCURSALES -->
    <div wire:ignore.self class="modal fade" id="modalCategorias" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Crear categoría</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form autocomplete="off">

                        <div class="row">

                            

                            <div class="col-sm-12 col-md-4">
                                {{-- Código --}}
                                <div class="form-group">
                                    <label class="has-float-label">
                                        <input wire:model.defer="codigo" type="text"
                                            id="codigo"
                                            class="form-control hide-placeholder @error('codigo') is-invalid @enderror"
                                            placeholder="Codigo"
                                            wire:keydown.enter.prevent="siguienteInputFocus('#nombre')">
                                        <span>Código<sup>*</sup></span>
                                    </label>
                                    @error('codigo')
                                        <div class="invalid-feedback text-right d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                {{-- Nombre --}}
                                <div class="form-group">
                                    <label class="has-float-label">
                                        <input wire:model.defer="nombre" id="nombre" type="text"
                                            class="form-control hide-placeholder @error('nombre') is-invalid @enderror"
                                            placeholder="Nombre"
                                            wire:keydown.enter.prevent="storeUpdate">
                                        <span>Nombre<sup>*</sup></span>
                                    </label>
                                    @error('nombre')
                                        <div class="invalid-feedback text-right d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="modal-footer ml-auto">
                                <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Cerrar</button>
                                <button wire:click.prevent="storeUpdate" wire:loading.remove type="submit"
                                    class="btn btn-primary">Guardar</button>

                                <!-- Se muestra mientra se completa la petición -->
                                <div wire:loading.delay wire:target="storeUpdate">
                                    <button disabled type="button" class="btn btn-primary">
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        Cargando...
                                    </button>
                                </div>
                            </div>

                        </div>
                        <!-- ./row -->

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>