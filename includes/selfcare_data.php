<?php
$symptom_categories = [
    'Cardiovascular' => [
        'icon' => 'fa-heart-pulse',
        'color' => 'text-danger',
        'symptoms' => [
            'fast_heartbeat' => 'Rapid Heartbeat',
            'mild_chest_tightness' => 'Mild Chest Tightness',
            'lightheadedness' => 'Lightheadedness'
        ]
    ],
    'Blood Sugar' => [
        'icon' => 'fa-droplet',
        'color' => 'text-warning',
        'symptoms' => [
            'hypoglycemia' => 'Shaking / Sweating',
            'hyperglycemia' => 'Excessive Thirst'
        ]
    ],
    'Respiratory' => [
        'icon' => 'fa-lungs',
        'color' => 'text-info',
        'symptoms' => [
            'mild_cough' => 'Mild Cough',
            'mild_shortness' => 'Mild Shortness of Breath'
        ]
    ],
    'General' => [
        'icon' => 'fa-user-md',
        'color' => 'text-primary',
        'symptoms' => [
            'fatigue' => 'Fatigue',
            'headache' => 'Headache',
            'anxiety' => 'Anxiety / Stress'
        ]
    ]
];

$symptom_details = [
    'fast_heartbeat' => [
        'label' => "Rapid Heartbeat",
        'primary_symptoms' => ["Heart rate > 100 bpm", "Fluttering sensation"],
        'secondary_symptoms' => ["Anxiety", "Mild dizziness"],
        'immediate_actions' => [
            "Sit or lie down comfortably.",
            "Take slow, deep breaths (inhale 4s, hold 4s, exhale 4s).",
            "Drink a glass of water to stay hydrated.",
            "Try the Valsalva maneuver (pinch nose, close mouth, and blow gently)."
        ],
        'what_to_avoid' => [
            "Caffeine (coffee, energy drinks)",
            "Heavy physical exertion",
            "Stressful situations"
        ],
        'monitoring_checklist' => [
            "Check pulse every 15 minutes",
            "Measure blood pressure if possible"
        ],
        'otc_meds' => ["Magnesium supplement (if advised)", "Electrolytes"],
        'when_to_seek_help' => "If your heart rate stays > 120 bpm for 20 mins, or you feel chest pain/fainting -> GO TO ER.",
        'summary_pdf' => "Heart_Rate_Guide.pdf"
    ],
    'mild_chest_tightness' => [
        'label' => "Mild Chest Tightness",
        'primary_symptoms' => ["Pressure in center of chest", "Discomfort breathing"],
        'secondary_symptoms' => ["Nausea", "Sweating"],
        'immediate_actions' => [
            "Stop all activity immediately.",
            "Sit in a semi-reclined position.",
            "Loosen tight clothing.",
            "Maintain steady breathing."
        ],
        'what_to_avoid' => [
            "Eating a heavy meal",
            "Lying flat on your back",
            "Physical strain"
        ],
        'monitoring_checklist' => [
            "Rate pain from 1-10 every 10 mins",
            "Monitor BP"
        ],
        'otc_meds' => ["Aspirin (chewable, only if not allergic and advised)"],
        'when_to_seek_help' => "If pain radiates to arm/jaw, or lasts > 5 mins -> CALL 911/115.",
        'summary_pdf' => "Chest_Pain_Guide.pdf"
    ],
    'lightheadedness' => [
        'label' => "Lightheadedness",
        'primary_symptoms' => ["Feeling faint", "Unsteady balance"],
        'secondary_symptoms' => ["Visual spotting", "Weakness"],
        'immediate_actions' => [
            "Sit down with head between knees or lie down with legs elevated.",
            "Drink water slowly.",
            "Eat a small salty snack if BP might be low."
        ],
        'what_to_avoid' => [
            "Standing up quickly",
            "Hot showers",
            "Alcohol"
        ],
        'monitoring_checklist' => [
            "Check BP sitting vs standing",
            "Monitor consciousness level"
        ],
        'otc_meds' => ["None generally indicated"],
        'when_to_seek_help' => "If you faint or have severe headache/slurred speech -> SEE DOCTOR.",
        'summary_pdf' => "Dizziness_Guide.pdf"
    ],
    'hypoglycemia' => [
        'label' => "Shaking / Sweating (Low Sugar)",
        'primary_symptoms' => ["Trembling hands", "Cold sweats"],
        'secondary_symptoms' => ["Hunger", "Irritability", "Confusion"],
        'immediate_actions' => [
            "Check glucose if possible (< 70 mg/dL confirms).",
            "Consume 15g fast-acting carbs: 4oz juice, 1 tbsp honey, or glucose tabs.",
            "Wait 15 mins, re-check."
        ],
        'what_to_avoid' => [
            "Driving",
            "Skipping meals",
            "Insulin injection until stable"
        ],
        'monitoring_checklist' => [
            "Re-check glucose every 15 mins until normal"
        ],
        'otc_meds' => ["Glucose tablets"],
        'when_to_seek_help' => "If you can't swallow or feel like passing out -> CALL EMERGENCY.",
        'summary_pdf' => "Hypoglycemia_Action_Plan.pdf"
    ],
    'hyperglycemia' => [
        'label' => "Excessive Thirst (High Sugar)",
        'primary_symptoms' => ["Dry mouth", "Frequent urination"],
        'secondary_symptoms' => ["Fatigue", "Blurred vision"],
        'immediate_actions' => [
            "Drink plenty of water (sugar-free).",
            "Take correction insulin if prescribed.",
            "Test ketones if glucose > 240 mg/dL."
        ],
        'what_to_avoid' => [
            "Sugary drinks/foods",
            "High-intensity exercise if ketones present"
        ],
        'monitoring_checklist' => [
            "Check glucose every 2 hours",
            "Monitor urine output"
        ],
        'otc_meds' => ["None"],
        'when_to_seek_help' => "If breathing becomes rapid/fruity breath -> ER (DKA risk).",
        'summary_pdf' => "High_Glucose_Guide.pdf"
    ],
    'mild_cough' => [
        'label' => "Mild Cough",
        'primary_symptoms' => ["Dry or tickly throat", "Occasional coughing"],
        'secondary_symptoms' => ["Runny nose", "Sneezing"],
        'immediate_actions' => [
            "Stay hydrated with warm fluids.",
            "Use a humidifier.",
            "Gargle warm salt water.",
            "Sip honey lemon tea."
        ],
        'what_to_avoid' => [
            "Cold drinks",
            "Smoke/dust exposure",
            "Speaking loudly for long periods"
        ],
        'monitoring_checklist' => [
            "Monitor temperature",
            "Note cough frequency"
        ],
        'otc_meds' => ["Cough lozenges", "Dextromethorphan (suppressant)"],
        'when_to_seek_help' => "If cough lasts > 3 weeks or you cough up blood -> SEE DOCTOR.",
        'summary_pdf' => "Cough_Care.pdf"
    ],
    'mild_shortness' => [
        'label' => "Mild Shortness of Breath",
        'primary_symptoms' => ["Feeling 'winded'", "Need to breathe faster"],
        'secondary_symptoms' => ["Anxiety", "Fatigue"],
        'immediate_actions' => [
            "Sit upright slightly leaning forward (tripod position).",
            "Practice pursed-lip breathing.",
            "Use prescribed inhaler if asthmatic."
        ],
        'what_to_avoid' => [
            "Lying flat",
            "Exertion",
            "Polluted air"
        ],
        'monitoring_checklist' => [
            "Check oxygen saturation (SpO2)",
            "Count breaths per minute"
        ],
        'otc_meds' => ["None"],
        'when_to_seek_help' => "If SpO2 < 92% or lips turn blue -> EMERGENCY.",
        'summary_pdf' => "Breathing_Guide.pdf"
    ],
    'fatigue' => [
        'label' => "Fatigue / Exhaustion",
        'primary_symptoms' => ["Lack of energy", "Sleepiness"],
        'secondary_symptoms' => ["Difficulty concentrating", "Muscle weakness"],
        'immediate_actions' => [
            "Hydrate immediately.",
            "Take a short power nap (20 mins).",
            "Eat a balanced meal.",
            "Get fresh air."
        ],
        'what_to_avoid' => [
            "Heavy meals",
            "Screen time before bed",
            "Excessive caffeine"
        ],
        'monitoring_checklist' => [
            "Track sleep hours",
            "Monitor diet"
        ],
        'otc_meds' => ["Multivitamins", "Iron (if deficient)"],
        'when_to_seek_help' => "If fatigue prevents daily activities for > 2 weeks -> SEE DOCTOR.",
        'summary_pdf' => "Energy_Management.pdf"
    ],
    'headache' => [
        'label' => "Headache",
        'primary_symptoms' => ["Throbbing or dull pain in head"],
        'secondary_symptoms' => ["Sensitivity to light", "Nausea"],
        'immediate_actions' => [
            "Rest in a dark, quiet room.",
            "Apply cold compress to forehead.",
            "Massage neck and temples.",
            "Drink water."
        ],
        'what_to_avoid' => [
            "Bright screens",
            "Loud noises",
            "Skipping meals"
        ],
        'monitoring_checklist' => [
            "Track headache duration",
            "Identify triggers"
        ],
        'otc_meds' => ["Acetaminophen", "Ibuprofen"],
        'when_to_seek_help' => "If worst headache of life or stiff neck -> EMERGENCY.",
        'summary_pdf' => "Headache_Relief.pdf"
    ],
    'anxiety' => [
        'label' => "Anxiety / Stress",
        'primary_symptoms' => ["Worry", "Restlessness"],
        'secondary_symptoms' => ["Rapid heart rate", "Sweating", "Insomnia"],
        'immediate_actions' => [
            "Practice box breathing (4-4-4-4).",
            "Grounding technique: 5 things you see, 4 you feel...",
            "Physical activity (walk/stretch)."
        ],
        'what_to_avoid' => [
            "Caffeine/Alcohol",
            "Doomscrolling news",
            "Isolation"
        ],
        'monitoring_checklist' => [
            "Journal thoughts",
            "Track sleep quality"
        ],
        'otc_meds' => ["Herbal tea (Chamomile)", "Magnesium"],
        'when_to_seek_help' => "If panic attacks are frequent -> TALK TO DOCTOR.",
        'summary_pdf' => "Stress_Management.pdf"
    ]
];
?>