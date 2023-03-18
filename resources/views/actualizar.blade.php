<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<form action="{{ route('pol.update' , $pol -> id) }} " method="POST" class="container">
    @csrf
    @method("PUT")
    <label for="" class="col-form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" required value="{{ $pol -> nombre}} ">
    <label for="">Velocidad</label>
    <input type="int" name="velocidad" class="form-control" required value="{{ $pol -> velocidad}} ">
    <label for="">Posicion</label>
    <input type="int" name="posicion" class="form-control" required value="{{ $pol -> posicion}} ">
    <label for="">Fisico</label>
    <input type="int" name="fisico" class="form-control" required value="{{ $pol -> fisico}} ">
    <label for="">Ritmo</label>
    <input type="int" name="ritmo" class="form-control" required value="{{ $pol -> ritmo}} ">
    <label for="">Regate</label>
    <input type="int" name="regate" class="form-control" required value="{{ $pol -> regate}} ">
    <br><br>

    <a href="{{ route('pol.index')}}" class="p-3 text-danger"> Cancelar</a>
    <button class="p-3 btn btn-primary">Actualizar</button>
</form>