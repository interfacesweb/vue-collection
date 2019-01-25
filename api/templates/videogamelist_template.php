{ "collection" :
    {
        "title" : "VideoGame Database",
            "type" : "VideoGame",
            "kind" : "collection",
            "version" : "1.0",
            "href" : "{{ path_for('games')}}",

            "links" : [
                {"rel" : "profile" , "href" : "http://schema.org/videogames","prompt":"Perfil"},
                {"rel" : "collection", "href" : "{{ path_for('movies') }}","prompt":"Movies"},
                {"rel" : "collection", "href" : "{{ path_for('tvseries') }}","prompt":"TV Series"},
                {"rel" : "collection", "href" : "{{ path_for('books') }}","prompt":"Books"},
                {"rel" : "collection", "href" : "{{ path_for('musicalbums') }}","prompt":"Music Albums"},
                {"rel" : "collection", "href" : "{{ path_for('games') }}","prompt":"Videogames"}
            ],
      
            "items" : [
                {% for item in items %}
	  
                {
                    "href" : "{{ path_for('games') }}/{{ item.id }}",
                        "data" : [
                            {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre del Juego", "type" : "text"}
                        ]
                        } {% if not loop.last %},{% endif %}
	  
                {% endfor %}
	  
            ],
      
            "template" : {
            "data" : [
                {"name" : "name", "value" : "", "prompt" : "Nombre del Juego", "type" : "text"},
                {"name" : "description", "value" : "", "prompt" : "Descripción del Juego", "type" : "textarea"},
                {"name" : "gamePlatform", "value" : "", "prompt" : "Plataforma del Juego", "type" : "text"},
                {"name" : "applicationSubCategory", "value" : "", "prompt" : "Categoria del Juego", "type" : "text"},
                {"name" : "screenshot", "value" : "", "prompt" : "URL of a captura del juego", "type" : "img"},
                {"name" : "datePublished", "value" : "", "prompt" : "Fecha de lanzamiento", "type" : "date"},
                {"name" : "embedUrl", "value" : "", "prompt" : "Trailer en Youtube", "type" : "embed"}        
            ]
                }
    } 
}




