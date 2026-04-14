<?php

use App\Models\Monument;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('monuments', function (Blueprint $table) {
            $table->id();
            $table->string('visitname');
            $table->string('authorname');
            $table->integer('year');
            $table->longText('story');
            $table->string('img')->nullable();
            $table->boolean('is_default_image')->default(false);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });

        $infotours = [
            [
                'visitname' => 'Museo Nazionale',
                'authorname' => 'Carlo III di Borbone',
                'year' => 1585,
                'story' => 'Storia del Museo Nazionale di Napoli...',
                'img' => 'mediasitenapolimania/MNA_Napoli.jpg',
                'address' => 'Piazza Museo, Napoli',
                'is_default_image' => true
            ],
            [
                'visitname' => 'Certosa San Martino',
                'authorname' => "Carlo D'Angiò",
                'year' => 1325,
                'story' => "Periodo Angioino (1325): Il progetto originale in stile gotico fu affidato all'architetto e scultore senese Tino di Camaino. Alla sua morte, i lavori proseguirono sotto la direzione di Attanasio Primario e Francesco di Vito. Di questa fase restano oggi i suggestivi sotterranei gotici.",
                'img' => 'mediasitenapolimania/Certosasanmartino.jpeg',
                'address' => 'Via San Martino - Napoli',
                'is_default_image' => true
            ],

             [
                'visitname' => "Castel dell'Ovo",
                'authorname' => 'Licinio Lucullo',
                'year' => 100,
                'story' => "Storia del Castel dell'ovo...",
                'img' => 'mediasitenapolimania/Casteldellovo.jpg',
                'address' => 'Via Caracciolo - Napoli',
                'is_default_image' => true
            ],
            
        ];

        foreach ($infotours as $infotour) {
            Monument::create($infotour);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('monuments');
    }
};