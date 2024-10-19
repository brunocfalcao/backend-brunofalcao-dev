<?php

namespace BrunoFalcaoDev\Livewire;

use Eduka\Cube\Models\Episode;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class WatchEpisode extends Component
{
    public $episode;
    public $chapter;
    public $course;
    public $courseChapters;
    public $next_episode;
    public $previous_episode;

    public function markEpisodeAsSeen()
    {
        $student = Auth::user();
        $student->markEpisodeAsSeen($this->episode);

        if (isset($this->next_episode))
            $this->redirectRoute('episode.play', ['episode' => $this->next_episode]);
    }

    public function unmarkEpisodeAsSeen()
    {
        $student = Auth::user();
        $student->unmarkEpisodeAsSeen($this->episode);
    }

    public function bookmarkEpisode()
    {
        $student = Auth::user();
        $student->bookmarkEpisode($this->episode);
    }

    public function unbookmarkEpisode()
    {
        $student = Auth::user();
        $student->unbookmarkEpisode($this->episode);
    }

    public function mount(Episode $episode)
    {
        $this->episode = $episode;
    }

    public function loadEpisodeDetails()
    {
        $course = $this->episode->course()->first();

        $this->next_episode = null;
        $this->previous_episode = null;

        $student = Auth::user();

        $chaptersQuery = $course->chapters()->with('episodes')->get();
        $chapters = [];

        // TODO: move all of these into eduka cube
        $course->episode_count = 0;
        $course->chapter_count = count($chaptersQuery);
        $course->seen_episode_count = 0;

        $previousEpisode = null;
        $previousEpisodeIsCurrent = false;

        foreach ($chaptersQuery as $currentChapter) {
            $currentChapter->is_completed = true;
            $currentChapter->is_current = false;
            $currentChapter->episode_count = 0;

            foreach ($currentChapter->episodes as $currentEpisode) {
                $course->episode_count += 1;
                $currentChapter->episode_count += 1;

                $currentEpisode->is_current = ($currentEpisode->id == $this->episode->id);
                $currentEpisode->is_seen = $student->isEpisodeSeen($currentEpisode);
                $currentEpisode->is_bookmarked = $student->isEpisodeBookmarked($currentEpisode);

                if ($currentEpisode->is_seen) {
                    $course->seen_episode_count += 1;
                } else {
                    $currentChapter->is_completed = false;
                }

                if ($previousEpisodeIsCurrent) {
                    $this->next_episode = $currentEpisode;
                }

                if ($currentEpisode->is_current) {
                    $currentChapter->is_current = true;
                    $this->previous_episode = $previousEpisode;
                    $previousEpisodeIsCurrent = true;
                } else {
                    $previousEpisodeIsCurrent = false;
                }

                $previousEpisode = $currentEpisode;
            }

            $chapters[] = $currentChapter;
        }

        $course->completed_percent = (
            $course->episode_count == 0 ? 100
            : intval(100 * $course->seen_episode_count / $course->episode_count));

        // set annotated chapter
        foreach ($chapters as $chapter)
            if ($chapter->is_current)
                $this->chapter = $chapter;

        $this->episode->is_seen = $student->isEpisodeSeen($this->episode);
        $this->episode->is_bookmarked = $student->isEpisodeBookmarked($this->episode);
        $this->courseChapters = $chapters;
        $this->course = $course;
    }

    public function render()
    {
        $this->loadEpisodeDetails();
        return view('backend::livewire.watch-episode');
    }
}
