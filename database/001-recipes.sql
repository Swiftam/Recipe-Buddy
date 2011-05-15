-- Create ingredients table
CREATE TABLE ingredients
(
  id int auto_increment primary key,
  name varchar(150) not null
);

-- Create recipes table
CREATE TABLE recipes
(
  id int auto_increment primary key,
  name varchar(255) not null,
  instructions text not null
);

-- Link recipes with their ingredients
CREATE TABLE recipes_ingredients
(
  id int auto_increment primary key,
  recipe_id int not null,
  ingredient_id int not null,
  description varchar(255) not null,
  constraint ri_fk_recipes
    foreign key ( recipe_id )
    references recipes( id ),
  constraint ri_fk_ingredients
    foreign key ( ingredient_id )
    references ingredients( id )
);
