<?

class ProjectsTableSeeder extends Seeder {

    public function run()
    {
        Project::create(array('title' => 'Clue (in progress)', 'tech' => 'JavaScript, jQuery, A-star algorithm',
                                'type' => 'Front-End', 'description' => 'This is a recreation of the classic board 
                                game Clue.  I took it on out of nostalgia and fun and as a larger project to tie what 
                                I have learned together', 'img' => '/img/clue.png', 'url' => 'blog.dev/clue', 
                                'date' => 'ongoing'));

        Project::create(array('title' => 'Carmen Sandiego', 'tech' => 'JavaScript, jQuery',
                                'type' => 'Front-End', 'description' => 'This is a whackamole game built 
                                with JavaScript and jQuery. It is designed to be like Carmen Sandiego.  It has
                                multiple rounds and maps.', 'img' => '/img/mole.png', 'url' => 'blog.dev/mole', 
                                'date' => 'July 2015'));

        Project::create(array('title' => 'Jamalot', 'tech' => 'Laravel, PHP, JavaScript, jQuery',
                                'type' => 'Full Site', 'description' => 'This was my capstone project for Codeup 
                                built with 2 other teammates.  This is a Laravel project, using repositories, 
                                polymorphic relationships, and lots of jQuery libraries to create a fun UX. It is a 
                                social network designed to help musicians find work and connect with other musicians in
                                their area.', 'img' => '/img/jamalot.png', 'url' => 'http://www.jamalot.rocks', 
                                'date' => 'October 2015'));

        Project::create(array('title' => 'Slide Puzzle', 'tech' => 'JavaScript, jQuery',
                                'type' => 'Front-End', 'description' => 'This is a puzzle slider game built with 
                                JavaScript and jQuery. You can select various images for the puzzle.', 'img' => 
                                '/img/slider.png', 'url' => 'blog.dev/puzzlepic', 'date' => 'October 2015'));

        Project::create(array('title' => 'Urban Hangman', 'tech' => 'JavaScript, jQuery',
                                'type' => 'Front-End', 'description' => 'This is a hangman game built with 
                                JavaScript and jQuery using Kimono API to crawl urban dictionary
                                for words', 'img' => '/img/hangman.png', 'url' => 
                                'blog.dev/hangman', 'date' => 'November 2015'));

        Project::create(array('title' => 'Memory', 'tech' => 'JavaScript, jQuery',
                                'type' => 'Front-End', 'description' => 'This is a Scooby Doo based memory game built 
                                with jQuery. Built for Halloween fun.', 'img' => '/img/memory.png', 'url' => 'blog.dev/memory', 
                                'date' => 'August 2015'));
    }
}

