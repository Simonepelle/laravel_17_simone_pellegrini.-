<div class="card" style="width: 18rem;">

  @if($article->cover)
    <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="...">
  @else
  <img src="https://picsum.photos/id/1/300/200" class="card-img-top" alt="...">
  @endif

  <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>

      @empty($article->author)
        <p>{{'Autore non presente'}}</p>    
      @else
        <a href="{{route('article.byAuthor',$article->author)}}">{{$article->author->name}} {{$article->author->surname}} </a>    
      @endempty
    <br>

      @foreach($article->categories as $category)

      <div class="m-1">
        <a href="{{route('article.byCategory',$category)}}">{{$category->title}}</a> 
      </div>
      
      @endforeach
      <p class="card-text">{{Str::limit($article->body ?? 'Corpo non presente',50)}}</p>
      <a href="{{route('articolo',['id'=>$article->id])}}" class="btn btn-primary">Leggi di più</a>
    </div>
  </div>