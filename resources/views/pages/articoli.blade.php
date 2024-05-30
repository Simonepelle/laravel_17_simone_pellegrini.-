<x-layout>


      <div class="row">

        @foreach ($articles as $article)
          <div class="col-3">
              <x-article :article="$article" />
          </div>
        @endforeach

        {{$articles->links()}}
      </div>


</x-layout>