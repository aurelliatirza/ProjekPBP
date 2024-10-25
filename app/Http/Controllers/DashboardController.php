<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardDekan()
    {
        // Logic for the Dekan dashboard
        // Example data, can be fetched from the database
        $data = [
            'user' => [
                'name' => 'Bill Gates',
                'nip' => '198203092006041002',
                'program_studi' => 'S1 Informatika',
                'roles2' => 'dekan', // Ensure you have the correct role here
            ],
            // Other data for the dashboard
            'semester' => [
                'current' => '2024/2025 Ganjil',
                'period' => '1 Mar - 2 April'
            ],
            'progress' => [
                'belum_mengusulkan' => ['count' => 1, 'total' => 6],
                'telah_dikonfirmasi' => ['count' => 4, 'total' => 6],
                'belum_dikonfirmasi' => ['count' => 1, 'total' => 6]
            ]
        ];

        return view('layouts.dashboardDekan', compact('data'));
;
    }

    public function dashboardDoswal()
    {
        // Logic for the Dosen Wali dashboard
        // Example data, can be fetched from the database
        $data = [
            'user' => [
                'name' => 'Bill Gates',
                'nip' => '198203092006041002',
                'program_studi' => 'S1 Informatika',
                'roles1' => 'dosen_wali', // Ensure you have the correct role here
            ],
            // Other data for the dashboard
            'semester' => [
                'current' => '2024/2025 Ganjil',
                'period' => '1 Mar - 2 April'
            ],
            'progress' => [
                'disetujui' => ['count' => 40, 'total' => 56],
                'ditolak' => ['count' => 5, 'total' => 46],
                'pending' => ['count' => 11, 'total' => 56]
            ]
        ];

        return view('layouts.dashboardDoswal', compact('data'));
    }
}
