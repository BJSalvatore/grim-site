<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Messages;
class AddResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
        $table->increments('id')->unsigned();
        $table->integer('message_id')->unsigned();
        $table->string('response');
        $table->string('respondee');
        $table->timestamp('responded_on')-> nullable();
        $table->foreign('message_id')
        ->references('id')
        ->on('messages')
        ->onDelete('cascade');
      });
    }
     // Reverse the migrations.
    public function down(){
          Schema::dropIfExists('responses');
        }
}
