SELECT movies.id, movies.mo_name , movies.mo_year , movies.mo_creator,  mo_genres.genre FROM mo_genres inner join movies on movies.id = mo_genres.mo_id WHERE movies.id = 2;
