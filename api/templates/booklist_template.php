{ "collection" :
    {
        "title" : "Book Database",
            "type" : "book",
            "kind" : "collection",
            "version" : "1.0",
            "href" : "{{ path_for('books')}}",

            "links" : [
                {"rel" : "profile" , "href" : "http://schema.org/Book","prompt":"Perfil"},
                {"rel" : "collection", "href" : "{{ path_for('movies') }}","prompt":"Movies"},
                {"rel" : "collection", "href" : "{{ path_for('tvseries') }}","prompt":"TV Series"},
                {"rel" : "collection", "href" : "{{ path_for('books') }}","prompt":"Books"},
                {"rel" : "collection", "href" : "{{ path_for('musicalbums') }}","prompt":"Music Albums"},
                {"rel" : "collection", "href" : "{{ path_for('games') }}","prompt":"Videogames"}
            ],
      
            "items" : [
                {% for item in items %}
	  
                {
                    "href" : "{{ path_for('books') }}/{{ item.id }}",
                        "data" : [
                            {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre del libro", "type" : "text"}
                        ]
                        } {% if not loop.last %},{% endif %}
	  
                {% endfor %}
	  
            ],
      
            "template" : {
            "data" : [
              {"name" : "name", "value" : "", "prompt" : "Nombre del libro", "type" : "text"},
              {"name" : "description", "value" : "", "prompt" : "Descripción del libro", "type" : "textarea"},
              {"name" : "isbn", "value" : "", "prompt" : "ISBN del libro", "type" : "text"},
              {"name" : "datePublished", "value" : "", "prompt" : "Fecha de publicación", "type" : "date"},
              {"name" : "image", "value" : "", "prompt" : "Imagen", "type" : "img"}        
            ]
                }
    } 
}




