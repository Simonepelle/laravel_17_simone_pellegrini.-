<x-layout>

    <h3>Compila il form di contatto</h3>

    @if(session()->has('error'))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>
    @endif

    <form method="POST" action="{{route('contatti.salva')}}">
        
        @csrf

        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">Nome e Cognome</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" style="height: 100px" name="message"></textarea>
            <label>Messaggio</label>
        </div>


        <button type="submit" class="btn btn-primary">Invia</button>
    </form>

</x-layout>