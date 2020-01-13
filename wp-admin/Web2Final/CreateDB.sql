create TABLE users
(
  user_id int(11) primary key not null auto_increment,
  user_name varchar(255) not null,
  user_email varchar(255) not null,
  user_hash varchar(255) not null,
  user_role int(1) not null,
  wish_list SET(INTERGER NOT NULL),
  update_date timestamp default current_timestamp,
  join_date timestamp default current_timestamp
)

create TABLE pokemons
(
  pokemon_id int(11) primary key not null auto_increment,
  pokemon_name varchar(255) not null,
  filename varchar(255) not null,
  ext varchar(10) not null,
  uploaded_by int(11) not null,
  update_date timestamp default current_timestamp,
  join_date timestamp default current_timestamp
)

INSERT into pokemons values(default,"Mega Rayquaza","384_f2.png","png",0,default,default);
INSERT into pokemons values(default,"Primal Groudon","383_f2.png","png",0,default,default);
INSERT into pokemons values(default,"Primal Kyogre","382_f2.png","png",0,default,default);
INSERT into pokemons values(default,"Mega Blaziken","257_f2.png","png",0,default,default);

INSERT into pokemons values(default,"Empoleon","395.png","png",0,default,default);
INSERT into pokemons values(default,"Garchomp","445_f2.png","png",0,default,default);
INSERT into pokemons values(default,"Lucario","448_f2.png","png",0,default,default);
INSERT into pokemons values(default,"Giratina","487_f2.png","png",0,default,default);

INSERT into pokemons values(default,"Darkrai","491.png","png",0,default,default);
INSERT into pokemons values(default,"Arceus","493.png","png",0,default,default);
INSERT into pokemons values(default,"Volcanion","721.png","png",0,default,default);
INSERT into pokemons values(default,"Mega Charizard","257_f2.png","png",0,default,default);

INSERT into mon values(default,"Tên món","Mô tả món",Giá,Loại,"Tên file hình","Đuôi file",0,default,default)
*Giá: vd 100.000 để là 100
*Loại: 
1-Món mặn
2-Món ngọt
3-Đồ uống


