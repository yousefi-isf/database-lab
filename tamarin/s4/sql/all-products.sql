SELECT movies.mo_name , movies.mo_year , movies.mo_creator , mo_genres.genre FROM movies INNER JOIN mo_genres ON movies.id = mo_genres.mo_id;
