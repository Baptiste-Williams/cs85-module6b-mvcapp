# cs85-module6b-mvcapp

What This App Is
This is a simple PHP app I built for class that tracks a few workout sessions. I went with a fitness theme because it made sense and was easy to work with. The app uses MVC to split everything up — like data, logic, and display — so it’s not all in one mess.

What It Does
It shows some workouts like “Running for 30 minutes” and “Stretching for 15.” You can open it in the browser and see what’s logged. It pulls the info from the model, sends it through the controller, and spits it out in the viiew.

How To Use It
Put the project folder in your htdocs if you’re using XAMPP

Run composer init and set up autoloading in composer.json

Run composer dump-autoload

Open this URL in your browser: http://localhost/cs85/module6a_mvc_project/public/index.php

If everything works, you’ll see some sample workouts listed.

Reflection
I went with fitness tracking because it felt familiar. I didn’t want to get stuck trying to build something big — this was clean and simple. The hardest part? Git. Pushing stuff to GitHub was a pain. I had to fight through branch errors and remote problems. Got it working eventually, but it took time.

MVC taught me how to split things up — model holds the data, controller processes it, and view shows it. That made things cleaner and easier to fix later.

AI Code Critique
I asked AI to make a workout tracker. It gave me decent code with a method to add workouts and another to summarize them. I kept the method that added workouts but skipped the summary part because it didn’t help me. I changed the class so it worked with my layout. The AI helped me get started, but I had to shape it myself to fit the project.
