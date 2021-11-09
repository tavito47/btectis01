<!DOCTYPE html>
<html lang="en">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
<table class="table table-bordered">
<thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Titulo</th>
      
      <th scope="col">Fecha</th>
      <th scope="col">Codigo</th>
      <th scope="col">Semestre</th>
      
      <th scope="col">Creado</th>
      <th scope="col">Actualizado</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($convocatoria as $item)
        <tr>
            <td>{{@$item->id}}</td>
            <td>{{@$item->titulo}}</td>
            <td>{{@$item->fecha}}</td>
            <td>{{@$item->codigo}}</td>
            <td>{{@$item->semestre}}</td>
            <td>{{@$item->created_at}}</td>
            <td>{{@$item->updated_at}}</td>
            <td>
                <a href="{{ route('convocatoria.edit',$item->id)}}" class="btn btn-white btn-sm" ><i class="fas fa-edit"></i> </a>
                <a href="#" class="btn btn-white btn-sm" ><i class="fas fa-trash-alt"></i> </a>
                <!-- <a href="#" class="btn btn-white btn-sm" ><i class="fas fa-file-download"></i> </a> -->
                <!-- <a class="btn btn-danger" href="Archivo/{{$item->documento}}" target="blank_">Ver Documento</a> -->
            </td>
            <td>
            <a class="btn btn-danger" href="Archivo/{{$item->documento}}" target="blank_">Ver Documento</a>
            </td>
        </tr>
      @endforeach
     
    
  </tbody>

</table>
</body>
</html>