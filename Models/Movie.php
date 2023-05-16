<?php
class Movie
{
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
    public $image;
    public $flagIcons = [
        'de',
        'en',
        'fr',
        'it'
    ];

    public function __construct($id, $title, $original_title, $nationality, $date, $vote, $image){
        $this->id = $id;
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
        $this->image = $image;
    }

    public function getFlag(){
        if (in_array($this->nationality, $this->flagIcons)) {
            return "<img style='width: 3rem;' src='img/$this->nationality.png' alt='flag_icons'>";
        }
    }
}