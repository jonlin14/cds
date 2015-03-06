<html>
    <head>
        <title>CDs</title>
    </head>
    <body>
        <h1>Tell me which CDs you have: </h1>
        <form action="/create_cd" method='post'>
            <label for='name'>CD name: </label>
            <input id='name' name='name' type='text'>
            <label for='artist'>Enter the Artist: </label>
            <input id='artist' name='artist' type='text'>

            <button type='submit'>Enter!</button>
        </form>

        <form action='delete_cds' method='post'>
            <button type='submit'>Delete All</button>
        </form>

        <h1> Here are your CDs </h1>
        {% if cd2 is not empty %}
                <p>Here are all your CDs:</p>
                <ul>
                    {% for cd in cd2 %}
                        <li>Album : {{ cd.getAlbum }}</li>
                        <li>Artist : {{ cd.getArtist }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
    </body>
</html>
