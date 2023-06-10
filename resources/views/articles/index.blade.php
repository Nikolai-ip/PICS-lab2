<h1>Список статей</h1>
    
    <form action="{{route('articles.index')}}" method="GET">
        <div>
            <label for="code">Символьный код:</label>
            <input type="text" name="code" value="{{request('code')}}">
        </div>
        
        <div>
            <label for="title">Название:</label>
            <input type="text" name="title" value="{{request('title')}}">
        </div>
        
        <div>
            <label for="tag">Тэг:</label>
            <input type="text" name="tag" value="{{request('tag')}}">
        </div>

        <div>
            <button type="submit">Применить фильтры</button>
        </div>
    </form>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Символьный код</th>
                <th>Тэги</th>
                <th>Содержание</th>
                <th>Дата создания</th>
                <th>Автор</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->code }}</td>
                    <td>{{ $article->tag }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->date }}</td>
                    <td>{{ $article->author }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{ $articles->links() }}
