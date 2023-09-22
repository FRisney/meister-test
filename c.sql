select p.first_name, p.last_name, c.first_name from persons p inner join children c on c.parent_id = p.id
