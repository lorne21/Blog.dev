<?

class ProjectsTableSeeder extends Seeder {
    public function run()
    {
        Project::create(array('title' => 'Simple Simon', etc))
    }
}

$table->increments('id');
            $table->string('title', 100);
            $table->string('tech', 250);
            $table->string('type', 250);
            $table->text('description');
            $table->string('url',250);