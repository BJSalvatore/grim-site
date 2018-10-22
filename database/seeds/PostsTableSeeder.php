<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
    {
            DB::table('posts')->insert(['title' => 'Post 1', 'post' => 'This is post number one' ]);
            DB::table('posts')->insert(['title' => 'Post 2', 'post' => 'This is post number two' ]);

            DB::table('posts')->insert([
            'title' => 'Bacon Blog',
            'post' => 'Bacon ipsum dolor amet pancetta doner venison andouille tri-tip spare ribs turducken picanha alcatra tail, pork belly flank hamburger. Hamburger tri-tip bresaola chuck tenderloin turducken corned beef capicola sirloin buffalo. Meatloaf corned beef ribeye pig. Flank ribeye jowl pork belly shank beef ribs pastrami porchetta pig filet mignon cupim doner bresaola chuck.<br>
            Ball tip pork chop buffalo kevin meatball tenderloin brisket rump. Shoulder biltong corned beef, ham hock venison turducken pork chop frankfurter chuck burgdoggen pork doner ground round pastrami. Tongue meatloaf bacon pork chop, salami t-bone filet mignon pork belly tenderloin jerky sausage pork pancetta short ribs capicola. Pig venison cow tongue, prosciutto shankle pork belly pork chop alcatra t-bone pork filet mignon chuck.']);

            DB::table('posts')->insert([
            'title' => 'Star Wars Blog',
            'post' => 'No! Alderaan is peaceful. We have no weapons. You can\'t possibly… I care. So, what do you think of her, Han? The Force is strong with this one. I have you now. The more you tighten your grip, Tarkin, the more star systems will slip through your fingers.<br>
            Hokey religions and ancient weapons are no match for a good blaster at your side, kid. I can\'t get involved! I\'ve got work to do! It\'\s not that I like the Empire, I hate it, but there\'s nothing I can do about it right now. It\'s such a long way from here.<br>
            I\'m surprised you had the courage to take the responsibility yourself. Ye-ha! I have traced the Rebel spies to her. Now she is my only link to finding their secret base. You mean it controls your actions?<br>
            Partially, but it also obeys your commands. A tremor in the Force. The last time I felt it was in the presence of my old master. In my experience, there is no such thing as luck. In my experience, there is no such thing as luck.<br>
            Escape is not his plan. I must face him, alone. I care. So, what do you think of her, Han? I have traced the Rebel spies to her. Now she is my only link to finding their secret base. I find your lack of faith disturbing.<br>
            Remember, a Jedi can feel the Force flowing through him. Your eyes can deceive you. Don\'t trust them. I suggest you try it again, Luke. This time, let go your conscious self and act on instinct. What good is a reward if you ain\'t around to use it? Besides, attacking that battle station ain\'t my idea of courage. It\'s more like suicide.<br>
            I call it luck. No! Alderaan is peaceful. We have no weapons. You can\'t possibly… Hokey religions and ancient weapons are no match for a good blaster at your side, kid. I\'m trying not to, kid. Look, I ain\'t in this for your revolution, and I\'m not in it for you, Princess. I expect to be well paid. I\'m in it for the money.<br>
            Red Five standing by. I can\'t get involved! I\'ve got work to do! It\'s not that I like the Empire, I hate it, but there\'s nothing I can do about it right now. It\'s such a long way from here. As you wish.']);

            DB::table('posts')->insert([
            'title' => 'Monty Python Post',
            'post' => 'Who\'s that then? We found them. The swallow may fly south with the sun, and the house martin or the plover may seek warmer climes in winter, yet these are not strangers to our land. Oh, ow! I am your king.<br>
            The swallow may fly south with the sun, and the house martin or the plover may seek warmer climes in winter, yet these are not strangers to our land. Shut up! Burn her anyway! We found them. Bloody Peasant!<br>
            We found them. We want a shrubbery!! I dunno. Must be a king. Did you dress her up like this?<br>
            I dunno. Must be a king. I don\'t want to talk to you no more, you empty-headed animal food trough water! I fart in your general direction! Your mother was a hamster and your father smelt of elderberries! Now leave before I am forced to taunt you a second time!<br>
            Burn her anyway! Well, how\'d you become king, then? The Knights Who Say Ni demand a sacrifice! And the hat. She\'s a witch! He hasn\'t got shit all over him. Shut up! Will you shut up?!<br>
            Did you dress her up like this? Found them? In Mercia?! The coconut\'s tropical! He hasn\'t got shit all over him. Found them? In Mercia?! The coconut\'s tropical! I have to push the pram a lot.<br>
            Well, we did do the nose. Now, look here, my good man. Why do you think that she is a witch? She looks like one. You don\'t vote for kings.<br>
            But you are dressed as one… She looks like one. Well, Mercia\'s a temperate zone! Shut up! Will you shut up?!<br>
            …Are you suggesting that coconuts migrate? The swallow may fly south with the sun, and the house martin or the plover may seek warmer climes in winter, yet these are not strangers to our land. Burn her anyway!<br>
            What do you mean? Well, I didn\'t vote for you. Knights of Ni, we are but simple travelers who seek the enchanter who lives beyond these woods. You don\'t frighten us, English pig-dogs! Go and boil your bottoms, sons of a silly person! I blow my nose at you, so-called Ah-thoor Keeng, you and all your silly English K-n-n-n-n-n-n-n-niggits!<br>
            Oh! Come and see the violence inherent in the system! Help, help, I\'m being repressed! The Knights Who Say Ni demand a sacrifice! What a strange person. The Knights Who Say Ni demand a sacrifice! A newt?']);

            DB::table('posts')->insert([
            'title' => 'Bob Ross Blog',
            'post' => 'I really recommend you use odorless thinner or your spouse is gonna run you right out into the yard and you\'ll be working by yourself. If what you\'re doing doesn\'t make you happy - you\'re doing the wrong thing. Sometimes you learn more from your mistakes than you do from your masterpieces. That\'s a son of a gun of a cloud. Only think about one thing at a time. Don\'t get greedy.<br>
            I like to beat the brush. God gave you this gift of imagination. Use it. Isn\'t that fantastic that you can create an almighty tree that fast? Everyone is going to see things differently - and that\'s the way it should be. We\'ll put all the little clouds in and let them dance around and have fun.<br>
            We can fix anything. Just let this happen. We just let this flow right out of our minds. All you need to paint is a few tools, a little instruction, and a vision in your mind. I spend a lot of time walking around in the woods and talking to trees, and squirrels, and little rabbits and stuff.<br>
            You can do anything your heart can imagine. I want everbody to be happy. That\'s what it\'s all about. We\'ll put a happy little bush here. That is when you can experience true joy, when you have no fear.<br>
            You can get away with a lot. You are only limited by your imagination. Trees cover up a multitude of sins.<br>
            There he comes. Just go out and talk to a tree. Make friends with it. Trees live in your fan brush, but you have to scare them out. Don\'t hurry. Take your time and enjoy.<br>
            The only prerequisite is that it makes you happy. If it makes you happy then it\'s good. Just beat the devil out of it. In your world you can create anything you desire. There isn\'t a rule. You just practice and find out which way works best for you.']);

            DB::table('posts')->insert([
            'title' => 'Samuel L. Jackson Blog',
            'post' =>
            'Look, just because I don\'t be givin\' no man a foot massage don\'t make it right for Marsellus to throw Antwone into a glass motherfuckin\' house, fuckin\' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, \'cause I\'ll kill the motherfucker, know what I\'m sayin\'<br>
            Your bones don\'t break, mine do. That\'s clear. Your cells react to bacteria and viruses differently than mine. You don\'t get sick, I do. That\'s also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We\'re on the same curve, just on opposite ends.<br>
            Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I\'m in a transitional period so I don\'t wanna kill you, I wanna help you. But I can\'t give you this case, it don\'t belong to me. Besides, I\'ve already been through too much shit this morning over this case to hand it over to your dumb ass.']);

            DB::table('posts')->insert([
            'title' => 'Carl Sagan Blog',
            'post' => 'A very small stage in a vast cosmic arena radio telescope paroxysm of global death Tunguska event at the edge of forever take root and flourish. Stirred by starlight muse about decipherment hydrogen atoms Orion\'s sword Drake Equation. Realm of the galaxies something incredible is waiting to be known made in the interiors of collapsing stars dispassionate extraterrestrial observer rings of Uranus great turbulent clouds? Something incredible is waiting to be known invent the universe star stuff harvesting star light dispassionate extraterrestrial observer a mote of dust suspended in a sunbeam bits of moving fluff.<br>
            Ship of the imagination Flatland brain is the seed of intelligence extraordinary claims require extraordinary evidence emerged into consciousness cosmos. Light years dispassionate extraterrestrial observer rich in heavy atoms muse about tingling of the spine the ash of stellar alchemy. Courage of our questions something incredible is waiting to be known hydrogen atoms the only home we\'ve ever known something incredible is waiting to be known courage of our questions.<br>
            Kindling the energy hidden in matter concept of the number one Cambrian explosion corpus callosum cosmos muse about. At the edge of forever the only home we\'ve ever known at the edge of forever finite but unbounded Drake Equation astonishment? Something incredible is waiting to be known courage of our questions a still more glorious dawn awaits great turbulent clouds two ghostly white figures in coveralls and helmets are soflty dancing rich in heavy atoms and billions upon billions upon billions upon billions upon billions upon billions upon billions.']);

            DB::table('posts')->insert(['title' => 'Post 9', 'post' => 'This is post number nine' ]);
            DB::table('posts')->insert(['title' => 'Post 10', 'post' => 'This is post number ten' ]);
            DB::table('posts')->insert(['title' => 'Post 11', 'post' => 'This is post number eleven' ]);
            DB::table('posts')->insert(['title' => 'Post 12', 'post' => 'This is post number twelve' ]);


    }
}
