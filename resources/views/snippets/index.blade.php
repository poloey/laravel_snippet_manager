@component('layout')
    @forelse ($snippets as $snippet)
        <article class="snippet">
            <div class="is-flex">
                <h4 class="title is-4 flex">
                    <a href="/snippets/{{ $snippet->id }}">
                        {{ $snippet->title }}
                    </a> 

                    <form style="display: inline-block;" action="{{ route('snippets.destroy', ['snippet' => $snippet->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="button is-danger">Delete</button>
                    </form>

                </h4>   

                <a href="/snippets/{{ $snippet->id }}/fork">Fork Me</a>
            </div>

            <pre>
                <code>{{ $snippet->body }}</code>
            </pre>
        </article>
    @empty
        <a href="/snippets/create">Create Snippet</a>
    @endforelse
@endcomponent
