<x-layout>

<h1>Lista delle catregorie.</h1>


@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Numero Articoli</th>
      <th scope="col">Azioni</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->title}}</td>
      </td>

      <td>
      {{$category->articles->count()}}
      </td>

     
      <td>

      <a href="{{route('categories.show', $category)}}" class="btn btn-outline-dark">Ispeziona</a>
      <a href="{{route('categories.edit', $category)}}" class="btn btn-outline-secondary">Modifica</a>
     <form method="POST" action="{{route('categories.destroy', $category)}}" >
      @csrf
      @method('DELETE')
     <button type="submit" class="btn btn-outline-danger" onclick="alert('Sei sicuro di voler eliminare questa categoria?')"> Elimina</button>
     </form>
      </td>
    </tr>
    @endforeach
   

  
  </tbody>
</table>
