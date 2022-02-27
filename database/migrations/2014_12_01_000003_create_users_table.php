<?php

use App\Models\User as ModelsUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->string('full_name', 250)->nullable();
            $table->string('username', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('usertype', 210)->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->text('random_code')->nullable();
            $table->text('notificationToken')->nullable();
            $table->rememberToken();

            $table->integer('access_status')->nullable()->default(1);

            $table->integer('role_id')->nullable()->unsigned();
            $table->enum('is_administrator', ['yes', 'no'])->default('no');
            $table->tinyInteger('is_registered')->default(0);


            $table->string('stripe_id')->nullable()->collation('utf8mb4_bin');
            $table->string('card_brand')->nullable();
            $table->string('card_last_four', 4)->nullable();
            $table->string('verified')->nullable();
            $table->timestamps();
        });


        $data = User::find(1);

        if (empty($data)) {
            $user            = new User();
            $user->created_by   = 1;
            $user->updated_by   = 1;
            $user->role_id   = 1;
            $user->full_name = 'admin';
            $user->email     = 'admin@admin.com';
            $user->is_administrator     = 'yes';
            $user->username  = 'admin@admin.com';
            $user->password  = Hash::make('123');
            $user->created_at = date('Y-m-d h:i:s');
            $user->save();
        }
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
