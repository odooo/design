CREATE EVENT update_users_event 
    ON SCHEDULE AT '2017-02-12 19:35:00'
    DO UPDATE agent SET enabled=0, locked=1;

CREATE EVENT update_users_event 
    ON SCHEDULE AT '2017-02-12 19:35:00'
    DO UPDATE agent SET enabled=0;