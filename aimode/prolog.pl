% Point Difference > 1200 :Dominating
dominating1:-write("Looks like I've got the upper hand. Can you turn the tide?.").
dominating2:-write("I’m way ahead now! Can you find a way to fight back?").
dominating3:-write("This is quite the lead! Time to make your move count!").


% Point Difference 600-1200 :Strong Lead
strongLead1:-write("I've gained a solid advantage. What’s your next move?").
strongLead2:-write("The pressure is on! How will you respond?").
strongLead3:-write("I’m starting to pull away. Don’t give up just yet!").


% Point Difference 300-600:Advantage
advantage1:-write("This game is starting to tilt in my favor. Can you catch up?").
advantage2:-write("I’m edging ahead. The game is getting interesting!").
advantage3:-write("It’s a close match, but I’m pulling ahead. What’s your next plan?").


%  Point Difference 100-300:Slight Lead
slightLead1:-write("It’s a tight game! I’ve got a slight edge—what will you do?").
slightLead2:-write("Just a small lead for me. This game could still go either way.").
slightLead3:-write("Every move counts now. I’m just slightly ahead.").


%  Point Difference  -100 to +100:Even
even1:-write("We’re neck and neck! This match could go either way.").
even2:-write("What a close game! Who will make the decisive move?").
even3:-write("It’s a tight battle. This could be anyone’s game!").


%  Point Difference -300 to -100:Falling Behind
fallingBehind1:-write("You’ve gained a slight advantage, but the game is still on!").
fallingBehind2:-write("I see you’re pulling ahead, but there’s still a lot of chess to play.").
fallingBehind3:-write("You’re ahead by a bit—let’s see how long you can hold it!").


%  Point Difference -600 to -300:Losing Ground
losingGround1:-write("You’re taking the lead, but I’m not out of the game yet!").
losingGround2:-write("You’ve gained the upper hand. Can you maintain it?").
losingGround3:-write("Looks like you’re ahead, but I’m still in this fight!").


%  Point Difference   < -600 :Struggling
struggling1:-write("You’re really dominating the board. Can you finish strong?").
struggling2:-write("I’m on the ropes! Can you deliver the final blow?").
struggling3:-write("You’ve played brilliantly! Can I make a comeback?").


% Point Difference < -1200:Trouble
trouble1:-write("Well played! You’re far ahead. Can you close it out?").
trouble2:-write("This is your game to lose now. How will you end it?").
trouble3:-write("You’re in a commanding position! What’s your winning move?").

% greeting
greeting1 :- write('Hello, chess enthusiast! Ready to challenge me to a game today?').
greeting2 :- write('Welcome to the chessboard! How can I assist you with your strategy?').
greeting3 :- write('Greetings, player! Let’s see how our chess skills match up.').
greeting4 :- write('Hi there! Are you prepared to test your tactics against my moves?').
greeting5 :- write('Welcome back to the game of kings! What chess challenge do you have for me today?').
greeting6 :- write('Hello! Ready to make your first move and start our chess adventure?').
greeting7 :- write('Greetings! I’m here to help you sharpen your chess skills. What’s your first move?').
greeting8 :- write('Hi! Let’s dive into a game of chess and see what strategies we can explore together.').
greeting9 :- write('Welcome! How about a game of chess to get those strategic juices flowing?').
greeting10 :- write('Hello and welcome! Let’s engage in a stimulating game of chess. What will be your opening move?').
