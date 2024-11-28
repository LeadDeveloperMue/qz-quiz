<?php
$questions = [
    [
        'question' => 'What is the legal minimum age for obtaining a driver\'s license in Zimbabwe?',
        'options' => ['16', '18', '21', '25'],
        'correct' => 1
    ],
    [
        'question' => 'What does a solid white line at the edge of the road indicate?',
        'options' => ['Lane boundary', 'No overtaking', 'Pedestrian crossing', 'Parking allowed'],
        'correct' => 0
    ],
    [
        'question' => 'When is it legal to overtake another vehicle on the right in Zimbabwe?',
        'options' => ['Always', 'When the road is clear and no solid line is present', 'When the other vehicle signals to pull over', 'Only when the speed limit allows'],
        'correct' => 1
    ],
    [
        'question' => 'What should you do when you approach a stop sign?',
        'options' => ['Slow down and look around', 'Stop completely and give way to other vehicles or pedestrians', 'Drive through cautiously', 'Honk to warn other drivers'],
        'correct' => 1
    ],
    [
        'question' => 'What is the meaning of a red traffic light?',
        'options' => ['Stop', 'Proceed with caution', 'Speed up', 'Wait for green'],
        'correct' => 0
    ],
    [
        'question' => 'What is the speed limit in urban areas in Zimbabwe?',
        'options' => ['40 km/h', '50 km/h', '60 km/h', '80 km/h'],
        'correct' => 1
    ],
    [
        'question' => 'What should you do if your vehicle breaks down on the highway?',
        'options' => ['Leave the vehicle immediately and walk to the nearest town', 'Turn on hazard lights and stay inside until help arrives', 'Drive the car to the nearest service station', 'Continue driving until you reach a police station'],
        'correct' => 1
    ],
    [
        'question' => 'What is the correct hand signal for a left turn?',
        'options' => ['Left arm extended horizontally', 'Left arm raised vertically', 'Right arm extended horizontally', 'Both arms extended horizontally'],
        'correct' => 0
    ],
    [
        'question' => 'What does a triangular road sign with a red border typically indicate?',
        'options' => ['Warning', 'Speed limit', 'No parking', 'Mandatory direction'],
        'correct' => 0
    ],
    [
        'question' => 'What should you do if you are driving at night and a vehicle with bright headlights approaches?',
        'options' => ['Flash your headlights to warn them', 'Slow down and steer to the left side of the road', 'Speed up to avoid their headlights', 'Keep your headlights on high beam'],
        'correct' => 1
    ],
    [
        'question' => 'What is the maximum allowable blood alcohol concentration (BAC) for drivers in Zimbabwe?',
        'options' => ['0.05%', '0.08%', '0.1%', '0.15%'],
        'correct' => 0
    ],
    [
        'question' => 'What should you do when you see a pedestrian crossing the road at a marked pedestrian crossing?',
        'options' => ['Stop and let the pedestrian cross', 'Honk the horn to alert the pedestrian', 'Speed up to cross before the pedestrian', 'Continue driving as usual'],
        'correct' => 0
    ],
    [
        'question' => 'In Zimbabwe, what is the fine for not wearing a seatbelt while driving?',
        'options' => ['$5', '$10', '$20', '$50'],
        'correct' => 2
    ],
    [
        'question' => 'When is it appropriate to use a mobile phone while driving?',
        'options' => ['Only when stopped at a traffic light', 'Never, unless using hands-free devices', 'When driving at a low speed', 'When driving on a deserted road'],
        'correct' => 1
    ],
    [
        'question' => 'What does a blue road sign with a white arrow pointing right mean?',
        'options' => ['Right turn only', 'No entry', 'Give way', 'End of road'],
        'correct' => 0
    ],
    [
        'question' => 'What is the purpose of a "Give Way" sign?',
        'options' => ['To stop', 'To give way to other traffic', 'To signal a pedestrian crossing', 'To indicate a sharp turn ahead'],
        'correct' => 1
    ],
    [
        'question' => 'What should you do when driving in foggy conditions?',
        'options' => ['Increase your speed to get through the fog quickly', 'Use high beam headlights', 'Slow down and use fog lights if available', 'Drive in the middle of the road'],
        'correct' => 2
    ],
    [
        'question' => 'What does a circular road sign with a red border and a white center indicate?',
        'options' => ['No entry', 'Speed limit', 'No parking', 'Stop'],
        'correct' => 0
    ],
    [
        'question' => 'What does a diamond-shaped road sign with a yellow background generally indicate?',
        'options' => ['Caution or warning of hazards', 'A service station ahead', 'A railway crossing ahead', 'A police checkpoint'],
        'correct' => 0
    ],
    [
        'question' => 'When should you use your vehicle’s horn?',
        'options' => ['To signal your arrival', 'To warn other drivers of potential danger', 'When overtaking', 'To express frustration with another driver'],
        'correct' => 1
    ],
    [
        'question' => 'What is the minimum safe following distance behind another vehicle?',
        'options' => ['1 second', '2 seconds', '3 seconds', '4 seconds'],
        'correct' => 2
    ],
    [
        'question' => 'What does a "no overtaking" sign indicate?',
        'options' => ['You may overtake only during the day', 'You cannot overtake at all on that section of road', 'You may overtake when it is safe', 'Only large vehicles are prohibited from overtaking'],
        'correct' => 1
    ],
    [
        'question' => 'How should you react when approaching a traffic circle (roundabout)?',
        'options' => ['Give way to traffic already in the circle', 'Speed up to enter the circle quickly', 'Stop and wait for traffic to clear', 'Enter the circle without giving way to anyone'],
        'correct' => 0
    ],
    [
        'question' => 'What should you do if you are driving and suddenly a vehicle ahead of you stops suddenly?',
        'options' => ['Accelerate to overtake quickly', 'Honk and flash your lights', 'Slow down and increase the following distance', 'Brake sharply and try to stop'],
        'correct' => 2
    ],
    [
        'question' => 'What is the meaning of the road sign indicating a “Pedestrian Crossing”?',
        'options' => ['Pedestrians may cross, yield to them', 'You must stop for pedestrians at all times', 'Pedestrians are not allowed to cross the road', 'Cars must speed up to clear the crossing'],
        'correct' => 0
    ],
    [
        'question' => 'What action should be taken if you see a “School Zone” sign?',
        'options' => ['Slow down and be alert for children crossing', 'Speed up to pass through quickly', 'Honk to warn children', 'Stop and wait for the school bell to ring'],
        'correct' => 0
    ]
];

// Shuffle the questions array
shuffle($questions);
?>
