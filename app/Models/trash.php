<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
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
        Schema::dropIfExists('subscribers');
    }
}



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = 
    ['name', 'email','partner_id'];
 
      public function partner(){
         return $this->hasOne(Partner::class);
     }
}





namespace Database\Factories;

use App\Models\Subscriber;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriberFactory extends Factory
{
        /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Subscriber::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'partner_id' => 1,
        ];
    }

    //use tinker to create a subscriber
      // Subscriber::factory()->count(5)->create();
      //php artisan make:factory AddressFactory --model="App\\Address"
}
