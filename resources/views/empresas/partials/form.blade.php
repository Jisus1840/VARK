
<div>
    <label for="nombre_empresa" class="me-2">Nombre de la Empresa: </label>
    <div class="col input-group input-group-mg">
        <span class="input-group-text"><i class="far fa-building"></i></span>
        <input class="form-control form-control-mg @error('nombre_empresa') is-invalid @enderror"
        type="text" name="nombre_empresa" id="nombre_empresa"
        value="{{ old('nombre_empresa', optional($empresa ?? null)->nombre_empresa) }}">

        @error('nombre_empresa')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>