<?php

namespace BrunoFalcaoDev\Livewire;

use Eduka\Cube\Models\Course;
use Eduka\Cube\Models\Episode;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class GlobalSearch extends Component
{
    public $query = "";

    public function render()
    {
        $results = [];
        $max_results = 10;

        if ($this->query !== '') {
            // Search courses
            $courses = Course::where('name', 'LIKE', '%' . $this->query . '%')->get();
            foreach ($courses as $course) {
                if (count($results) < $max_results) {
                    $results[] = [
                        'title' => $course->name,
                        'url' => route('course.view', $course->canonical),
                    ];
                }
            }

            // Search episodes
            $episodes = Episode::where('name', 'LIKE', '%' . $this->query . '%')->get();
            foreach ($episodes as $episode) {
                if (count($results) < $max_results) {
                    $results[] = [
                        'title' => $episode->name,
                        'url' => route('episode.play', $episode->uuid),
                    ];
                }
            }
        }

        return view('backend::livewire.global-search', [
            'results' => $results
        ]);
    }
}
