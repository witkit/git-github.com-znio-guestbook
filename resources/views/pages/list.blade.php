
    <h3>Lista wpisów</h3>

    <hr>

    <table class="table table-bordered table-condensed table-striped">

        <thead>

            <tr>
                <th class="col-xs-2">Imię</th>
                <th>Wiadomość</th>
                <th class="col-xs-2">Utorzono</th>
            </tr>

        </thead>

        <tbody>

        @foreach($posts as $post)

            <tr>
                <td>
                    <a href="{{ url('pages', $post->id) }}" title="Więcej">
                        {{ $post->name }}
                    </a>
                </td>
                <td>
                    <span class="pull-left">{{ str_limit($post->message, 100, ' ... ') }}</span>
                    <a href="{{ url('pages', $post->id) }}" title="Czytaj więcej">
                        <span class="pull-right glyphicon glyphicon-circle-arrow-right"></span>
                    </a>
                </td>
                <td>{{ $post->created_at }}</td>
            </tr>

        @endforeach

        </tbody>

    </table>

    <p class="text-right">Liczba wpisów {{ $posts->count() }} z {{ $posts->total() }}</p>

    <div class="text-center">
        {{ $posts->links() }}
    </div>
