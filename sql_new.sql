CREATE TABLE ajuste (
  id_______aju INTEGER  NOT NULL AUTO_INCREMENT,
  descripcioaju VARCHAR(20) NULL,
  cantidad_aju INTEGER  NULL,
  PRIMARY KEY(id_______aju)
);

CREATE TABLE auxiliar_reactivo (
  id_______axr INTEGER  NOT NULL AUTO_INCREMENT,
  corantedeaxr INTEGER NULL,
  corantehaaxr INTEGER NULL,
  sal______axr INTEGER NULL,
  carbsodio INTEGER NULL,
  sodacaustaxr INTEGER NULL,
  PRIMARY KEY(id_______axr)
);

CREATE TABLE bodega (
  id_______bod INTEGER  NOT NULL AUTO_INCREMENT,
  ajuste_id_______aju INTEGER  NOT NULL,
  producto_id_______prd INTEGER  NOT NULL,
  nombre___bod VARCHAR(20) NULL,
  descripcibod VARCHAR(20) NULL,
  PRIMARY KEY(id_______bod)
);

CREATE TABLE categoria (
  id_______cat INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___cat VARCHAR(20) NULL,
  PRIMARY KEY(id_______cat)
);

CREATE TABLE region (
  id_______reg INTEGER  NOT NULL AUTO_INCREMENT,
  pais_idpais___pai INTEGER  NOT NULL,
  nombre___reg VARCHAR(20) NULL,
  numero___reg INTEGER  NOT NULL,
  PRIMARY KEY(id_______reg)
);

CREATE TABLE cliente (
  codigo___cli INTEGER  NULL AUTO_INCREMENT,
  rut______cli INTEGER  NOT NULL,
  razon____cli INTEGER  NULL,
  encargado_encargadocli VARCHAR(20) NULL,
  direccioncli VARCHAR(20) NULL,
  transportcli VARCHAR(20) NULL,
  ciudad___cli VARCHAR(20) NULL,
  comuna_id_______com INTEGER  NOT NULL,
  PRIMARY KEY(codigo___cli)
);

CREATE TABLE color (
  id_______col INTEGER  NOT NULL AUTO_INCREMENT,
  orden_receta_id_______orr INTEGER  NOT NULL,
  PRIMARY KEY(id_______col)
);

CREATE TABLE componente_receta (
  id_______cre INTEGER  NOT NULL AUTO_INCREMENT,
  incidencia_id_______inc INTEGER  NOT NULL,
  nombre___cre VARCHAR(20) NULL,
  cantidAD____cre INTEGER NULL,
  INCIDENCIA INTEGER  NULL,
  PRIMARY KEY(id_______cre)
);

CREATE TABLE comuna (
  id_______com INTEGER  NOT NULL AUTO_INCREMENT,
  ciudad_id_______ciu INTEGER  NOT NULL,
  nombre___com VARCHAR(20) NULL,
  PRIMARY KEY(id_______com)
);

CREATE TABLE configuracion_maquinaria (
  id_______com INTEGER  NOT NULL AUTO_INCREMENT,
  maquinaria_id_______maq INTEGER  NOT NULL,
  ancho___maq INTEGER NULL,
  alimentacmaq INTEGER  NULL,
  velocidadmaq INTEGER NULL,
  temperatumaq INTEGER  NULL,
  PRIMARY KEY(id_______com)
);

CREATE TABLE detalle_piezas (
  piezas_id_______pza INTEGER  NOT NULL,
  punto_idpunto INTEGER  NOT NULL,
  titulo_id______tit INTEGER  NOT NULL,
  fibras_id_______fib INTEGER  NOT NULL,
  tejido_id_______tej INTEGER  NOT NULL,
  proporcion_id______pro INT NOT NULL,
  maquinaria_id_______maq INTEGER  NOT NULL,
  PRIMARY KEY(piezas_id_______pza)
);

CREATE TABLE detalle_venta (
  producto_id_______prd INTEGER  NOT NULL,
  factura_id_______fac INTEGER  NOT NULL,
  orden_trabajo_id_______otr INTEGER  NOT NULL,
  tipo_pago_id______tpa INTEGER  NOT NULL,
  neto_____dvt INTEGER  NULL,
  iva______dvt INTEGER  NULL,
  total____dvt INTEGER  NULL,
  PRIMARY KEY(producto_id_______prd)
);

CREATE TABLE empresa (
  id_______emp INT NOT NULL AUTO_INCREMENT,
  nombre___emp VARCHAR(20) NULL,
  giro_____emp VARCHAR(20) NULL,
  PRIMARY KEY(id_______emp)
);

CREATE TABLE encargado_cliente (
  id_______cli INTEGER  NOT NULL AUTO_INCREMENT,
  rut______cli INTEGER  NOT NULL,
  nombre___cli VARCHAR(20) NULL,
  apellido_ cli VARCHAR(20) NULL,
  telefono_cli INTEGER  NULL,
  PRIMARY KEY(id_______cli)
);

CREATE TABLE encargado_laboratorio (
  id_______enl INTEGER  NOT NULL AUTO_INCREMENT,
  laboratorio_id_______lab INTEGER  NOT NULL,
  nombre VARCHAR(20) NULL,
  apellido VARCHAR(20) NULL,
  telefono INTEGER  NULL,
  PRIMARY KEY(id_______enl, laboratorio_id_______lab)
);

CREATE TABLE encargado_proveedor (
  id_______epr INTEGER  NOT NULL AUTO_INCREMENT,
  proveedor_id_______pro INTEGER  NOT NULL,
  nombre___epr VARCHAR(20) NULL,
  apellido_epr VARCHAR(20) NULL,
  telefono_epr INTEGER  NULL,
  PRIMARY KEY(id_______epr)
);

CREATE TABLE etapa (
  id_______eta INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___eta VARCHAR(20) NULL,
  precio___eta INTEGER  NULL,
  PRIMARY KEY(id_______eta)
);

CREATE TABLE factura (
  id_______fac INTEGER  NOT NULL AUTO_INCREMENT,
  folio____fac INTEGER  NULL,
  fecha_emifac INTEGER  NULL,
  PRIMARY KEY(id_______fac)
);

CREATE TABLE fibras (
  id_______fib INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___fib VARCHAR(20) NULL,
  PRIMARY KEY(id_______fib)
);

CREATE TABLE guia_entrada (
  id_______gui INTEGER  NOT NULL AUTO_INCREMENT,
  cliente_rut______cli INTEGER  NOT NULL,
  kilos____gui INTEGER NULL,
  precio___gui INTEGER  NULL,
  fecha____gui DATE NULL,
  PRIMARY KEY(id_______gui)
);

CREATE TABLE guia_ent_orden_trab (
  id_______gor INTEGER  NOT NULL AUTO_INCREMENT,
  laboratorio_guia_receta_id_______res INTEGER  NOT NULL,
  laboratorio_guia_laboratorio_id_______lab INTEGER  NOT NULL,
  ruta_id_______rut INTEGER  NOT NULL,
  piezas_id_______pza INTEGER  NOT NULL,
  lote_id_______lot INTEGER  NOT NULL,
  guia_entrada_id_______gui INTEGER  NOT NULL,
  orden_trabajo_id_______otr INTEGER  NOT NULL,
  PRIMARY KEY(id_______gor)
);

CREATE TABLE incidencia (
  id_______inc INTEGER  NOT NULL AUTO_INCREMENT,
  medida___inc INTEGER  NULL,
  PRIMARY KEY(id_______inc)
);

CREATE TABLE laboratorio (
  id_______lab INTEGER  NOT NULL AUTO_INCREMENT,
  fecha____lab INTEGER  NULL,
  status___lab INTEGER  NULL,
  observacilab TEXT NULL,
  PRIMARY KEY(id_______lab)
);

CREATE TABLE laboratorio_guia (
  laboratorio_id_______lab INTEGER  NOT NULL,
  receta_id_______res INTEGER  NOT NULL,
  auxiliar_reactivo_id_______axr INTEGER  NOT NULL,
  PRIMARY KEY(laboratorio_id_______lab, receta_id_______res)
);

CREATE TABLE lote (
  id_______lot INTEGER  NOT NULL AUTO_INCREMENT,
  descripcilot INTEGER  NULL,
  PRIMARY KEY(id_______lot)
);

CREATE TABLE mantencion_maquinaria (
  id_______mam INTEGER  NOT NULL AUTO_INCREMENT,
  tipo_mantencion_id_______tma INTEGER  NOT NULL,
  maquinaria_id_______maq INTEGER  NOT NULL,
  fecha____maq DATE NULL,
  descripcimaq TEXT NULL,
  PRIMARY KEY(id_______mam)
);

CREATE TABLE maquinaria (
  id_______maq INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___maq VARCHAR(20) NULL,
  capacidadmaq INTEGER NULL,
  hora____maq INTEGER  NULL,
  minutos__maq INTEGER  NULL,
  jornada__maq INTEGER NULL,
  disponibimaq INTEGER  NULL,
  cnominal_maq INTEGER  NULL,
  descripcimaq TEXT NULL,
  PRIMARY KEY(id_______maq)
);

CREATE TABLE meta_conf_maq (
  id_______mcm INTEGER  NOT NULL AUTO_INCREMENT,
  configuracion_maquinaria_id_______com INTEGER  NOT NULL,
  nombre___mcm VARCHAR(20) NULL,
  descripcimcm TEXT NULL,
  PRIMARY KEY(id_______mcm)
);

CREATE TABLE moneda (
  id______mon INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___mon VARCHAR(20) NULL,
  signo____mon VARCHAR(20) NULL,
  PRIMARY KEY(id______mon)
);

CREATE TABLE orden_compra (
  id______com INTEGER  NOT NULL AUTO_INCREMENT,
  bodega_id_______bod INTEGER  NOT NULL,
  tipo_gastos_id______tga INTEGER  NOT NULL,
  PRIMARY KEY(id______com)
);

CREATE TABLE orden_receta (
  id_______orr INTEGER  NOT NULL AUTO_INCREMENT,
  laboratorio_guia_receta_id_______res INTEGER  NOT NULL,
  laboratorio_guia_laboratorio_id_______lab INTEGER  NOT NULL,
  PRIMARY KEY(id_______orr)
);

CREATE TABLE orden_trabajo (
  id_______otr INTEGER  NOT NULL AUTO_INCREMENT,
  fcarga___otr DATE NULL,
  fdescargaotr DATE NULL,
  compromisotr INTEGER  NULL,
  PRIMARY KEY(id_______otr)
);

CREATE TABLE pais (
  idpais___pai INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___pai VARCHAR(20) NULL,
  PRIMARY KEY(idpais___pai)
);

CREATE TABLE personal (
  id______per INTEGER  NOT NULL AUTO_INCREMENT,
  empresa_id_______emp INT NOT NULL,
  nombre___emp VARCHAR(20) NULL,
  rut______emp INTEGER  NULL,
  PRIMARY KEY(id______per)
);

CREATE TABLE personal_maquinaria (
  maquinaria_id_______maq INTEGER  NOT NULL,
  personal_id______per INTEGER  NOT NULL,
  PRIMARY KEY(maquinaria_id_______maq, personal_id______per)
);

CREATE TABLE piezas (
  id_______pza INTEGER  NOT NULL AUTO_INCREMENT,
  ancho____pza INTEGER  NULL,
  peso____pza INTEGER  NULL,
  PRIMARY KEY(id_______pza)
);

CREATE TABLE producto (
  id_______prd INTEGER  NOT NULL AUTO_INCREMENT,
  moneda_id______mon INTEGER  NOT NULL,
  categoria_id_______cat INTEGER  NOT NULL,
  precio___prd INTEGER  NULL,
  PRIMARY KEY(id_______prd)
);

CREATE TABLE proporcion (
  id______pro INT NOT NULL AUTO_INCREMENT,
  proporciopro INTEGER NULL,
  PRIMARY KEY(id______pro)
);

CREATE TABLE proveedor (
  id_______pro INTEGER  NOT NULL AUTO_INCREMENT,
  producto_id_______prd INTEGER  NOT NULL,
  rut______prd INTEGER  NULL,
  codigo___prd INTEGER  NULL,
  razon____prd INTEGER  NULL,
  encargadoprd INTEGER  NULL,
  direccionprd INTEGER  NULL,
  ciudad___prd INTEGER  NULL,
  telefono_prd INTEGER  NULL,
  saldo____prd INTEGER  NULL,
  rubro____prd INTEGER  NULL,
  PRIMARY KEY(id_______pro)
);

CREATE TABLE punto (
  idpunto INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___pun VARCHAR(20) NULL,
  PRIMARY KEY(idpunto)
);

CREATE TABLE receta (
  id_______res INTEGER  NOT NULL AUTO_INCREMENT,
  componente_receta_id_______cre INTEGER  NOT NULL,
  descripcioesp VARCHAR(20) NULL,
  fecha____esp DATE NULL,
  costo____esp INTEGER  NULL,
  hora_____esp INTEGER  NULL,
  rela_banoesp INTEGER  NULL,
  clarepro_esp INTEGER  NULL,
  absorcionesp INTEGER  NULL,
  PRIMARY KEY(id_______res)
);

CREATE TABLE reproceso_pieza (
  id_reproce_rpi INTEGER  NOT NULL AUTO_INCREMENT,
  detalle_piezas_piezas_id_______pza INTEGER  NOT NULL,
  nombre___rep VARCHAR(20) NULL,
  origen___rep INTEGER  NULL,
  PRIMARY KEY(id_reproce_rpi)
);

CREATE TABLE ruta (
  id_______rut INTEGER  NOT NULL AUTO_INCREMENT,
  etapa_id_______eta INTEGER  NOT NULL,
  PRIMARY KEY(id_______rut)
);

CREATE TABLE tejido (
  id_______tej INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___ej VARCHAR(20) NULL,
  PRIMARY KEY(id_______tej)
);

CREATE TABLE tipo_gastos (
  id______tga INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___tga INTEGER  NULL,
  PRIMARY KEY(id______tga)
);

CREATE TABLE tipo_mantencion (
  id_______tma INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___tma VARCHAR(20) NULL,
  PRIMARY KEY(id_______tma)
);

CREATE TABLE tipo_pago (
  id______tpa INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___tpa INTEGER  NULL,
  PRIMARY KEY(id______tpa)
);

CREATE TABLE titulo (
  id______tit INTEGER  NOT NULL AUTO_INCREMENT,
  nombre___tit VARCHAR(20) NULL,
  terminacitit INTEGER  NULL,
  PRIMARY KEY(id______tit)
);


