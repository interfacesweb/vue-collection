{ "collection" :
    {
        "title" : "Movie Database",
            "type" : "movie",
            "kind" : "item",
            "version" : "1.0",
            "href" : "{{ path_for('movies')}}",
      
            "links" : [
                {"rel" : "profile" , "href" : "http://schema.org/Movie","prompt":"Perfil"},
                {"rel" : "collection", "href" : "{{ path_for('movies') }}","prompt":"Movies"},
                {"rel" : "collection", "href" : "{{ path_for('tvseries') }}","prompt":"TV Series"},
                {"rel" : "collection", "href" : "{{ path_for('books') }}","prompt":"Books"},
                {"rel" : "collection", "href" : "{{ path_for('musicalbums') }}","prompt":"Music Albums"},
                {"rel" : "collection", "href" : "{{ path_for('games') }}","prompt":"Videogames"}
            ],
      
            "items" : [
                {
                    "href" : "{{ path_for('movies') }}/{{ item.id }}",
                        "data" : [
                            {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre de la película", "type" : "text"},
                            {"name" : "description", "value" : "{{ item.description }}", "prompt" : "Descripción de la película", "type" : "textarea"},
                            {"name" : "director", "value" : "{{ item.director }}", "prompt" : "Director de la película", "type" : "text"},
                            {"name" : "datePublished", "value" : "{{ item.datePublished }}", "prompt" : "Fecha de lanzamiento", "type" : "date"},
                            {"name" : "embedUrl", "value" : "{{ item.embedUrl }}", "prompt" : "Trailer en Youtube", "type" : "embed"}
                        ]
                        } 
	  
            ],
      
            "template" : {
            "data" : [
                {"name" : "name", "value" : "", "prompt" : "Nombre de la película", "type" : "text"},
                {"name" : "description", "value" : "", "prompt" : "Descripción de la película", "type" : "textarea"},
                {"name" : "director", "value" : "", "prompt" : "Director de la película", "type" : "text"},
                {"name" : "datePublished", "value" : "", "prompt" : "Fecha de lanzamiento", "type" : "date"},
                {"name" : "embedUrl", "value" : "", "prompt" : "Trailer en Youtube", "type" : "embed"}        
            ]
                }
    } 
}




