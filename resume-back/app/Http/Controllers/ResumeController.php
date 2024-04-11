<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Experience;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'kana' => 'nullable',
            'birthDate' => 'nullable|date',
            'postalCode' => 'nullable',
            'address' => 'nullable',
            'gender' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'motivation' => 'nullable',
            'selfPr' => 'nullable',
            'experiences' => 'nullable|array',
            'experiences.*.date' => 'nullable',
            'experiences.*.industry' => 'nullable',
            'experiences.*.description' => 'nullable',
            'experiences.*.tools' => 'nullable',
        ]);

        $resume = Resume::create($data);

		// debug標準出力
		error_log(print_r($data, true));

        if (isset($data['experiences'])) {
            foreach ($data['experiences'] as $experienceData) {
                $experience = new Experience($experienceData);
				// $experience->save();
				// $experience = Experience::create($experienceData);
                $resume->experiences()->save($experience);
            }
        }

        return response()->json($resume, 201);
    }
}
