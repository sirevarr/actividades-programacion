public function up(): void
{
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 100);
        $table->string('slug', 100)->unique();
        $table->text('descripcion')->nullable();
        $table->timestamps();
    });
}