<html>
    <head>
        <title>CDs</title>
    </head>
    <body>
        <h1>Tell me which CDs you have: </h1>
        <form action="/create_cd" method='post'>
            <label for='name'>CD name: </label>
            <input id='name' name='name' type='text'>

            <button type='submit'>Enter!</button>
        </form>

        <h1> Here are your CDs </h1>
        {% if cds is not empty %}
                <p>Here are all your CDs:</p>
                <ul>
                    {% for cd in cds %}
                        <li>{{ cd.getAlbum }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
    </body>
</html>
