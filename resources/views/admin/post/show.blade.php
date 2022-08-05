<h1>Detalhes do Post {{ $post->title }}</h1>

<ul>
    <li> <strong>Titulo: </strong> {{ $post->title }}</li>
    <li> <strong>Content: </strong> {{ $post->content }}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o post {{ $post->title }}</button>
</form>
