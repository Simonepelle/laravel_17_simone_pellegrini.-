<x-layout>

    <h3>Crea Articolo</h3>

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

    <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control  @error('title') is-invalid @enderror" 
            name="title" 
            value="{{old('title')}}"
            placeholder="Inserisci il titolo">

            @error('title')
                <span class="small text-danger">{{$message}}</span>
            @enderror

        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control  @error('body') is-invalid @enderror" style="height: 100px" name="body">{{old('body')}}</textarea>
            <label>Contenuto</label>
            
            @error('body')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Inserisci immagine </label>
            <input class="form-control" type="file" name="cover">

            @error('cover')
                <span class="small text-danger">{{$message}}</span>
            @enderror

        </div>

        <select class="form-select mb-3" name="author_id">
            <option selected>Scegli autore</option>
            @foreach($authors as $author)
                <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
            @endforeach
        </select>
        @error('author_id')
            <span class="small text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            @foreach($categories as $category)
                <input type="checkbox" name="categories[]" value="{{$category->id}}">
                <label>{{$category->title}}</label>
            @endforeach
            <br>
            @error('categories')
                <span class="small text-danger">{{$message}}</span>
            @enderror

            @error('categories.*')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>

</x-layout>