CREATE TABLE insumos(
    insu_id SERIAL PRIMARY KEY,
    insu_nombre VARCHAR(70),
    insu_cantidad INTEGER,
    insu_marca VARCHAR(70),
    insu_proveedor VARCHAR(70),
    insu_precio DECIMAL (8,2),
);

Select * from insumos