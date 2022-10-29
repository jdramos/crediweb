<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearClientesTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('idCli', 20);
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('identificacion', 20);
            $table->string('paisEmisionId', 20);
            $table->date('fechaEmisionId');
            $table->date('fechaVenceId');
            $table->tinyInteger('edad');
            $table->string('telefono', 20);
            $table->string('genero', 20);
            $table->string('estadoCivil', 20);
            $table->string('oficio', 50);
            $table->date('fechaNacimiento');
            $table->string('nacionalidad', 50);
            $table->string('paisResidencia', 50);
            $table->string('direccionDomicilio');
            $table->string('buro', 4);
            $table->string('tipoCasa', 20);
            $table->string('nombreNegocio');
            $table->string('direccionNegocio');
            $table->string('tipoNegocio', 50);
            $table->string('telefonoNegocio', 20);
            $table->string('origenFondos', 50);
            $table->string('ingresoEquivalente', 50);
            $table->double('ingresoMensual', 15, 2)->nullable()->default(0.00);
            $table->double('valorInventario', 15, 2)->nullable()->default(0.00);
            $table->double('valorEfectivo', 15, 2)->nullable()->default(0.00);
            $table->double('cuentasPorCobrar', 15, 2)->nullable()->default(0.00);
            $table->double('ventasContado', 15, 2)->nullable()->default(0.00);
            $table->double('ventasCredito', 15, 2)->nullable()->default(0.00);
            $table->double('otrosIngresos', 15, 2)->nullable()->default(0.00);
            $table->tinyInteger('idComercio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
