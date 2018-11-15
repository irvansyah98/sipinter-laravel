<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
//Data Calon Mempelai
            $table->string('nama_pria')->nullable();
            $table->string('jk_pria')->nullable();
            $table->string('tempat_lahir_pria')->nullable();
            $table->string('tgl_lahir_pria')->nullable();
            $table->string('warganegara_pria')->nullable();
            $table->string('status_pria')->nullable();
            $table->string('agama_pria')->nullable();
            $table->string('pekerjaan_pria')->nullable();
            $table->string('bin_pria')->nullable();
            $table->string('tempat_tinggal_pria')->nullable();
            $table->string('istri_dulu_pria')->nullable();

            $table->string('nama_wanita')->nullable();
            $table->string('jk_wanita')->nullable();
            $table->string('tempat_lahir_wanita')->nullable();
            $table->string('tgl_lahir_wanita')->nullable();
            $table->string('warganegara_wanita')->nullable();
            $table->string('status_wanita')->nullable();
            $table->string('agama_wanita')->nullable();
            $table->string('pekerjaan_wanita')->nullable();
            $table->string('binti_wanita')->nullable();
            $table->string('tempat_tinggal_wanita')->nullable();
            $table->string('suami_dulu_wanita')->nullable();

//Data Orangtua Calon Mempelai
            $table->string('nama_ayah_pria')->nullable();
            $table->string('jk_ayah_pria')->nullable();
            $table->string('tempat_lahir_ayah_pria')->nullable();
            $table->string('tgl_lahir_ayah_pria')->nullable();
            $table->string('warganegara_ayah_pria')->nullable();
            $table->string('agama_ayah_pria')->nullable();
            $table->string('pekerjaan_ayah_pria')->nullable();
            $table->string('tempat_tinggal_ayah_pria')->nullable();

            $table->string('nama_ibu_pria')->nullable();
            $table->string('jk_ibu_pria')->nullable();
            $table->string('tempat_lahir_ibu_pria')->nullable();
            $table->string('tgl_lahir_ibu_pria')->nullable();
            $table->string('warganegara_ibu_pria')->nullable();
            $table->string('agama_ibu_pria')->nullable();
            $table->string('pekerjaan_ibu_pria')->nullable();
            $table->string('tempat_tinggal_ibu_pria')->nullable();

            $table->string('nama_ayah_wanita')->nullable();
            $table->string('jk_ayah_wanita')->nullable();
            $table->string('tempat_lahir_ayah_wanita')->nullable();
            $table->string('tgl_lahir_ayah_wanita')->nullable();
            $table->string('warganegara_ayah_wanita')->nullable();
            $table->string('agama_ayah_wanita')->nullable();
            $table->string('pekerjaan_ayah_wanita')->nullable();
            $table->string('tempat_tinggal_ayah_wanita')->nullable();

            $table->string('nama_ibu_wanita')->nullable();
            $table->string('jk_ibu_wanita')->nullable();
            $table->string('tempat_lahir_ibu_wanita')->nullable();
            $table->string('tgl_lahir_ibu_wanita')->nullable();
            $table->string('warganegara_ibu_wanita')->nullable();
            $table->string('agama_ibu_wanita')->nullable();
            $table->string('pekerjaan_ibu_wanita')->nullable();
            $table->string('tempat_tinggal_ibu_wanita')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
