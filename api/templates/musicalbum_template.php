{ "collection" :
    {
        "title" : "MusicAlbum Database",
            "type" : "music",
            "kind" : "item",
            "version" : "1.0",
            "href" : "{{ path_for('musicalbums')}}",
      
            "links" : [
                {"rel" : "profile" , "href" : "http://schema.org/MusicAlbums","prompt":"Perfil"},
                {"rel" : "collection", "href" : "{{ path_for('movies') }}","prompt":"Movies"},
                {"rel" : "collection", "href" : "{{ path_for('tvseries') }}","prompt":"TV Series"},
                {"rel" : "collection", "href" : "{{ path_for('books') }}","prompt":"Books"},
                {"rel" : "collection", "href" : "{{ path_for('musicalbums') }}","prompt":"Music Albums"},
                {"rel" : "collection", "href" : "{{ path_for('games') }}","prompt":"Videogames"}
            ],
      
            "items" : [
                {
                    "href" : "{{ path_for('musicalbums') }}/{{ item.id }}",
                        "data" : [
                            {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre del Album", "type" : "text"},
                            {"name" : "description", "value" : "{{ item.description }}", "prompt" : "Descripción del Album", "type" : "textarea"},
                            {"name" : "datePublished", "value" : "{{ item.datePublished }}", "prompt" : "Fecha de publicación", "type" : "date"},
                            {"name" : "image", "value" : "{{ item.image }}", "prompt" : "Imagen", "type" : "img"},
                            {"name" : "embedUrl", "value" : "{{ item.embedUrl }}", "prompt" : "URL de SoundCloud", "type" : "embedURL"}
                        ]
                        } 
	  
            ],
      
            "template" : {
            "data" : [
                {"name" : "name", "value" : "", "prompt" : "Nombre del Album", "type" : "text"},
                {"name" : "description", "value" : "", "prompt" : "Descripción del Album", "type" : "textarea"},
                {"name" : "datePublished", "value" : "", "prompt" : "Fecha de publicación", "type" : "date"},
                {"name" : "image", "value" : "", "prompt" : "Imagen", "type" : "img"},
                {"name" : "embedUrl", "value" : "", "prompt" : "URL de SoundCloud", "type" : "embedURL"}     
            ]
                }
    } 
}




