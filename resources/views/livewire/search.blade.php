<div>

    <div class="row">
        <input type="text" placeholder="Search article by title" wire:model="q">
    </div>

      <div class="row">

        @foreach ($articles as $article)
          <div class="col-3">
              <x-article :article="$article" />
          </div>
        @endforeach

        {{$articles->links()}}
      </div>

</div>