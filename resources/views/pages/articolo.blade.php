<x-layout>
    <h2>{{$article->title}}</h2>
    <br>
    {{-- {!!$article['title']!!} --}}
    <p>{{$article->body ?? 'Corpo non presente'}}</p>
</x-layout>