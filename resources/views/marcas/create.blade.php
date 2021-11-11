<h3> Nova Marca</h3>
<form action="{{route('marcas.store')}}" method="POST">
    @csrf
    <input type="text" , name="name">
    <input type="submit" , name="Salvar ">
</form>
