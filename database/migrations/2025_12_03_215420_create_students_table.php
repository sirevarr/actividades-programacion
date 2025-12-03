public function up(): void
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 100);
        $table->string('apellido', 100);
        $table->string('email')->unique();
        $table->string('telefono', 20)->nullable();
        $table->date('fecha_nacimiento');
        $table->timestamps();
    });
}
