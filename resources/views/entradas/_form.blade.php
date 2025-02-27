@csrf

<label class="uppercase text-gray-700 text-xs">Titulo</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>
<input 
    type="text" 
    name="title" 
    class="rounded border-gray-200 w-full mb-4" 
    value="{{ old('title', $entrada->title) }}" 
/>

<label class="uppercase text-gray-700 text-xs">Entrada ID</label>
<span class="text-xs text-red-600">@error('entrada_id') {{ $message }} @enderror</span>
<input 
    type="text" 
    name="entrada_id" 
    class="rounded border-gray-200 w-full mb-4" 
    value="{{ old('entrada_id', $entrada->entrada_id) }}" 
/>

<label class="uppercase text-gray-700 text-xs">Contenido</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
<textarea 
    name="body" 
    rows="5" 
    class="rounded border-gray-200 w-full mb-4"
>{{ old('body', $entrada->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('misentradas.index') }}" class="text-indigo-600">Atrás</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2" />
</div>