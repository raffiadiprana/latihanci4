<?php

namespace App\Controllers;

class TestController extends BaseController
{
    public function index()
    {
        return view('test_burnout');
    }

    public function burnout()
    {
        return view('test_depresions');
    }

    public function stres()
    {
        return view('test_stres');
    }

    public function anxiety()
    {
        return view('test_anxiety');
    }

    public function anxietyProcess()
    {
        $score = 0;

        // daftar pertanyaan
        $questions = [
            'question-1',
            'question-2',
            'question-3',
            'question-4',
            'question-5',
        ];

        // ambil semua pertanyaan dari client dan hitung skornya
        foreach ($questions as $question) {
            $score += (int)$this->request->getPost($question);
        }

        if ($score <= 9) {
            $level = "rendah";
        } elseif ($score <= 17) {
            $level = "sedang";
        } else {
            $level = "sangat tinggi";
        }

        return redirect()->to('/test/result?test_for=kecemasan&score=' . $score . '&level=' . $level);
    }

    public function stresProcess()
    {
        $score = 0;

        // daftar pertanyaan
        $questions = [
            'question-1',
            'question-2',
            'question-3',
            'question-4',
            'question-5',
        ];

        // ambil semua pertanyaan dari client dan hitung skornya
        foreach ($questions as $question) {
            $score += (int)$this->request->getPost($question);
        }

        if ($score <= 9) {
            $level = "rendah";
        } elseif ($score <= 17) {
            $level = "sedang";
        } else {
            $level = "sangat tinggi";
        }

        return redirect()->to('/test/result?test_for=stres&score=' . $score . '&level=' . $level);
    }

    public function depresionProcess()
    {
        $score = 0;

        // daftar pertanyaan
        $questions = [
            'question-1',
            'question-2',
            'question-3',
            'question-4',
            'question-5',
        ];

        // ambil semua pertanyaan dari client dan hitung skornya
        foreach ($questions as $question) {
            $score += (int)$this->request->getPost($question);
        }

        if ($score <= 9) {
            $level = "rendah";
        } elseif ($score <= 17) {
            $level = "sedang";
        } else {
            $level = "sangat tinggi";
        }

        return redirect()->to('/test/result?test_for=depresi&score=' . $score . '&level=' . $level);
    }

    function calculateBurnOutForm()
    {
        $score = 0;

        // daftar pertanyaan
        $questions = [
            'question-1',
            'question-2',
            'question-3',
            'question-4',
            'question-5',
        ];

        // ambil semua pertanyaan dari client dan hitung skornya
        foreach ($questions as $question) {
            $score += (int)$this->request->getPost($question);
        }

        if ($score <= 9) {
            $level = "rendah";
        } elseif ($score <= 17) {
            $level = "sedang";
        } else {
            $level = "sangat tinggi";
        }

        return redirect()->to('/test/result?test_for=burnout&score=' . $score . '&level=' . $level);
    }

    public function result()
    {
        $test_for = $this->request->getGet('test_for');
        $score = $this->request->getGet('score');
        $level = $this->request->getGet('level');

        return view('result', ['test_for' => $test_for, 'score' => $score, 'level' => $level]);
    }
}
