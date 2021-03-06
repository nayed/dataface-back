<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('date_validation');
            $table->dateTime('date_payment');
            $table->decimal('price',10,2);
            $table->integer('subscriptions_types_id')->unsigned();
            $table->integer('type_payments_id')->unsigned();
            $table->string('currency');
            $table->string('key_user', 10)->nullable();
            $table->boolean('isActive')->default(false);
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