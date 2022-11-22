<div>
    <label for="userId" class="me-2"> usuario: </label>
    <div class="col input-group input-group-mg">
        <span class="input-group-text"><i class="far fa-building"></i></span>

        <select class="form-control form-control-sm @error('userId') is-invalid @enderror" height="auto" type="text"
            name="userId" id="userId" value="{{ old('UserId',optional($usuario ?? null)->id) }}">
            {{-- <option selected value="">--- Seleccione una opcion ---</option> --}}

            @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}" @isset($usuario) {{ $usuario->id == $usuario->id ? 'selected' : '' }}
                @endisset>
                {{ $usuario->name }}</option>
            @endforeach
            <option selected value="">--- Seleccione una opcion ---</option>
        </select>

        @error('userId')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div>
        <label for="empresaId" class="me-2"> Empresa: </label>
        <div class="col input-group input-group-mg">
            <span class="input-group-text"><i class="far fa-building"></i></span>

            <select class="form-control form-control-sm @error('empresaId') is-invalid @enderror" height="auto"
                type="text" name="empresaId" id="empresaId"
                value="{{ old('empresaId',optional($empresa ?? null)->id) }}">
                {{-- <option selected value="">--- Seleccione una opcion ---</option> --}}

                @foreach($empresas as $empresa)
                <option value="{{ $empresa->id }}" @isset($empresa) {{ $empresa->id == $empresa->id ? 'selected' : '' }}
                    @endisset>
                    {{ $empresa->nombre_empresa }}</option>
                @endforeach
                <option selected value="">--- Seleccione una opcion ---</option>

            </select>
            @error('empresaId')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>