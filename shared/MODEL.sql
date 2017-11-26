-- TABLES
CREATE TABLE pollo
(
  id serial,
  cantidad_porciones integer,
  fecha date
);

CREATE TABLE plato
(
  id serial,
  nombre character varying(100),
  porcion integer,
  precio real,
  descripcion character varying(255),
  imagen text
);

CREATE TABLE cliente
(
  id serial,
  codigo integer,
  cliente character varying(100)
);

CREATE TABLE ticket
(
  id serial,
  numero_pedido integer
);

CREATE TABLE refresco
(
  id serial,
  categoria_refresco_id integer,
  tipo_refresco_id integer,
  precio real,
  cantidad_unidades integer
);

CREATE TABLE categoria_refresco
(
  id serial,
  nombre character varying(50),
  contenido character varying(10)
);

CREATE TABLE tipo_refresco
(
  id serial,
  nombre character varying(50),
  imagen text
);

CREATE TABLE pedido
(
  id serial,
  cliente_id integer
);

CREATE TABLE pedido_refresco
(
  pedido_id integer,
  refresco_id integer
);

CREATE TABLE pedido_plato
(
  pedido_id integer,
  plato_id integer
);

-- CONSTRAINT'S

ALTER TABLE pollo ADD PRIMARY KEY (id);
ALTER TABLE plato ADD PRIMARY KEY (id);
ALTER TABLE cliente ADD PRIMARY KEY (id);
--ALTER TABLE cliente ALTER COLUMN codigo SET NOT NULL;
ALTER TABLE ticket ADD PRIMARY KEY (id);
ALTER TABLE categoria_refresco ADD PRIMARY KEY (id);
ALTER TABLE tipo_refresco ADD PRIMARY KEY (id);
ALTER TABLE refresco ADD PRIMARY KEY (id);
ALTER TABLE refresco ADD FOREIGN KEY (categoria_refresco_id) REFERENCES categoria_refresco (id);
ALTER TABLE refresco ADD FOREIGN KEY (tipo_refresco_id) REFERENCES tipo_refresco (id);
ALTER TABLE pedido ADD PRIMARY KEY (id);
ALTER TABLE pedido ADD FOREIGN KEY (cliente_id) REFERENCES cliente (id);
ALTER TABLE pedido_refresco ADD PRIMARY KEY (pedido_id, refresco_id);
ALTER TABLE pedido_plato ADD PRIMARY KEY (pedido_id, plato_id);
