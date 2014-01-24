<?php

class HackathonController extends BaseController {
    public function showHackathon($seo_url) {
        $hackathon = Hackathon::where('seo_url', '=', $seo_url)->firstOrFail();

        return View::make('hackathon.show', array('hackathon' => $hackathon));
    }

    public function newHackathon() {
        $hackathon = new Hackathon;
        $hackathon->title = 'Yet Another New Hackathon!';

        return View::make('hackathon.new', array('hackathon' => $hackathon));
    }

    public function createHackathon() {
        $hackathon = new Hackathon(Input::all());
        $hackathon->save();

        return Redirect::to(action('HackathonController@showHackathon',
                                   array(
                                         'seo_url' => $hackathon->seo_url,
                                         )
                                   ));
    }
}