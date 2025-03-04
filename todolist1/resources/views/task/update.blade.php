<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <title>Mise a jour d'une tache</title>
    </head>
<body>

  <!--  <form action="{{route('update.task',$task->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Contenu</label>
        <input type="text" name='content' value="{{old('content' , $task->content)}}" >
        <input type="checkbox" name="completed" id="" value="true"  {{old('completed', $task->completed ) ? 'checked' : ''}}>
        <button>Modifier</button>
    </form>
-->
<h1 class="text-center m-5" > Modifier une tache</h1>
<form action="{{route('update.task',$task->id)}}" method="post" class="container ">
    @csrf
    @method('PUT')
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="content" placeholder="contenu" required value="{{old('content',$task->content)}}">
    <label for="floatingInput">titre</label>
  </div>
  <div class=" mb-3">
    
    <label for="">Status :</label>
    <input type="checkbox"  name="completed" value="true" {{old('completed',$task->completed) ? 'checked' : ''}}>
  </div >
  
   <button type="submit" class="btn btn-success"> Valider les modifications</button>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>