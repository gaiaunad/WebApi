create database login;
  use login;
  create table registros(
    username varchar (255) not null, password varchar (255) not null
  )Engine InnoDB default charset=latin1;
