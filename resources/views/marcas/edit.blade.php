<h3> Nova Marca</h3>
<form action="{{route('marcas.update', $brand['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" , name="name", value="{{$brand['name']}}">
    <input type="submit" , value="Salvar">
</form>
