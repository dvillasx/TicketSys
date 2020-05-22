<?php

use App\Tipo;
use Illuminate\Database\Seeder;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['nombre_tipo' => 'Informe Fiscal', 'area_id' => 1]);
        Tipo::create(['nombre_tipo' => 'Informes financieros', 'area_id' => 1]);
        Tipo::create(['nombre_tipo' => 'Estado financiero', 'area_id' => 1]);
        Tipo::create(['nombre_tipo' => 'Preparacion de impuestos', 'area_id' => 1]);
        Tipo::create(['nombre_tipo' => 'Expediente fiscal', 'area_id' => 1]);
        Tipo::create(['nombre_tipo' => 'Comisiones bancarias', 'area_id' => 1]);
        Tipo::create(['nombre_tipo' => 'Pago de las contribuciones', 'area_id' => 1]);

        Tipo::create(['nombre_tipo' => 'Internet', 'area_id' => 2]);
        Tipo::create(['nombre_tipo' => 'Impresora', 'area_id' => 2]);
        Tipo::create(['nombre_tipo' => 'Actualización de software', 'area_id' => 2]);
        Tipo::create(['nombre_tipo' => 'Respaldo archivos', 'area_id' => 2]);
        Tipo::create(['nombre_tipo' => 'Instalación software', 'area_id' => 2]);

        Tipo::create(['nombre_tipo' => 'Derrame de líquido', 'area_id' => 3]);
        Tipo::create(['nombre_tipo' => 'Desechar basura', 'area_id' => 3]);
        Tipo::create(['nombre_tipo' => 'Reabastecer insumos limpieza', 'area_id' => 3]);

        Tipo::create(['nombre_tipo' => 'Catálogo', 'area_id' => 4]);
        Tipo::create(['nombre_tipo' => 'Lista proveedores', 'area_id' => 4]);
        Tipo::create(['nombre_tipo' => 'Registro de factura', 'area_id' => 4]);

        Tipo::create(['nombre_tipo' => 'Quincena', 'area_id' => 5]);
        Tipo::create(['nombre_tipo' => 'Informe de vacantes', 'area_id' => 5]);
        Tipo::create(['nombre_tipo' => 'Reportes de inventario', 'area_id' => 5]);
        Tipo::create(['nombre_tipo' => 'Informe de auditoria', 'area_id' => 5]);
        Tipo::create(['nombre_tipo' => 'Entrega de credenciales', 'area_id' => 5]);
        Tipo::create(['nombre_tipo' => 'Capacitacion', 'area_id' => 5]);
        Tipo::create(['nombre_tipo' => 'Entrevista', 'area_id' => 5]);
        Tipo::create(['nombre_tipo' => 'Examenes psicometrico', 'area_id' => 5]);
        Tipo::create(['nombre_tipo' => 'Contratos', 'area_id' => 5]);
        Tipo::create(['nombre_tipo' => 'Altas al IMSS', 'area_id' => 5]);
    }
}
