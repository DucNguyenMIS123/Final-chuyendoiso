<?php
// Mock Data for ChronicCare VN Demo

$patients = [
    1 => [
        'id' => 1,
        'name' => 'Vo Van Na',
        'age' => 68,
        'gender' => 'Male',
        'avatar_color' => '#D62828', // Red
        'initials' => 'VN',
        'risk_level' => 'High',
        'conditions' => ['Hypertension', 'Type 2 Diabetes'],
        'last_vital' => '10 min ago',
        'bp' => '165/95',
        'hr' => 92,
        'glucose' => 180,
        'allergies' => ['Penicillin', 'Peanuts'],
        'medications' => [
            ['name' => 'Amlodipine', 'dose' => '5mg', 'freq' => 'Daily', 'adherence' => 85],
            ['name' => 'Metformin', 'dose' => '500mg', 'freq' => 'Twice daily', 'adherence' => 90]
        ]
    ],
    2 => [
        'id' => 2,
        'name' => 'Tran Thi Le',
        'age' => 62,
        'gender' => 'Female',
        'avatar_color' => '#F59E0B', // Yellow
        'initials' => 'TL',
        'risk_level' => 'Moderate',
        'conditions' => ['Pre-diabetes', 'Obesity'],
        'last_vital' => '2 hours ago',
        'bp' => '135/88',
        'hr' => 78,
        'glucose' => 140,
        'allergies' => ['None'],
        'medications' => [
            ['name' => 'Metformin', 'dose' => '500mg', 'freq' => 'Daily', 'adherence' => 70]
        ]
    ],
    3 => [
        'id' => 3,
        'name' => 'Nguyen Minh',
        'age' => 45,
        'gender' => 'Male',
        'avatar_color' => '#10B981', // Green
        'initials' => 'NM',
        'risk_level' => 'Stable',
        'conditions' => ['Hypertension (Controlled)'],
        'last_vital' => '1 day ago',
        'bp' => '118/76',
        'hr' => 72,
        'glucose' => 105,
        'allergies' => ['Sulfa drugs'],
        'medications' => [
            ['name' => 'Lisinopril', 'dose' => '10mg', 'freq' => 'Daily', 'adherence' => 100]
        ]
    ]
];

function getRiskBadge($level)
{
    if ($level === 'High')
        return '<span class="badge bg-danger">High Risk</span>';
    if ($level === 'Moderate')
        return '<span class="badge bg-warning text-dark">Moderate</span>';
    return '<span class="badge bg-success">Stable</span>';
}
?>